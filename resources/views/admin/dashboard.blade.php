@extends('layouts.app')
@section('title', 'Administration - Teranga Service')
@section('content')
<style>
*{box-sizing:border-box;}
.adm{max-width:1140px;margin:0 auto;padding:28px 16px;font-family:'Poppins',sans-serif;}
.stat-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:12px;margin-bottom:24px;}
.stat-card{background:white;border:1px solid #E5E7EB;border-radius:12px;padding:16px;transition:box-shadow .2s,transform .2s;cursor:default;}
.stat-card:hover{box-shadow:0 4px 20px rgba(0,0,0,.08);transform:translateY(-1px);}
.ts-card{background:white;border:1px solid #E5E7EB;border-radius:12px;overflow:hidden;margin-bottom:20px;}
.ts-card-head{padding:14px 18px;border-bottom:1px solid #F3F4F6;display:flex;justify-content:space-between;align-items:center;border-top:3px solid #3A9E3A;}
.ts-card-body{padding:0 4px;}
table{width:100%;border-collapse:collapse;font-size:13px;}
thead tr{background:#F9FAFB;}
th{padding:9px 14px;color:#6B7280;font-weight:600;text-align:left;font-size:12px;}
td{padding:11px 14px;border-bottom:1px solid #F3F4F6;color:#374151;vertical-align:middle;}
tbody tr:last-child td{border-bottom:none;}
tbody tr{transition:background .12s;}
tbody tr:hover{background:#FAFAFA;}
.badge{display:inline-flex;align-items:center;gap:4px;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;}
.badge-green{background:#DCFCE7;color:#166534;}
.badge-amber{background:#FEF3C7;color:#92400e;}
.badge-red{background:#FEE2E2;color:#991B1B;}
.badge-blue{background:#DBEAFE;color:#1e40af;}
.badge-purple{background:#EDE9FE;color:#4c1d95;}
.btn-approve,.btn-reject{border:none;padding:5px 12px;border-radius:6px;cursor:pointer;font-size:12px;font-weight:500;display:inline-flex;align-items:center;gap:5px;transition:all .15s;}
.btn-approve{background:#3A9E3A;color:white;}
.btn-approve:hover{background:#2e802e;}
.btn-reject{background:white;color:#EF4444;border:1px solid #EF4444;}
.btn-reject:hover{background:#FEF2F2;}
.btn-approve:disabled,.btn-reject:disabled{opacity:.4;cursor:not-allowed;}
.see-all{color:#3A9E3A;font-size:13px;text-decoration:none;display:inline-flex;align-items:center;gap:4px;}
.see-all:hover{text-decoration:underline;}
.quick-btn{display:flex;align-items:center;gap:8px;padding:10px 14px;border-radius:8px;text-decoration:none;font-size:13px;font-weight:500;margin-bottom:8px;transition:opacity .15s;}
.quick-btn:hover{opacity:.88;}
.quick-btn:last-child{margin-bottom:0;}
.litige-card{border:1px solid #FEE2E2;border-radius:8px;padding:11px 13px;margin-bottom:8px;background:#FFFAFA;}
.litige-card:last-child{margin-bottom:0;}
.filter-bar{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px;}
.filter-btn{background:white;border:1px solid #E5E7EB;border-radius:6px;padding:5px 12px;font-size:12px;font-weight:500;cursor:pointer;color:#6B7280;transition:all .15s;}
.filter-btn.active{background:#1B3A6B;color:white;border-color:#1B3A6B;}
.bottom-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
@media(max-width:640px){.bottom-grid{grid-template-columns:1fr;}}
#toast{position:fixed;bottom:24px;right:24px;background:#1B3A6B;color:white;padding:10px 18px;border-radius:8px;font-size:13px;font-weight:500;opacity:0;transform:translateY(10px);transition:all .3s;pointer-events:none;z-index:9999;display:flex;align-items:center;gap:8px;}
#toast.show{opacity:1;transform:translateY(0);}
.chart-tabs{display:flex;gap:6px;margin-bottom:14px;}
.chart-tab{background:white;border:1px solid #E5E7EB;border-radius:6px;padding:5px 14px;font-size:12px;font-weight:500;cursor:pointer;color:#6B7280;transition:all .15s;font-family:'Poppins',sans-serif;}
.chart-tab.active{background:#1B3A6B;color:white;border-color:#1B3A6B;}
</style>

<div class="adm">

    {{-- En-tête --}}
    <div style="display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;">
        <div style="width:46px;height:46px;border-radius:12px;background:#1B3A6B;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div>
            <h1 style="font-size:20px;font-weight:700;color:#1B3A6B;margin:0;">Administration</h1>
            <p style="font-size:13px;color:#9CA3AF;margin:0;">Gérez votre plateforme Teranga Service</p>
        </div>
        <div style="margin-left:auto;text-align:right;">
            <span style="font-size:11px;color:#9CA3AF;display:block;">Aujourd'hui</span>
            <span style="font-size:13px;font-weight:600;color:#374151;" id="current-date"></span>
        </div>
    </div>

    {{-- Statistiques --}}
    <div class="stat-grid">
        @foreach([
            ['bg'=>'#EEF2FF','stroke'=>'#4F46E5','val'=>'156','lbl'=>'Utilisateurs','trend'=>'+12%','tcolor'=>'#166534','svg'=>'<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>'],
            ['bg'=>'#DCFCE7','stroke'=>'#16A34A','val'=>'42',  'lbl'=>'Prestataires actifs','trend'=>'+5%','tcolor'=>'#166534','svg'=>'<polyline points="20 6 9 17 4 12"/>'],
            ['bg'=>'#FEF3C7','stroke'=>'#D97706','val'=>'8',   'lbl'=>'En attente','trend'=>'Nouveaux','tcolor'=>'#92400e','svg'=>'<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>'],
            ['bg'=>'#EDE9FE','stroke'=>'#7C3AED','val'=>'234', 'lbl'=>'Prestations','trend'=>'+24%','tcolor'=>'#166534','svg'=>'<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/>'],
            ['bg'=>'#D1FAE5','stroke'=>'#059669','val'=>'1 250 000','lbl'=>'CA (FCFA)','trend'=>'+18%','tcolor'=>'#166534','svg'=>'<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>'],
        ] as $s)
        <div class="stat-card">
            <div style="width:42px;height:42px;border-radius:10px;background:{{ $s['bg'] }};display:flex;align-items:center;justify-content:center;margin-bottom:10px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $s['stroke'] }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $s['svg'] !!}</svg>
            </div>
            <p style="font-size:22px;font-weight:700;color:#1B3A6B;margin:0 0 3px;">{{ $s['val'] }}</p>
            <p style="font-size:12px;color:#6B7280;margin:0 0 4px;">{{ $s['lbl'] }}</p>
            <span style="font-size:11px;font-weight:600;color:{{ $s['tcolor'] }};">↑ {{ $s['trend'] }}</span>
        </div>
        @endforeach
    </div>

    {{-- Graphique évolution --}}
    <div class="ts-card" style="margin-bottom:20px;">
        <div class="ts-card-head">
            <h2 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0;display:flex;align-items:center;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                Évolution de la plateforme
            </h2>
            <div class="chart-tabs">
                <button class="chart-tab active" onclick="switchChart('reservations',this)">Réservations</button>
                <button class="chart-tab" onclick="switchChart('revenus',this)">Revenus</button>
                <button class="chart-tab" onclick="switchChart('utilisateurs',this)">Utilisateurs</button>
            </div>
        </div>
        <div style="padding:16px;">
            <div style="height:200px;">
                <canvas id="mainChart"></canvas>
            </div>
        </div>
    </div>

    {{-- Prestataires en attente --}}
    <div class="ts-card">
        <div class="ts-card-head">
            <h2 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0;display:flex;align-items:center;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                Prestataires en attente
            </h2>
            <span class="badge badge-amber" id="pending-count">8 nouveaux</span>
        </div>
        <div style="padding:12px 18px 0;">
            <div class="filter-bar">
                <button class="filter-btn active" onclick="filterRows('all',this)">Tous</button>
                <button class="filter-btn" onclick="filterRows('jardinage',this)">Jardinage</button>
                <button class="filter-btn" onclick="filterRows('cuisine',this)">Cuisine</button>
                <button class="filter-btn" onclick="filterRows('electricite',this)">Électricité</button>
                <button class="filter-btn" onclick="filterRows('menage',this)">Ménage</button>
            </div>
        </div>
        <div class="ts-card-body" style="overflow-x:auto;">
            <table style="min-width:520px;" id="pending-table">
                <thead><tr><th>Nom</th><th>Service</th><th>Ville</th><th>Date</th><th>Expérience</th><th>Actions</th></tr></thead>
                <tbody id="pending-tbody">
                    @foreach([
                        ['nom'=>'Oumar Diop',   'service'=>'Jardinage',   'cat'=>'jardinage',   'ville'=>'Dakar',      'date'=>'12/06/2026','exp'=>'3 ans'],
                        ['nom'=>'Fatou Gueye',  'service'=>'Cuisine',     'cat'=>'cuisine',     'ville'=>'Pikine',     'date'=>'11/06/2026','exp'=>'5 ans'],
                        ['nom'=>'Moussa Ndiaye','service'=>'Électricité', 'cat'=>'electricite', 'ville'=>'Guédiawaye', 'date'=>'10/06/2026','exp'=>'7 ans'],
                        ['nom'=>'Awa Seck',     'service'=>'Ménage',      'cat'=>'menage',      'ville'=>'Thiès',      'date'=>'09/06/2026','exp'=>'2 ans'],
                        ['nom'=>'Ibrahima Ba',  'service'=>'Jardinage',   'cat'=>'jardinage',   'ville'=>'Dakar',      'date'=>'08/06/2026','exp'=>'4 ans'],
                    ] as $p)
                    <tr data-cat="{{ $p['cat'] }}">
                        <td style="font-weight:500;">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div style="width:32px;height:32px;border-radius:50%;background:#E0E7FF;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </div>
                                {{ $p['nom'] }}
                            </div>
                        </td>
                        <td><span class="badge badge-blue">{{ $p['service'] }}</span></td>
                        <td style="color:#6B7280;">{{ $p['ville'] }}</td>
                        <td style="color:#9CA3AF;">{{ $p['date'] }}</td>
                        <td><span class="badge badge-purple">{{ $p['exp'] }}</span></td>
                        <td>
                            <div style="display:flex;gap:6px;">
                                <button class="btn-approve" onclick="handleAction(this,'approve')">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                    Approuver
                                </button>
                                <button class="btn-reject" onclick="handleAction(this,'reject')">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                                    Refuser
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Transactions --}}
    <div class="ts-card">
        <div class="ts-card-head">
            <h2 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0;display:flex;align-items:center;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                Dernières transactions
            </h2>
            <a href="#" class="see-all">Voir tout
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>
        <div class="ts-card-body" style="overflow-x:auto;">
            <table style="min-width:480px;">
                <thead><tr><th>Client</th><th>Prestataire</th><th>Service</th><th>Montant</th><th>Commission</th><th>Date</th><th>Statut</th></tr></thead>
                <tbody>
                    @foreach([
                        ['c'=>'Fatou N.',   'p'=>'Modou Fall','s'=>'Ménage',      'm'=>'5 000','com'=>'400','d'=>'15/06','ok'=>true],
                        ['c'=>'Mamadou D.', 'p'=>'Aïssa D.',  's'=>'Plomberie',   'm'=>'5 500','com'=>'440','d'=>'14/06','ok'=>true],
                        ['c'=>'Aïcha S.',   'p'=>'Fatou D.',  's'=>'Jardinage',   'm'=>'3 500','com'=>'280','d'=>'13/06','ok'=>true],
                        ['c'=>'Omar K.',    'p'=>'Ibou Sy',   's'=>'Électricité', 'm'=>'8 000','com'=>'640','d'=>'12/06','ok'=>false],
                    ] as $t)
                    <tr>
                        <td>{{ $t['c'] }}</td>
                        <td style="font-weight:500;">{{ $t['p'] }}</td>
                        <td style="color:#6B7280;">{{ $t['s'] }}</td>
                        <td style="font-weight:600;color:#3A9E3A;">{{ $t['m'] }} F</td>
                        <td style="color:#9CA3AF;">{{ $t['com'] }} F</td>
                        <td style="color:#9CA3AF;">{{ $t['d'] }}</td>
                        <td><span class="badge {{ $t['ok'] ? 'badge-green' : 'badge-amber' }}">{{ $t['ok'] ? 'Validé' : 'En cours' }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Litiges + Actions --}}
    <div class="bottom-grid">
        <div class="ts-card" style="margin-bottom:0;">
            <div class="ts-card-head">
                <h2 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0;display:flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    Litiges actifs
                </h2>
                <span class="badge badge-red">2 ouverts</span>
            </div>
            <div style="padding:14px 16px;">
                @foreach([
                    ['ref'=>'#TS-2026-012','p'=>'Mamadou D. vs Oumar K.','motif'=>'Prestation non effectuée','statut'=>'En attente','badge'=>'badge-red'],
                    ['ref'=>'#TS-2026-008','p'=>'Fatou N. vs Aïssa D.',  'motif'=>'Litige sur le montant',   'statut'=>'En cours',  'badge'=>'badge-amber'],
                ] as $l)
                <div class="litige-card">
                    <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:4px;">
                        <span style="font-weight:600;font-size:13px;color:#1B3A6B;">{{ $l['ref'] }}</span>
                        <span class="badge {{ $l['badge'] }}">{{ $l['statut'] }}</span>
                    </div>
                    <p style="font-size:13px;color:#374151;margin:0 0 2px;">{{ $l['p'] }}</p>
                    <p style="font-size:12px;color:#9CA3AF;margin:0 0 6px;">{{ $l['motif'] }}</p>
                    <a href="#" style="display:inline-flex;align-items:center;gap:4px;color:#3A9E3A;font-size:12px;text-decoration:none;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        Voir le dossier
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="ts-card" style="margin-bottom:0;">
            <div class="ts-card-head">
                <h2 style="font-size:15px;font-weight:600;color:#1B3A6B;margin:0;display:flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    Actions rapides
                </h2>
            </div>
            <div style="padding:14px 16px;">
                <a href="#" class="quick-btn" style="background:#1B3A6B;color:white;">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    Voir les rapports
                </a>
                <a href="{{ route('notifications') }}" class="quick-btn" style="background:#3A9E3A;color:white;">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    Notifications
                </a>
                <a href="{{ route('services') }}" class="quick-btn" style="background:#F59E0B;color:white;">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                    Gérer les catégories
                </a>
                <a href="{{ route('prestataires') }}" class="quick-btn" style="background:#7C3AED;color:white;">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    Liste des prestataires
                </a>
            </div>
        </div>
    </div>
</div>

<div id="toast">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
    <span id="toast-msg">Action effectuée</span>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
<script>
// Date
document.getElementById('current-date').textContent = new Date().toLocaleDateString('fr-FR',{weekday:'long',day:'numeric',month:'long',year:'numeric'});

// Données graphiques
var chartData = {
    reservations: {
        labels: ['Jan','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sep','Oct','Nov','Déc'],
        data: [45,62,78,91,105,124,118,134,142,158,171,192],
        color: '#3A9E3A', label: 'Réservations'
    },
    revenus: {
        labels: ['Jan','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sep','Oct','Nov','Déc'],
        data: [225000,310000,390000,455000,525000,620000,590000,670000,710000,790000,855000,960000],
        color: '#4F46E5', label: 'Revenus (FCFA)'
    },
    utilisateurs: {
        labels: ['Jan','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sep','Oct','Nov','Déc'],
        data: [12,28,45,67,89,112,128,143,156,168,179,192],
        color: '#D97706', label: 'Nouveaux utilisateurs'
    }
};

var currentChart = null;

function buildChart(key) {
    if(currentChart) currentChart.destroy();
    var d = chartData[key];
    currentChart = new Chart(document.getElementById('mainChart'), {
        type:'line',
        data:{
            labels: d.labels,
            datasets:[{
                label: d.label,
                data: d.data,
                borderColor: d.color,
                backgroundColor: d.color + '15',
                fill: true,
                tension: 0.4,
                pointBackgroundColor: d.color,
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 4,
                borderWidth: 2
            }]
        },
        options:{
            responsive:true, maintainAspectRatio:false,
            plugins:{legend:{display:false}},
            scales:{
                y:{beginAtZero:true, grid:{color:'rgba(0,0,0,.04)'}, ticks:{font:{size:11}}},
                x:{grid:{display:false}, ticks:{font:{size:11}}}
            }
        }
    });
}

function switchChart(key, btn) {
    document.querySelectorAll('.chart-tab').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    buildChart(key);
}

buildChart('reservations');

// Toast
function showToast(msg, success) {
    var t = document.getElementById('toast');
    document.getElementById('toast-msg').textContent = msg;
    t.style.background = success ? '#1B3A6B' : '#EF4444';
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 3000);
}

// Actions prestataires
var pendingCount = document.querySelectorAll('#pending-tbody tr').length;

function handleAction(btn, action) {
    var row = btn.closest('tr');
    var nom = row.querySelector('td:first-child').textContent.trim();
    row.querySelectorAll('button').forEach(b => b.disabled = true);
    row.style.background = action === 'approve' ? '#F0FDF4' : '#FFF5F5';
    row.style.transition = 'opacity .4s';
    setTimeout(() => {
        row.style.opacity = '0';
        setTimeout(() => {
            row.remove();
            pendingCount--;
            var badge = document.getElementById('pending-count');
            badge.textContent = pendingCount + (pendingCount > 1 ? ' nouveaux' : pendingCount === 1 ? ' nouveau' : '');
            if(pendingCount === 0) badge.style.display = 'none';
            showToast(action === 'approve' ? nom + ' a été approuvé(e) ✓' : nom + ' a été refusé(e)', action === 'approve');
        }, 350);
    }, 200);
}

// Filtre
function filterRows(cat, btn) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('#pending-tbody tr').forEach(row => {
        row.style.display = (cat === 'all' || row.dataset.cat === cat) ? '' : 'none';
    });
}
</script>
@endsection
