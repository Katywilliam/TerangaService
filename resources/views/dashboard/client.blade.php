@extends('layouts.app')

@section('title', 'Mon espace client - Teranga Service')

@section('content')
<style>
    .ts-card { background: white; border: 1px solid #E5E7EB; border-radius: 12px; padding: 16px; }
    .ts-card-top { border-top: 3px solid #3A9E3A; }
    .stat-card { background: white; border: 1px solid #E5E7EB; border-radius: 10px; padding: 16px; text-align: center; }
    .badge { display: inline-block; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
    .badge-green  { background: #DCFCE7; color: #166534; }
    .badge-amber  { background: #FEF3C7; color: #92400e; }
    .badge-gray   { background: #F3F4F6; color: #374151; }
    .action-link  { color: #3A9E3A; text-decoration: none; font-size: 13px; display: inline-flex; align-items: center; gap: 4px; }
    .action-link:hover { text-decoration: underline; }
    table { width: 100%; border-collapse: collapse; font-size: 13px; }
    thead tr { background: #F9FAFB; }
    th { padding: 9px 12px; color: #6B7280; font-weight: 600; text-align: left; font-size: 12px; }
    td { padding: 10px 12px; border-bottom: 1px solid #F3F4F6; color: #374151; }
    tbody tr:last-child td { border-bottom: none; }
    tbody tr:hover { background: #FAFAFA; }
    .msg-item { padding: 10px 0; border-bottom: 1px solid #F3F4F6; }
    .msg-item:last-child { border-bottom: none; }
</style>

<div style="max-width: 1100px; margin: 0 auto; padding: 28px 16px; font-family: 'Poppins', sans-serif;">

    {{-- En-tête --}}
    <div style="margin-bottom: 24px;">
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 4px;">
            <div style="width: 42px; height: 42px; border-radius: 50%; background: #1B3A6B; display: flex; align-items: center; justify-content: center;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <div>
                <h1 style="font-size: 20px; font-weight: 600; color: #1B3A6B; margin: 0;">Bonjour, Aminata</h1>
                <p style="font-size: 13px; color: #9CA3AF; margin: 0;">Mercredi 22 juin 2026</p>
            </div>
        </div>
    </div>

    {{-- Statistiques --}}
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 12px; margin-bottom: 24px;">
        <div class="stat-card">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EEF2FF; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
            </div>
            <p style="font-size: 24px; font-weight: 700; color: #1B3A6B; margin: 0;">12</p>
            <p style="font-size: 12px; color: #6B7280; margin: 4px 0 0;">Réservations</p>
        </div>
        <div class="stat-card">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #FEF3C7; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <p style="font-size: 24px; font-weight: 700; color: #1B3A6B; margin: 0;">2</p>
            <p style="font-size: 12px; color: #6B7280; margin: 4px 0 0;">En attente</p>
        </div>
        <div class="stat-card" style="background: #F0FDF4;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #DCFCE7; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <p style="font-size: 24px; font-weight: 700; color: #3A9E3A; margin: 0;">4.7</p>
            <p style="font-size: 12px; color: #6B7280; margin: 4px 0 0;">Note donnée</p>
        </div>
    </div>

    {{-- Graphique --}}
    <div class="ts-card ts-card-top" style="margin-bottom: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
            <h2 style="font-size: 15px; font-weight: 600; color: #1B3A6B; margin: 0; display: flex; align-items: center; gap: 8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                Évolution des réservations
            </h2>
            <span style="background:#DCFCE7;color:#166534;font-size:12px;font-weight:600;padding:3px 10px;border-radius:20px;">+24%</span>
        </div>
        <div style="height: 140px;">
            <canvas id="reservationsChart"></canvas>
        </div>
    </div>

    {{-- Réservations récentes --}}
    <div class="ts-card ts-card-top" style="margin-bottom: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
            <h2 style="font-size: 15px; font-weight: 600; color: #1B3A6B; margin: 0; display: flex; align-items: center; gap: 8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                Réservations récentes
            </h2>
            <a href="#" class="action-link">Voir tout
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>
        <div style="overflow-x: auto;">
            <table style="min-width: 480px;">
                <thead>
                    <tr>
                        <th>Prestataire</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: 500;">Mamadou Sow</td>
                        <td>Ménage</td>
                        <td style="color:#6B7280;">Aujourd'hui</td>
                        <td><span class="badge badge-amber">En cours</span></td>
                        <td><a href="#" class="action-link">Voir
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </a></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 500;">Aissatou Faye</td>
                        <td>Plomberie</td>
                        <td style="color:#6B7280;">Mer 10 juin</td>
                        <td><span class="badge badge-green">Confirmé</span></td>
                        <td><a href="#" class="action-link">Voir
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </a></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 500;">Oumar Diallo</td>
                        <td>Jardinage</td>
                        <td style="color:#6B7280;">Sam 7 juin</td>
                        <td><span class="badge badge-gray">Terminé</span></td>
                        <td><a href="#" class="action-link">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            Laisser un avis
                        </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Messages récents --}}
    <div class="ts-card ts-card-top">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
            <h2 style="font-size: 15px; font-weight: 600; color: #1B3A6B; margin: 0; display: flex; align-items: center; gap: 8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                Messages récents
            </h2>
            <a href="#" class="action-link">Voir tout
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>
        @foreach([
            ['nom' => 'Mamadou Sow', 'msg' => 'Je serai là à 10h pile.', 'temps' => 'Il y a 5 min'],
            ['nom' => 'Aissatou Faye', 'msg' => 'Merci pour la confirmation !', 'temps' => 'Hier'],
            ['nom' => 'Oumar Diallo', 'msg' => 'Disponible pour le jardinage ?', 'temps' => 'Il y a 3 jours'],
        ] as $msg)
        <div class="msg-item">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2px;">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <div style="width: 30px; height: 30px; border-radius: 50%; background: #E0E7FF; display: flex; align-items: center; justify-content: center;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <span style="font-weight: 600; font-size: 13px; color: #111827;">{{ $msg['nom'] }}</span>
                </div>
                <span style="font-size: 11px; color: #9CA3AF;">{{ $msg['temps'] }}</span>
            </div>
            <p style="font-size: 13px; color: #6B7280; margin: 4px 0 0 38px;">{{ $msg['msg'] }}</p>
        </div>
        @endforeach
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('reservationsChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Réservations',
                    data: [5, 8, 12, 15, 20, 24],
                    borderColor: '#3A9E3A',
                    backgroundColor: 'rgba(58,158,58,0.08)',
                    fill: true, tension: 0.4,
                    pointBackgroundColor: '#3A9E3A',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true, maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 10 } } },
                    x: { grid: { display: false }, ticks: { font: { size: 10 } } }
                }
            }
        });
    }
});
</script>
@endsection