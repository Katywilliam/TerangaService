@extends('layouts.app')

@section('title', 'Confirmation de réservation - Teranga Service')

@section('content')
<style>
    .conf-wrap {
        max-width: 580px;
        margin: 0 auto;
        padding: 50px 16px;
        font-family: 'Poppins', sans-serif;
    }
    .conf-card {
        background: white;
        border-radius: 16px;
        border-top: 5px solid #3A9E3A;
        box-shadow: 0 8px 40px rgba(0,0,0,0.08);
        overflow: hidden;
    }
    .conf-hero {
        padding: 36px 32px 24px;
        text-align: center;
        border-bottom: 1px solid #F3F4F6;
    }
    .conf-icon-wrap {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: #DCFCE7;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
        animation: pop .4s cubic-bezier(.175,.885,.32,1.275);
    }
    @keyframes pop {
        from { transform: scale(0); opacity: 0; }
        to   { transform: scale(1); opacity: 1; }
    }
    .conf-hero h1 {
        font-size: 22px;
        font-weight: 700;
        color: #1B3A6B;
        margin: 0 0 6px;
    }
    .conf-hero p {
        font-size: 14px;
        color: #6B7280;
        margin: 0;
    }
    .conf-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #DCFCE7;
        color: #166534;
        font-size: 12px;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
        margin-top: 10px;
    }
    /* Détails */
    .conf-details {
        padding: 20px 28px;
        border-bottom: 1px solid #F3F4F6;
    }
    .detail-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #F9FAFB;
        gap: 12px;
    }
    .detail-row:last-child { border-bottom: none; }
    .detail-label {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: #6B7280;
        flex-shrink: 0;
    }
    .detail-label svg { flex-shrink: 0; }
    .detail-val {
        font-size: 13px;
        font-weight: 500;
        color: #111827;
        text-align: right;
    }
    .detail-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0 4px;
        margin-top: 6px;
        border-top: 2px solid #E5E7EB;
    }
    .detail-total-label {
        font-size: 14px;
        font-weight: 600;
        color: #1B3A6B;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .detail-total-val {
        font-size: 20px;
        font-weight: 700;
        color: #3A9E3A;
    }
    /* Alertes */
    .conf-alerts {
        padding: 16px 28px;
        border-bottom: 1px solid #F3F4F6;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .alert-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        background: #F0FDF4;
        border-left: 3px solid #3A9E3A;
        border-radius: 0 8px 8px 0;
        padding: 10px 12px;
    }
    .alert-row p { margin: 0; font-size: 13px; color: #374151; line-height: 1.5; }
    .alert-row strong { color: #111827; }
    /* Boutons */
    .conf-actions {
        padding: 20px 28px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        border-bottom: 1px solid #F3F4F6;
    }
    .btn-action {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 11px 14px;
        border-radius: 10px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        transition: opacity .15s, transform .15s;
    }
    .btn-action:hover { opacity: .88; transform: translateY(-1px); }
    .btn-dark  { background: #1B3A6B; color: white; }
    .btn-green { background: #3A9E3A; color: white; }
    /* Paiement */
    .conf-payment {
        padding: 16px 28px;
        text-align: center;
        border-bottom: 1px solid #F3F4F6;
    }
    .conf-payment p { font-size: 12px; color: #9CA3AF; margin: 0 0 10px; display: flex; align-items: center; justify-content: center; gap: 6px; }
    .pay-badges { display: flex; justify-content: center; gap: 10px; }
    .pay-badge {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #F9FAFB;
        border: 1px solid #E5E7EB;
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        color: #374151;
    }
    /* Aide */
    .conf-footer {
        padding: 14px 28px;
        text-align: center;
    }
    .conf-footer a {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #3A9E3A;
        font-size: 13px;
        text-decoration: none;
    }
    .conf-footer a:hover { text-decoration: underline; }
</style>

<div class="conf-wrap">
    <div class="conf-card">

        {{-- Hero --}}
        <div class="conf-hero">
            <div class="conf-icon-wrap">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            </div>
            <h1>Réservation confirmée !</h1>
            <p>Votre prestation a été réservée avec succès</p>
            <div class="conf-badge">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                Statut : Confirmée
            </div>
        </div>

        {{-- Détails --}}
        <div class="conf-details">
            @foreach([
                [
                    'svg' => '<rect x="3" y="4" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>',
                    'label' => 'N° réservation',
                    'val' => '#TS-2026-001',
                    'bold' => true,
                    'color' => '#1B3A6B'
                ],
                [
                    'svg' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
                    'label' => 'Service',
                    'val' => 'Plomberie',
                ],
                [
                    'svg' => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
                    'label' => 'Prestataire',
                    'val' => 'Modou Fall',
                ],
                [
                    'svg' => '<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>',
                    'label' => 'Date & heure',
                    'val' => '15 Juin 2026 à 10h00',
                ],
                [
                    'svg' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
                    'label' => 'Durée',
                    'val' => '3 heures',
                ],
                [
                    'svg' => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
                    'label' => 'Adresse',
                    'val' => 'Dakar – Mermoz',
                ],
                [
                    'svg' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.5 2 2 0 0 1 3.61 1.3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.9a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.5 16.5z"/>',
                    'label' => 'Téléphone',
                    'val' => '+221 77 000 00 00',
                ],
            ] as $row)
            <div class="detail-row">
                <div class="detail-label">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $row['svg'] !!}</svg>
                    {{ $row['label'] }}
                </div>
                <span class="detail-val" @if(!empty($row['bold'])) style="font-weight:700;color:{{ $row['color'] }};" @endif>
                    {{ $row['val'] }}
                </span>
            </div>
            @endforeach

            {{-- Total --}}
            <div class="detail-total">
                <div class="detail-total-label">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="12" y1="1" x2="12" y2="23"/>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                    Montant total
                </div>
                <span class="detail-total-val">5 000 FCFA</span>
            </div>
        </div>

        {{-- Alertes email / SMS --}}
        <div class="conf-alerts">
            <div class="alert-row">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <p>Un email de confirmation a été envoyé à <strong>votre@email.com</strong></p>
            </div>
            <div class="alert-row">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px;"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                <p>Un SMS de confirmation sera envoyé au <strong>+221 77 000 00 00</strong></p>
            </div>
        </div>

        {{-- Boutons --}}
        <div class="conf-actions">
            <a href="{{ route('dashboard.client') }}" class="btn-action btn-dark">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                Mes réservations
            </a>
            <a href="{{ route('prestataires') }}" class="btn-action btn-green">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                Nouvelle réservation
            </a>
        </div>

        {{-- Paiement sécurisé --}}
        <div class="conf-payment">
            <p>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                Paiement sécurisé via
            </p>
            <div class="pay-badges">
                <div class="pay-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                    Orange Money
                </div>
                <div class="pay-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    Wave
                </div>
            </div>
        </div>

        {{-- Aide --}}
        <div class="conf-footer">
            <a href="{{ route('contact') }}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                Besoin d'aide ? Contactez-nous
            </a>
        </div>

    </div>
</div>
@endsection