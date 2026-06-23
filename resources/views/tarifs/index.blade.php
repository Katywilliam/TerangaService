@extends('layouts.app')
@section('title', 'Tarifs - Teranga Service')
@section('content')
<style>
.tarif-row{border-bottom:1px solid #F3F4F6;transition:background .12s;}
.tarif-row:last-child{border-bottom:none;}
.tarif-row:hover{background:#F9FAFB;}
</style>

{{-- Hero --}}
<div style="background:linear-gradient(135deg,#1B3A6B,#2A5298);color:white;padding:56px 20px;text-align:center;font-family:'Poppins',sans-serif;">
  <div style="max-width:700px;margin:0 auto;">
    <div style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
    </div>
    <h1 style="font-size:clamp(28px,5vw,42px);font-weight:700;margin:0 0 8px;">Nos tarifs</h1>
    <p style="font-size:16px;color:#D1D5DB;margin:0;">Des prix transparents et compétitifs pour tous nos services</p>
  </div>
</div>

<div style="padding:50px 20px;font-family:'Poppins',sans-serif;">
  <div style="max-width:900px;margin:0 auto;">
    <div style="background:white;border-radius:14px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.06);border-top:4px solid #3A9E3A;">
      {{-- En-tête table --}}
      <div style="background:#1B3A6B;display:grid;grid-template-columns:2fr 1fr 1fr;padding:14px 22px;">
        <span style="color:white;font-weight:600;font-size:14px;">Service</span>
        <span style="color:white;font-weight:600;font-size:14px;text-align:center;">Prix</span>
        <span style="color:white;font-weight:600;font-size:14px;text-align:center;">Unité</span>
      </div>
      {{-- Lignes --}}
      @foreach([
        ['Ménage',            '3 500','Heure',       '#DCFCE7','#166534','<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>'],
        ['Plomberie',         '5 000','Intervention', '#DBEAFE','#1e40af','<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>'],
        ['Cuisine à domicile','3 000','Repas',        '#FEF3C7','#92400e','<path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/>'],
        ['Électricité',       '5 500','Intervention', '#EDE9FE','#4c1d95','<polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>'],
        ['Climatisation',     '4 000','Intervention', '#E0F2FE','#075985','<polyline points="8 6 2 12 8 18"/><polyline points="16 6 22 12 16 18"/>'],
        ['Informatique',      '4 500','Heure',        '#F0FDF4','#166534','<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>'],
        ['Jardinage',         '4 000','Heure',        '#DCFCE7','#166534','<path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>'],
        ['Garde d\'enfants',  '2 500','Heure',        '#FEF3C7','#92400e','<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>'],
      ] as [$nom,$prix,$unite,$bg,$tc,$svg])
      <div class="tarif-row" style="display:grid;grid-template-columns:2fr 1fr 1fr;padding:14px 22px;align-items:center;">
        <div style="display:flex;align-items:center;gap:10px;">
          <div style="width:34px;height:34px;border-radius:8px;background:{{ $bg }};display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="{{ $tc }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $svg !!}</svg>
          </div>
          <span style="font-weight:600;font-size:14px;color:#1B3A6B;">{{ $nom }}</span>
        </div>
        <span style="font-weight:700;color:#3A9E3A;font-size:15px;text-align:center;">{{ $prix }} FCFA</span>
        <span style="color:#6B7280;font-size:13px;text-align:center;">{{ $unite }}</span>
      </div>
      @endforeach
    </div>

    {{-- Note --}}
    <div style="display:flex;align-items:flex-start;gap:10px;background:#F0FDF4;border:1px solid #DCFCE7;border-radius:10px;padding:14px 16px;margin-top:20px;">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:1px;" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p style="margin:0;font-size:13px;color:#374151;">Tarifs indicatifs. Un devis personnalisé est disponible sur demande.
        <a href="{{ route('contact') }}" style="color:#3A9E3A;font-weight:600;text-decoration:none;"> Demander un devis →</a>
      </p>
    </div>
  </div>
</div>
@endsection
