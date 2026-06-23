@extends('layouts.app')
@section('title', 'Prestataires - Teranga Service')
@section('content')
<style>
.prest-card{background:white;border:1px solid #E5E7EB;border-radius:12px;overflow:hidden;transition:box-shadow .2s,transform .2s;}
.prest-card:hover{box-shadow:0 8px 28px rgba(0,0,0,.1);transform:translateY(-2px);}
.filter-input{width:100%;padding:8px 12px;border:1.5px solid #E5E7EB;border-radius:8px;font-size:13px;font-family:'Poppins',sans-serif;outline:none;transition:border-color .15s;}
.filter-input:focus{border-color:#3A9E3A;}
.btn-voir{display:flex;align-items:center;justify-content:center;gap:6px;margin-top:10px;background:#3A9E3A;color:white;padding:8px;border-radius:8px;text-decoration:none;font-size:13px;font-weight:500;transition:background .15s;}
.btn-voir:hover{background:#2e802e;}
</style>

{{-- Hero --}}
<div style="background:linear-gradient(135deg,#1B3A6B,#2A5298);color:white;padding:56px 20px;text-align:center;font-family:'Poppins',sans-serif;">
  <div style="max-width:800px;margin:0 auto;">
    <h1 style="font-size:clamp(26px,5vw,44px);font-weight:700;margin:0 0 12px;">Vos services à domicile<br><span style="color:#4ADE80;">en toute confiance</span></h1>
    <p style="font-size:15px;color:#D1D5DB;margin:0 0 24px;">Connectez-vous avec des professionnels qualifiés, en quelques clics.</p>
    <div style="display:flex;gap:8px;max-width:480px;margin:0 auto;background:white;border-radius:50px;padding:5px;flex-wrap:wrap;justify-content:center;">
      <input type="text" placeholder="Ménage, Dakar Plateau…" style="flex:1;min-width:150px;padding:9px 16px;border:none;border-radius:50px;outline:none;font-size:14px;color:#1B3A6B;font-family:'Poppins',sans-serif;">
      <button style="background:#3A9E3A;color:white;border:none;padding:9px 20px;border-radius:50px;cursor:pointer;font-weight:600;font-size:14px;white-space:nowrap;display:flex;align-items:center;gap:6px;font-family:'Poppins',sans-serif;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        Rechercher
      </button>
    </div>
  </div>
</div>

<div style="padding:32px 16px;max-width:1140px;margin:0 auto;font-family:'Poppins',sans-serif;">

  {{-- Filtres --}}
  <div style="background:white;border:1px solid #E5E7EB;border-radius:12px;padding:18px 20px;margin-bottom:20px;border-top:3px solid #3A9E3A;display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:14px;">
    @foreach([
      ['Ville','text','Dakar','<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>'],
      ['Note min','select','','<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>'],
      ['Prix max','select','','<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>'],
      ['Disponibilité','select','','<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>'],
    ] as [$lbl,$type,$ph,$svg])
    <div>
      <label style="display:block;font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:flex;align-items:center;gap:5px;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $svg !!}</svg>
        {{ $lbl }}
      </label>
      @if($type==='text')
      <input type="text" class="filter-input" placeholder="{{ $ph }}">
      @else
      <select class="filter-input">
        <option>Tous</option>
        @if($lbl==='Note min')<option>4.5+</option><option>4.0+</option>
        @elseif($lbl==='Prix max')<option>5 000 FCFA</option><option>10 000 FCFA</option>
        @else<option>Aujourd'hui</option><option>Cette semaine</option>@endif
      </select>
      @endif
    </div>
    @endforeach
  </div>

  {{-- Badges résultats --}}
  <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px;margin-bottom:18px;">
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <span style="background:#1B3A6B;color:white;padding:3px 12px;border-radius:20px;font-size:11px;font-weight:500;display:flex;align-items:center;gap:5px;">
        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        Vérifiés
      </span>
      <span style="background:#3A9E3A;color:white;padding:3px 12px;border-radius:20px;font-size:11px;font-weight:500;display:flex;align-items:center;gap:5px;">
        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        Paiement sécurisé
      </span>
    </div>
    <span style="color:#6B7280;font-size:13px;">24 prestataires disponibles</span>
  </div>

  {{-- Grille prestataires --}}
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;">
    @foreach([
      ['Mamadou Sow',    'Spécialiste ménage',   'Dakar - Plateau',  '4.9','127','5 000'],
      ['Aminata Sow',    'Lessive & repassage',  'Dakar - Almadies', '4.7','89', '5 000'],
      ['Kadiatou Barry', 'Baby-sitting',          'Dakar - Médina',   '4.8','54', '3 000'],
    ] as $i => [$nom,$spec,$ville,$note,$avis,$prix])
    <div class="prest-card">
      <div style="background:linear-gradient(135deg,#1B3A6B,#2A5298);padding:22px;text-align:center;color:white;">
        <div style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;margin:0 auto 10px;">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </div>
        <h3 style="font-size:15px;font-weight:700;margin:0 0 3px;">{{ $nom }}</h3>
        <p style="opacity:.85;font-size:12px;margin:0 0 8px;">{{ $spec }}</p>
        <span style="background:#3A9E3A;padding:2px 10px;border-radius:20px;font-size:10px;font-weight:600;display:inline-flex;align-items:center;gap:4px;">
          <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Vérifié
        </span>
      </div>
      <div style="padding:14px;">
        <p style="color:#6B7280;font-size:13px;margin:0 0 5px;display:flex;align-items:center;gap:6px;">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          {{ $ville }}
        </p>
        <p style="color:#6B7280;font-size:13px;margin:0 0 10px;display:flex;align-items:center;gap:6px;">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          {{ $note }}/5 · {{ $avis }} avis
        </p>
        <div style="display:flex;justify-content:space-between;align-items:center;">
          <span style="font-size:18px;font-weight:700;color:#3A9E3A;">{{ $prix }} FCFA</span>
          <span style="color:#9CA3AF;font-size:12px;">/heure</span>
        </div>
        <a href="{{ route('prestataires.profil', ['id' => $i+1]) }}" class="btn-voir">
          Voir le profil
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
