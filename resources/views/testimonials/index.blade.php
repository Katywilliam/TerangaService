@extends('layouts.app')
@section('title', 'Témoignages - Teranga Service')
@section('content')
<style>
.testi-card{background:white;border:1px solid #E5E7EB;border-radius:12px;padding:20px;border-top:3px solid #3A9E3A;transition:box-shadow .2s;}
.testi-card:hover{box-shadow:0 6px 24px rgba(0,0,0,.08);}
.star-svg{display:inline-block;}
</style>

{{-- Hero --}}
<div style="background:linear-gradient(135deg,#1B3A6B,#2A5298);color:white;padding:48px 20px;text-align:center;">
  <div style="max-width:700px;margin:0 auto;">
    <div style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
    </div>
    <h1 style="font-size:clamp(26px,5vw,40px);font-weight:700;margin:0 0 8px;">Témoignages clients</h1>
    <p style="font-size:15px;color:#D1D5DB;margin:0;">Ils nous font confiance et partagent leur expérience</p>
  </div>
</div>

{{-- Grille témoignages --}}
<div style="padding:40px 16px;max-width:1000px;margin:0 auto;">
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;">
    @foreach([
      ['nom'=>'Aissatou Diallo','note'=>5,'depuis'=>'6 mois','msg'=>'J\'ai fait appel à Teranga Service pour le ménage à domicile. Le personnel est ponctuel, discret et le travail est impeccable. Je recommande !'],
      ['nom'=>'Fatou Mbaye',   'note'=>5,'depuis'=>'3 mois','msg'=>'Excellente expérience avec la cuisine à domicile. Les repas sont délicieux et préparés avec soin. Un vrai gain de temps !'],
      ['nom'=>'Mamadou Fall',  'note'=>5,'depuis'=>'1 mois','msg'=>'Service rapide et professionnel. Le plombier est arrivé à l\'heure et a résolu le problème en 30 minutes. Je recommande vivement !'],
      ['nom'=>'Mariama Ba',    'note'=>5,'depuis'=>'1 mois','msg'=>'Je suis ravie de la prestation de la femme de ménage. Ponctuelle, efficace et très sympathique. Je recommande Teranga Service !'],
      ['nom'=>'Oumar Diop',    'note'=>4,'depuis'=>'2 mois','msg'=>'Très bonne prestation, le jardinier a fait un excellent travail. Juste un petit retard mais il s\'est excusé.'],
      ['nom'=>'Coumba Fall',   'note'=>5,'depuis'=>'4 mois','msg'=>'Excellent service ! Le plombier a résolu mon problème de fuite en moins d\'une heure. Prix correct et travail de qualité.'],
    ] as $t)
    <div class="testi-card">
      <div style="display:flex;gap:2px;margin-bottom:10px;">
        @for($i=1;$i<=5;$i++)
        <svg width="15" height="15" viewBox="0 0 24 24" fill="{{ $i<=$t['note'] ? '#FBBF24' : 'none' }}" stroke="#FBBF24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="star-svg" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        @endfor
      </div>
      <p style="color:#4B5563;font-size:13px;font-style:italic;line-height:1.7;margin:0 0 12px;">"{{ $t['msg'] }}"</p>
      <div style="display:flex;justify-content:space-between;align-items:center;">
        <div style="display:flex;align-items:center;gap:8px;">
          <div style="width:32px;height:32px;border-radius:50%;background:#E0E7FF;display:flex;align-items:center;justify-content:center;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <span style="font-weight:600;font-size:13px;color:#111827;">{{ $t['nom'] }}</span>
        </div>
        <span style="font-size:11px;color:#9CA3AF;display:flex;align-items:center;gap:4px;">
          <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          Depuis {{ $t['depuis'] }}
        </span>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
