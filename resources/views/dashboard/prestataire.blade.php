@extends('layouts.app')
@section('title', 'Dashboard Prestataire - Teranga Service')
@section('content')
<style>
.ts-card{background:white;border:1px solid #E5E7EB;border-radius:12px;}
.ts-card-top{border-top:3px solid #3A9E3A;}
.stat-card{background:white;border:1px solid #E5E7EB;border-radius:10px;padding:16px;text-align:center;}
.demande-item{padding:14px 0;border-bottom:1px solid #F3F4F6;}
.demande-item:last-child{border-bottom:none;}
.btn-accept{background:#3A9E3A;color:white;border:none;padding:7px 14px;border-radius:7px;cursor:pointer;font-size:13px;font-weight:500;display:inline-flex;align-items:center;gap:5px;transition:background .15s;}
.btn-accept:hover{background:#2e802e;}
.btn-refuse{background:white;color:#EF4444;border:1px solid #EF4444;padding:7px 14px;border-radius:7px;cursor:pointer;font-size:13px;font-weight:500;display:inline-flex;align-items:center;gap:5px;transition:background .15s;}
.btn-refuse:hover{background:#FEF2F2;}
.review-item{padding:12px 0;border-bottom:1px solid #F3F4F6;}
.review-item:last-child{border-bottom:none;}
#toast{position:fixed;bottom:24px;right:24px;background:#1B3A6B;color:white;padding:10px 18px;border-radius:8px;font-size:13px;font-weight:500;opacity:0;transform:translateY(10px);transition:all .3s;pointer-events:none;z-index:9999;display:flex;align-items:center;gap:8px;}
#toast.show{opacity:1;transform:translateY(0);}
</style>

<div style="max-width:1100px;margin:0 auto;padding:28px 16px;font-family:'Poppins',sans-serif;">

  {{-- En-tête --}}
  <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;margin-bottom:24px;">
    <div style="display:flex;align-items:center;gap:10px;">
      <div style="width:44px;height:44px;border-radius:50%;background:#1B3A6B;display:flex;align-items:center;justify-content:center;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      </div>
      <div>
        <h1 style="font-size:20px;font-weight:600;color:#1B3A6B;margin:0;">Bonjour, Mamadou</h1>
        <p style="font-size:13px;color:#3A9E3A;margin:0;display:flex;align-items:center;gap:5px;">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Prestataire vérifié
        </p>
      </div>
    </div>
    <div style="text-align:right;">
      <p style="font-size:22px;font-weight:700;color:#3A9E3A;margin:0;display:flex;align-items:center;gap:6px;justify-content:flex-end;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        127 500 FCFA
      </p>
      <p style="font-size:12px;color:#9CA3AF;margin:0;">Revenus ce mois</p>
    </div>
  </div>

  {{-- Stats --}}
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-bottom:24px;">
    @foreach([
      ['24','Prestations','#EEF2FF','#4F46E5','<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/>'],
      ['3','En attente','#FEF3C7','#D97706','<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>'],
      ['4.9','Note globale','#DCFCE7','#16A34A','<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>'],
    ] as [$val,$lbl,$bg,$stroke,$svg])
    <div class="stat-card">
      <div style="width:40px;height:40px;border-radius:10px;background:{{ $bg }};display:flex;align-items:center;justify-content:center;margin:0 auto 8px;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $stroke }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $svg !!}</svg>
      </div>
      <p style="font-size:22px;font-weight:700;color:#1B3A6B;margin:0;">{{ $val }}</p>
      <p style="font-size:12px;color:#6B7280;margin:3px 0 0;">{{ $lbl }}</p>
    </div>
    @endforeach
  </div>

  {{-- Graphique --}}
  <div class="ts-card ts-card-top" style="padding:16px;margin-bottom:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
      <h3 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0;display:flex;align-items:center;gap:7px;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        Évolution des prestations
      </h3>
      <span style="background:#DCFCE7;color:#166534;font-size:12px;font-weight:600;padding:3px 10px;border-radius:20px;">+18%</span>
    </div>
    <div style="height:140px;"><canvas id="prestChart"></canvas></div>
  </div>

  {{-- Demandes --}}
  <div class="ts-card ts-card-top" style="padding:18px;margin-bottom:20px;">
    <h2 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0 0 14px;display:flex;align-items:center;gap:7px;">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
      Demandes à traiter
    </h2>
    @foreach([
      [1,'Coumba Fall','Ménage complet','Jeu 5 juin · 09h00','15 000'],
      [2,'Mariama Ba', 'Ménage + lessive','Ven 6 juin · 14h00','12 000'],
      [3,'Omar Tounkara','Nettoyage bureau','Lun 9 juin · 08h00','20 000'],
    ] as [$id,$nom,$service,$date,$prix])
    <div class="demande-item" id="dem-{{ $id }}">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:10px;">
        <div>
          <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
            <div style="width:30px;height:30px;border-radius:50%;background:#E0E7FF;display:flex;align-items:center;justify-content:center;">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <span style="font-weight:600;font-size:14px;color:#111827;">{{ $nom }}</span>
          </div>
          <p style="font-size:13px;color:#6B7280;margin:0 0 3px;padding-left:38px;">{{ $service }} · {{ $date }}</p>
          <p style="font-size:14px;font-weight:700;color:#3A9E3A;margin:0;padding-left:38px;">{{ $prix }} FCFA</p>
        </div>
        <div style="display:flex;gap:8px;">
          <button class="btn-accept" onclick="handleDem({{ $id }},'accept')">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            Accepter
          </button>
          <button class="btn-refuse" onclick="handleDem({{ $id }},'refuse')">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            Refuser
          </button>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  {{-- Avis --}}
  <div class="ts-card ts-card-top" style="padding:18px;">
    <h2 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0 0 14px;display:flex;align-items:center;gap:7px;">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      Derniers avis reçus
    </h2>
    @foreach([
      ['Coumba Fall',5,'Excellent, très professionnel !','Il y a 1 jour'],
      ['Omar Diallo', 5,'Très bon travail, je recommande !','Il y a 3 jours'],
      ['Mariama Ba',  4,'Bien mais en léger retard.','Il y a 5 jours'],
    ] as [$nom,$note,$avis,$temps])
    <div class="review-item">
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
        <div style="display:flex;align-items:center;gap:7px;">
          <div style="width:28px;height:28px;border-radius:50%;background:#E0E7FF;display:flex;align-items:center;justify-content:center;">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <span style="font-weight:600;font-size:13px;color:#111827;">{{ $nom }}</span>
        </div>
        <span style="font-size:11px;color:#9CA3AF;">{{ $temps }}</span>
      </div>
      <div style="display:flex;gap:2px;margin:4px 0 4px 35px;">
        @for($i=1;$i<=5;$i++)
        <svg width="13" height="13" viewBox="0 0 24 24" fill="{{ $i<=$note?'#FBBF24':'none' }}" stroke="#FBBF24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        @endfor
      </div>
      <p style="font-size:13px;color:#4B5563;margin:0 0 0 35px;font-style:italic;">"{{ $avis }}"</p>
    </div>
    @endforeach
  </div>
</div>

<div id="toast">
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
  <span id="toast-msg"></span>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
<script>
// Graphique
new Chart(document.getElementById('prestChart'), {
  type:'line',
  data:{
    labels:['Sem 1','Sem 2','Sem 3','Sem 4'],
    datasets:[{label:'Prestations',data:[20,30,35,42],borderColor:'#3A9E3A',backgroundColor:'rgba(58,158,58,.08)',fill:true,tension:.4,pointBackgroundColor:'#3A9E3A',pointBorderColor:'#fff',pointBorderWidth:2,pointRadius:4,borderWidth:2}]
  },
  options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{y:{beginAtZero:true,grid:{color:'rgba(0,0,0,.04)'},ticks:{font:{size:10}}},x:{grid:{display:false},ticks:{font:{size:10}}}}}
});

// Toast
function showToast(msg, ok) {
  var t=document.getElementById('toast');
  document.getElementById('toast-msg').textContent=msg;
  t.style.background=ok?'#1B3A6B':'#EF4444';
  t.classList.add('show');
  setTimeout(()=>t.classList.remove('show'),3000);
}

// Accepter / Refuser demande
function handleDem(id, action) {
  var row=document.getElementById('dem-'+id);
  var nom=row.querySelector('span[style*="font-weight:600"]').textContent.trim();
  row.style.opacity='0';
  row.style.transition='opacity .35s';
  setTimeout(()=>{
    row.remove();
    showToast(action==='accept'?nom+' — Demande acceptée':nom+' — Demande refusée', action==='accept');
  },350);
}
</script>
@endsection
