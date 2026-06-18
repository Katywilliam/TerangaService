<!-- Sélecteur de langue avec Alpine.js -->
<div x-data="{ open: false, currentLang: 'FR' }" style="position: relative; display: inline-block;">
    
    <!-- Bouton principal -->
    <button @click="open = !open" 
            @click.away="open = false"
            style="background: rgba(255,255,255,0.1); border: none; color: white; padding: 8px 14px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 6px; font-size: 14px; transition: 0.2s;">
        <span style="font-size: 16px;">🌍</span>
        <span x-text="currentLang"></span>
        <span style="font-size: 10px;">▼</span>
    </button>
    
    <!-- Menu déroulant -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         style="position: absolute; top: 100%; right: 0; margin-top: 8px; background: white; border-radius: 12px; box-shadow: 0 10px 40px rgba(0,0,0,0.2); min-width: 140px; overflow: hidden; border: 1px solid #E5E7EB;">
        
        <!-- Français -->
        <button @click="selectLanguage('FR', '🇫🇷 Français')" 
                style="display: flex; align-items: center; gap: 10px; padding: 10px 16px; width: 100%; border: none; background: none; cursor: pointer; font-size: 14px; transition: 0.2s; color: #1B3A6B;"
                @mouseenter="event.target.style.background='#F3F4F6'"
                @mouseleave="event.target.style.background='transparent'">
            <span style="font-size: 20px;">🇫🇷</span>
            <span>Français</span>
            <span x-show="currentLang === 'FR'" style="margin-left: auto; color: #3A9E3A;">✓</span>
        </button>
        
        <!-- Wolof -->
        <button @click="selectLanguage('WO', '🇸🇳 Wolof')" 
                style="display: flex; align-items: center; gap: 10px; padding: 10px 16px; width: 100%; border: none; background: none; cursor: pointer; font-size: 14px; transition: 0.2s; border-top: 1px solid #F3F4F6; color: #1B3A6B;"
                @mouseenter="event.target.style.background='#F3F4F6'"
                @mouseleave="event.target.style.background='transparent'">
            <span style="font-size: 20px;">🇸🇳</span>
            <span>Wolof</span>
            <span x-show="currentLang === 'WO'" style="margin-left: auto; color: #3A9E3A;">✓</span>
        </button>
        
        <!-- English -->
        <button @click="selectLanguage('EN', '🇬🇧 English')" 
                style="display: flex; align-items: center; gap: 10px; padding: 10px 16px; width: 100%; border: none; background: none; cursor: pointer; font-size: 14px; transition: 0.2s; border-top: 1px solid #F3F4F6; color: #1B3A6B;"
                @mouseenter="event.target.style.background='#F3F4F6'"
                @mouseleave="event.target.style.background='transparent'">
            <span style="font-size: 20px;">🇬🇧</span>
            <span>English</span>
            <span x-show="currentLang === 'EN'" style="margin-left: auto; color: #3A9E3A;">✓</span>
        </button>
    </div>
</div>

<script>
    function languageSelector() {
        return {
            open: false,
            currentLang: 'FR',
            
            selectLanguage(code, label) {
                this.currentLang = code;
                this.open = false;
                
                // Sauvegarder dans localStorage
                localStorage.setItem('preferred_language', code);
                
                // Afficher un message de confirmation
                this.showToast(`🌍 Langue changée : ${label}`);
                
                // Ici vous pouvez ajouter une logique pour charger les traductions
                // Par exemple : window.location.reload() pour recharger la page
                // ou appeler une fonction de traduction
            },
            
            showToast(message) {
                // Créer un toast temporaire
                const toast = document.createElement('div');
                toast.style.cssText = `
                    position: fixed; bottom: 80px; left: 50%; transform: translateX(-50%);
                    background: #1B3A6B; color: white; padding: 12px 24px;
                    border-radius: 8px; font-size: 14px; z-index: 9999;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
                    animation: fadeInUp 0.3s ease-out;
                `;
                toast.textContent = message;
                document.body.appendChild(toast);
                
                setTimeout(() => {
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.3s';
                    setTimeout(() => toast.remove(), 300);
                }, 2000);
            }
        };
    }
    
    // Ajouter les styles d'animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateX(-50%) translateY(20px); }
            to { opacity: 1; transform: translateX(-50%) translateY(0); }
        }
    `;
    document.head.appendChild(style);
</script>