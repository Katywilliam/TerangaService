<!-- Notifications avec Alpine.js -->
<div x-data="notificationSystem()" style="position: relative; display: inline-block;">
    
    <!-- Icône de notification -->
    <button @click="open = !open" 
            @click.away="open = false"
            style="background: none; border: none; color: white; cursor: pointer; position: relative; font-size: 20px; padding: 4px 8px;">
        🔔
        <!-- Compteur de notifications non lues -->
        <span x-show="unreadCount > 0" 
              style="position: absolute; top: -4px; right: -2px; background: #EF4444; color: white; font-size: 10px; font-weight: bold; padding: 2px 6px; border-radius: 50%; min-width: 18px; text-align: center;">
            <span x-text="unreadCount"></span>
        </span>
    </button>
    
    <!-- Panneau des notifications -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2 scale-95"
         x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 transform -translate-y-2 scale-95"
         style="position: absolute; top: 100%; right: 0; margin-top: 8px; width: 380px; max-width: 90vw; background: white; border-radius: 12px; box-shadow: 0 20px 60px rgba(0,0,0,0.2); overflow: hidden; z-index: 1000; border: 1px solid #E5E7EB;">
        
        <!-- En-tête -->
        <div style="background: #1B3A6B; color: white; padding: 12px 16px; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-weight: bold; font-size: 16px;">🔔 Notifications</span>
            <button @click="markAllAsRead()" 
                    style="background: rgba(255,255,255,0.2); border: none; color: white; padding: 4px 12px; border-radius: 4px; font-size: 12px; cursor: pointer;">
                Tout marquer comme lu
            </button>
        </div>
        
        <!-- Liste des notifications -->
        <div style="max-height: 400px; overflow-y: auto;">
            <template x-for="notif in notifications" :key="notif.id">
                <div @click="handleNotificationClick(notif)" 
                     style="padding: 12px 16px; border-bottom: 1px solid #F3F4F6; cursor: pointer; transition: 0.2s;"
                     :style="notif.read ? 'background: white;' : 'background: #F0FDF4; border-left: 3px solid #3A9E3A;'"
                     @mouseenter="event.target.style.background = notif.read ? '#F9FAFB' : '#E6F7E6'"
                     @mouseleave="event.target.style.background = notif.read ? 'white' : '#F0FDF4'">
                    <div style="display: flex; justify-content: space-between; align-items: start;">
                        <div style="flex: 1;">
                            <p style="font-weight: bold; font-size: 14px; color: #1B3A6B; margin: 0;" x-text="notif.title"></p>
                            <p style="font-size: 13px; color: #6B7280; margin: 4px 0;" x-text="notif.message"></p>
                            <p style="font-size: 11px; color: #9CA3AF; margin: 0;" x-text="notif.time"></p>
                        </div>
                        <span x-show="!notif.read" style="display: inline-block; width: 8px; height: 8px; background: #3A9E3A; border-radius: 50%; flex-shrink: 0; margin-left: 8px;"></span>
                    </div>
                </div>
            </template>
            
            <!-- Message si aucune notification -->
            <div x-show="notifications.length === 0" style="padding: 30px 20px; text-align: center; color: #9CA3AF;">
                <div style="font-size: 40px; margin-bottom: 8px;">🔕</div>
                <p>Aucune notification</p>
            </div>
        </div>
        
        <!-- ⭐ Pied de page (LIEN CORRIGÉ ICI) ⭐ -->
        <div style="padding: 10px 16px; border-top: 1px solid #F3F4F6; text-align: center;">
            <a href="/notifications" style="color: #3A9E3A; text-decoration: none; font-size: 13px;">Voir toutes les notifications →</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('notificationSystem', () => ({
            open: false,
            notifications: [
                { 
                    id: 1, 
                    title: '✅ Réservation confirmée', 
                    message: 'Votre réservation avec Modou Fall est confirmée pour le 20/06/2026 à 10h', 
                    time: 'Il y a 5 min', 
                    read: false,
                    link: '/reservations/confirmation',
                    type: 'reservation'
                },
                { 
                    id: 2, 
                    title: '💬 Nouveau message', 
                    message: 'Aïssa Diallo vous a envoyé un message concernant votre réservation', 
                    time: 'Il y a 2h', 
                    read: false,
                    link: '/messages/2',
                    type: 'message'
                },
                { 
                    id: 3, 
                    title: '⭐ Nouvel avis', 
                    message: 'Fatou N. a laissé un avis sur votre prestation (5 étoiles)', 
                    time: 'Il y a 1 jour', 
                    read: true,
                    link: '/prestataires/1#avis',
                    type: 'avis'
                },
                { 
                    id: 4, 
                    title: '💰 Paiement reçu', 
                    message: 'Vous avez reçu 5 000 FCFA pour la prestation du 15/06/2026', 
                    time: 'Il y a 2 jours', 
                    read: true,
                    link: '/dashboard/prestataire',
                    type: 'paiement'
                }
            ],
            
            get unreadCount() {
                return this.notifications.filter(n => !n.read).length;
            },
            
            handleNotificationClick(notif) {
                if (!notif.read) {
                    notif.read = true;
                }
                this.open = false;
                if (notif.link) {
                    window.location.href = notif.link;
                }
            },
            
            markAllAsRead() {
                this.notifications.forEach(n => n.read = true);
            }
        }));
    });
</script>