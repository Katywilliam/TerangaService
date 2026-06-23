{{-- Notifications dropdown avec Alpine.js --}}
<div x-data="notificationSystem()" style="position:relative;display:inline-block;">

    {{-- Bouton cloche SVG --}}
    <button @click="open = !open; if(open) unreadCount = 0"
            style="background:none;border:none;cursor:pointer;position:relative;padding:4px;display:flex;align-items:center;justify-content:center;"
            aria-label="Notifications">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
        </svg>
        <span x-show="unreadCount > 0"
              x-text="unreadCount"
              style="position:absolute;top:-4px;right:-4px;background:#EF4444;color:white;font-size:10px;font-weight:700;width:17px;height:17px;border-radius:50%;display:flex;align-items:center;justify-content:center;border:2px solid white;"></span>
    </button>

    {{-- Panneau --}}
    <div x-show="open"
         @click.away="open = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         style="position:absolute;top:calc(100% + 8px);right:0;width:360px;max-width:90vw;background:white;border-radius:12px;box-shadow:0 20px 60px rgba(0,0,0,.15);overflow:hidden;z-index:1000;border:1px solid #E5E7EB;">

        {{-- En-tête --}}
        <div style="background:#1B3A6B;color:white;padding:12px 16px;display:flex;justify-content:space-between;align-items:center;">
            <span style="font-weight:600;font-size:14px;display:flex;align-items:center;gap:7px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                Notifications
            </span>
            <button @click="markAllAsRead()"
                    style="background:rgba(255,255,255,.15);border:none;color:white;padding:4px 10px;border-radius:5px;font-size:11px;font-weight:500;cursor:pointer;font-family:'Poppins',sans-serif;display:flex;align-items:center;gap:4px;">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                Tout lire
            </button>
        </div>

        {{-- Liste --}}
        <div style="max-height:380px;overflow-y:auto;">
            <template x-for="notif in notifications" :key="notif.id">
                <div @click="handleClick(notif)"
                     :style="notif.read ? 'background:white;border-left:3px solid transparent;' : 'background:#F0FDF4;border-left:3px solid #3A9E3A;'"
                     style="padding:12px 14px;border-bottom:1px solid #F3F4F6;cursor:pointer;transition:background .12s;display:flex;align-items:flex-start;gap:10px;"
                     @mouseenter="$el.style.background = notif.read ? '#FAFAFA' : '#E6F7E6'"
                     @mouseleave="$el.style.background = notif.read ? 'white' : '#F0FDF4'">
                    {{-- Icône selon type --}}
                    <div :style="`width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;background:${notif.bgColor};`">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" :stroke="notif.iconColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path :d="notif.iconPath"></path>
                        </svg>
                    </div>
                    <div style="flex:1;min-width:0;">
                        <p style="font-weight:600;font-size:13px;color:#1B3A6B;margin:0 0 3px;" x-text="notif.title"></p>
                        <p style="font-size:12px;color:#6B7280;margin:0 0 4px;line-height:1.4;" x-text="notif.message"></p>
                        <p style="font-size:11px;color:#9CA3AF;margin:0;" x-text="notif.time"></p>
                    </div>
                    <div x-show="!notif.read" style="width:7px;height:7px;border-radius:50%;background:#3A9E3A;flex-shrink:0;margin-top:4px;"></div>
                </div>
            </template>

            <div x-show="notifications.length === 0" style="padding:32px 20px;text-align:center;color:#9CA3AF;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#D1D5DB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="margin:0 auto 10px;display:block;" aria-hidden="true"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/><line x1="2" y1="2" x2="22" y2="22"/></svg>
                <p style="font-size:13px;margin:0;">Aucune notification</p>
            </div>
        </div>

        {{-- Pied --}}
        <div style="padding:10px 16px;border-top:1px solid #F3F4F6;text-align:center;">
            <a href="{{ route('notifications') }}" style="color:#3A9E3A;text-decoration:none;font-size:13px;font-weight:500;display:inline-flex;align-items:center;gap:4px;">
                Voir toutes les notifications
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('notificationSystem', () => ({
        open: false,
        unreadCount: 2,
        notifications: [
            {
                id: 1,
                title: 'Réservation confirmée',
                message: 'Votre réservation avec Modou Fall est confirmée pour le 20/06/2026 à 10h',
                time: 'Il y a 5 min',
                read: false,
                link: '/reservations/confirmation',
                bgColor: '#DCFCE7', iconColor: '#16A34A',
                iconPath: 'M20 6L9 17l-5-5'
            },
            {
                id: 2,
                title: 'Nouveau message',
                message: 'Aïssa Diallo vous a envoyé un message concernant votre réservation',
                time: 'Il y a 2h',
                read: false,
                link: '/dashboard/client',
                bgColor: '#DBEAFE', iconColor: '#2563EB',
                iconPath: 'M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z'
            },
            {
                id: 3,
                title: 'Nouvel avis reçu',
                message: 'Fatou N. a laissé un avis 5 étoiles sur votre prestation',
                time: 'Il y a 1 jour',
                read: true,
                link: '/prestataires/1#avis',
                bgColor: '#FEF3C7', iconColor: '#D97706',
                iconPath: 'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'
            },
            {
                id: 4,
                title: 'Paiement reçu',
                message: 'Vous avez reçu 5 000 FCFA pour la prestation du 15/06/2026',
                time: 'Il y a 2 jours',
                read: true,
                link: '/dashboard/prestataire',
                bgColor: '#D1FAE5', iconColor: '#059669',
                iconPath: 'M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6'
            }
        ],

        handleClick(notif) {
            notif.read = true;
            this.open = false;
            if (notif.link) window.location.href = notif.link;
        },

        markAllAsRead() {
            this.notifications.forEach(n => n.read = true);
            this.unreadCount = 0;
        }
    }));
});
</script>
