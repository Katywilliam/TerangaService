@extends('layouts.app')

@section('title', 'Mes notifications - Teranga Service')

@section('content')
<style>
    .notif-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 14px 18px;
        border-bottom: 1px solid #F3F4F6;
        border-left: 3px solid transparent;
        cursor: pointer;
        transition: background .15s, border-left-color .15s;
        text-decoration: none;
    }
    .notif-item.unread {
        background: #F0FDF4;
        border-left-color: #3A9E3A;
    }
    .notif-item:hover {
        background: #F9FAFB;
    }
    .notif-item.unread:hover {
        background: #E6FAE6;
    }
    .notif-item:last-child { border-bottom: none; }
    .notif-icon {
        width: 40px; height: 40px; border-radius: 50%;
        display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .notif-dot {
        width: 8px; height: 8px; border-radius: 50%;
        background: #3A9E3A; flex-shrink: 0; margin-top: 5px;
        transition: opacity .2s;
    }
    .notif-dot.read { opacity: 0; }
    .notif-tag {
        display: inline-block; font-size: 10px; font-weight: 600;
        padding: 2px 8px; border-radius: 10px; margin-bottom: 4px;
    }
    #btn-mark-all:hover { background: #2e802e !important; }
</style>

<div style="max-width: 720px; margin: 0 auto; padding: 40px 20px; font-family: 'Poppins', sans-serif;">

    {{-- En-tête --}}
    <div style="margin-bottom: 28px;">
        <h1 style="font-size: 22px; font-weight: 600; color: #1B3A6B; margin: 0 0 6px; display: flex; align-items: center; gap: 10px;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
            Mes notifications
            <span id="badge-unread" style="background:#3A9E3A;color:white;font-size:11px;font-weight:600;padding:2px 8px;border-radius:10px;">2</span>
        </h1>
        <p style="font-size: 14px; color: #6B7280; margin: 0;">Restez informé de toutes les activités liées à votre compte</p>
    </div>

    {{-- Carte --}}
    <div style="background:white;border:1px solid #E5E7EB;border-radius:12px;overflow:hidden;">

        {{-- En-tête carte --}}
        <div style="background:#F9FAFB;padding:12px 18px;border-bottom:1px solid #E5E7EB;display:flex;justify-content:space-between;align-items:center;">
            <span style="font-weight:600;font-size:14px;color:#1B3A6B;">Toutes les notifications</span>
            <button id="btn-mark-all" style="background:#3A9E3A;color:white;border:none;padding:6px 14px;border-radius:6px;cursor:pointer;font-size:12px;font-weight:500;display:flex;align-items:center;gap:6px;transition:background .15s;">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                Tout marquer comme lu
            </button>
        </div>

        {{-- Notification 1 : Réservation confirmée (non lue) --}}
        <div class="notif-item unread" data-href="{{ route('reservations.confirmation') }}">
            <div class="notif-icon" style="background:#DCFCE7;color:#16A34A;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div style="flex:1;">
                <span class="notif-tag" style="background:#DCFCE7;color:#166534;">Réservation</span>
                <p style="font-weight:600;margin:0 0 3px;font-size:13px;color:#111827;">Réservation confirmée</p>
                <p style="margin:0 0 4px;font-size:13px;color:#6B7280;line-height:1.5;">Votre réservation avec Modou Fall est confirmée pour le 20/06/2026</p>
                <time style="font-size:11px;color:#9CA3AF;">Il y a 5 min</time>
            </div>
            <div class="notif-dot"></div>
        </div>

        {{-- Notification 2 : Nouveau message (non lue) --}}
        <div class="notif-item unread" data-href="{{ route('dashboard.client') }}">
            <div class="notif-icon" style="background:#DBEAFE;color:#2563EB;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <div style="flex:1;">
                <span class="notif-tag" style="background:#DBEAFE;color:#1e40af;">Message</span>
                <p style="font-weight:600;margin:0 0 3px;font-size:13px;color:#111827;">Nouveau message</p>
                <p style="margin:0 0 4px;font-size:13px;color:#6B7280;line-height:1.5;">Aïssa Diallo vous a envoyé un message concernant votre réservation</p>
                <time style="font-size:11px;color:#9CA3AF;">Il y a 2h</time>
            </div>
            <div class="notif-dot"></div>
        </div>

        {{-- Notification 3 : Nouvel avis (lue) --}}
        <div class="notif-item" data-href="{{ route('prestataires.profil', ['id' => 1]) }}#avis">
            <div class="notif-icon" style="background:#FEF3C7;color:#D97706;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <div style="flex:1;">
                <span class="notif-tag" style="background:#FEF3C7;color:#92400e;">Avis</span>
                <p style="font-weight:600;margin:0 0 3px;font-size:13px;color:#111827;">Nouvel avis reçu</p>
                <p style="margin:0 0 4px;font-size:13px;color:#6B7280;line-height:1.5;">Fatou N. a laissé un avis 5 étoiles sur votre prestation</p>
                <time style="font-size:11px;color:#9CA3AF;">Il y a 1 jour</time>
            </div>
            <div class="notif-dot read"></div>
        </div>

        {{-- Notification 4 : Paiement reçu (lue) --}}
        <div class="notif-item" data-href="{{ route('dashboard.prestataire') }}">
            <div class="notif-icon" style="background:#D1FAE5;color:#059669;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
            </div>
            <div style="flex:1;">
                <span class="notif-tag" style="background:#D1FAE5;color:#065f46;">Paiement</span>
                <p style="font-weight:600;margin:0 0 3px;font-size:13px;color:#111827;">Paiement reçu</p>
                <p style="margin:0 0 4px;font-size:13px;color:#6B7280;line-height:1.5;">Vous avez reçu 5 000 FCFA pour la prestation du 15/06/2026</p>
                <time style="font-size:11px;color:#9CA3AF;">Il y a 2 jours</time>
            </div>
            <div class="notif-dot read"></div>
        </div>

        {{-- Notification 5 : Rappel (lue) --}}
        <div class="notif-item" data-href="{{ route('reservations.formulaire') }}">
            <div class="notif-icon" style="background:#EDE9FE;color:#7C3AED;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
            </div>
            <div style="flex:1;">
                <span class="notif-tag" style="background:#EDE9FE;color:#4c1d95;">Rappel</span>
                <p style="font-weight:600;margin:0 0 3px;font-size:13px;color:#111827;">Rappel de réservation</p>
                <p style="margin:0 0 4px;font-size:13px;color:#6B7280;line-height:1.5;">Vous avez une réservation demain à 14h avec Oumar Kane</p>
                <time style="font-size:11px;color:#9CA3AF;">Il y a 3h</time>
            </div>
            <div class="notif-dot read"></div>
        </div>

    </div>

    {{-- Retour --}}
    <div style="margin-top:20px;">
        <a href="{{ route('home') }}" style="display:inline-flex;align-items:center;gap:6px;color:#3A9E3A;font-size:13px;text-decoration:none;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/>
            </svg>
            Retour à l'accueil
        </a>
    </div>
</div>

<script>
(function () {
    var unreadCount = document.querySelectorAll('.notif-item.unread').length;

    function updateBadge() {
        var badge = document.getElementById('badge-unread');
        if (unreadCount <= 0) {
            badge.style.display = 'none';
        } else {
            badge.textContent = unreadCount;
        }
    }

    // Clic sur une notification → marquer comme lue puis naviguer
    document.querySelectorAll('.notif-item').forEach(function (el) {
        el.addEventListener('click', function () {
            if (el.classList.contains('unread')) {
                el.classList.remove('unread');
                var dot = el.querySelector('.notif-dot');
                if (dot) dot.classList.add('read');
                unreadCount--;
                updateBadge();
            }
            var href = el.getAttribute('data-href');
            if (href) {
                setTimeout(function () { window.location.href = href; }, 200);
            }
        });
    });

    // Tout marquer comme lu
    document.getElementById('btn-mark-all').addEventListener('click', function () {
        document.querySelectorAll('.notif-item.unread').forEach(function (el) {
            el.classList.remove('unread');
            var dot = el.querySelector('.notif-dot');
            if (dot) dot.classList.add('read');
        });
        unreadCount = 0;
        updateBadge();
    });
})();
</script>
@endsection