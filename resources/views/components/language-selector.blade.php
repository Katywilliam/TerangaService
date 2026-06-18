<div style="position: relative; display: inline-block;" id="language-selector">
    
    <!-- Bouton principal -->
    <button onclick="toggleLanguageMenu()" 
            style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: white; padding: 4px 10px; border-radius: 4px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px; font-size: 12px;">
        <span id="current-lang">FR</span>
        <span style="font-size: 10px;">▼</span>
    </button>
    
    <!-- Menu déroulant -->
    <div id="language-menu" style="display: none; position: absolute; top: 100%; left: 0; margin-top: 4px; background: white; border-radius: 6px; box-shadow: 0 10px 40px rgba(0,0,0,0.2); min-width: 120px; overflow: hidden; z-index: 1000; border: 1px solid #E5E7EB;">
        
        <button onclick="selectLanguage('FR')" 
                style="display: flex; align-items: center; gap: 8px; padding: 8px 14px; width: 100%; border: none; background: none; cursor: pointer; font-size: 13px; color: #1B3A6B; border-bottom: 1px solid #F3F4F6;"
                id="lang-fr">
            🇫🇷 Français
        </button>
        
        <button onclick="selectLanguage('WO')" 
                style="display: flex; align-items: center; gap: 8px; padding: 8px 14px; width: 100%; border: none; background: none; cursor: pointer; font-size: 13px; color: #1B3A6B; border-bottom: 1px solid #F3F4F6;"
                id="lang-wo">
            🇸🇳 Wolof
        </button>
        
        <button onclick="selectLanguage('EN')" 
                style="display: flex; align-items: center; gap: 8px; padding: 8px 14px; width: 100%; border: none; background: none; cursor: pointer; font-size: 13px; color: #1B3A6B;"
                id="lang-en">
            🇬🇧 English
        </button>
    </div>
</div>

<script>
    // Fonction pour ouvrir/fermer le menu
    function toggleLanguageMenu() {
        const menu = document.getElementById('language-menu');
        if (menu.style.display === 'none' || menu.style.display === '') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    }
    
    // Fonction pour sélectionner une langue
    function selectLanguage(lang) {
        // Fermer le menu
        document.getElementById('language-menu').style.display = 'none';
        
        // Mettre à jour l'affichage du bouton
        document.getElementById('current-lang').textContent = lang;
        
        // Sauvegarder dans localStorage
        localStorage.setItem('preferred_language', lang);
        
        // Traductions
        const translations = {
            'FR': {
                'accueil': 'Accueil',
                'services': 'Services',
                'tarifs': 'Tarifs',
                'prestataires': 'Prestataires',
                'about': 'À propos',
                'comment': 'Comment ça marche',
                'connexion': 'Connexion',
                'inscription': 'Inscription'
            },
            'WO': {
                'accueil': 'Njaay',
                'services': 'Sérvice yi',
                'tarifs': 'Tariif yi',
                'prestataires': 'Jëfandikukat yi',
                'about': 'Ci Teranga Service',
                'comment': 'Naka la nekk?',
                'connexion': 'Duggal',
                'inscription': 'Daggal'
            },
            'EN': {
                'accueil': 'Home',
                'services': 'Services',
                'tarifs': 'Pricing',
                'prestataires': 'Providers',
                'about': 'About',
                'comment': 'How it works',
                'connexion': 'Login',
                'inscription': 'Sign up'
            }
        };
        
        const t = translations[lang];
        
        // Mettre à jour les liens du menu
        document.querySelectorAll('a[href="/"]').forEach(el => el.textContent = t.accueil);
        document.querySelectorAll('a[href="/services"]').forEach(el => el.textContent = t.services);
        document.querySelectorAll('a[href="/tarifs"]').forEach(el => el.textContent = t.tarifs);
        document.querySelectorAll('a[href="/prestataires"]').forEach(el => el.textContent = t.prestataires);
        document.querySelectorAll('a[href="/about"]').forEach(el => el.textContent = t.about);
        document.querySelectorAll('a[href="#comment-ca-marche"]').forEach(el => el.textContent = t.comment);
        document.querySelectorAll('a[href="/login"]').forEach(el => el.textContent = t.connexion);
        document.querySelectorAll('a[href="/register"]').forEach(el => el.textContent = t.inscription);
        
        // Afficher un message de confirmation
        const langNames = {
            'FR': 'Français 🇫🇷',
            'WO': 'Wolof 🇸🇳',
            'EN': 'English 🇬🇧'
        };
        
        const toast = document.createElement('div');
        toast.style.cssText = `
            position: fixed; bottom: 80px; left: 50%; transform: translateX(-50%);
            background: #1B3A6B; color: white; padding: 10px 24px;
            border-radius: 8px; font-size: 14px; z-index: 9999;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            animation: fadeInUp 0.3s ease-out;
        `;
        toast.textContent = `🌍 Langue changée : ${langNames[lang]}`;
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 0.3s';
            setTimeout(() => toast.remove(), 300);
        }, 2000);
    }
    
    // Fermer le menu quand on clique ailleurs
    document.addEventListener('click', function(event) {
        const selector = document.getElementById('language-selector');
        if (!selector.contains(event.target)) {
            const menu = document.getElementById('language-menu');
            if (menu) {
                menu.style.display = 'none';
            }
        }
    });
</script>