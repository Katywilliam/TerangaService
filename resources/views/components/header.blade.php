<header style="background-color: #1B3A6B; color: white; padding: 12px 0; box-shadow: 0 4px 6px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 50;">
    <nav style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center;">
        
        <!-- Logo -->
        <a href="/" style="display: flex; align-items: center; gap: 8px; text-decoration: none; color: white; font-size: 18px; font-weight: bold;">
            <span style="background-color: #3A9E3A; padding: 6px 10px; border-radius: 8px; font-size: 16px;">🏠</span>
            Teranga Service
        </a>
        
        <!-- Menu Desktop -->
        <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
            <a href="/" style="color: white; text-decoration: none; font-size: 14px;">Accueil</a>
            <a href="/services" style="color: white; text-decoration: none; font-size: 14px;">Services</a>
            <a href="/tarifs" style="color: white; text-decoration: none; font-size: 14px;">Tarifs</a>
            <a href="/prestataires" style="color: white; text-decoration: none; font-size: 14px;">Prestataires</a>
            <a href="/about" style="color: white; text-decoration: none; font-size: 14px;">À propos</a>
            <a href="#comment-ca-marche" style="color: white; text-decoration: none; font-size: 14px;">Comment ça marche</a>
            <a href="/admin" style="color: white; text-decoration: none; font-size: 14px; background: #F59E0B; color: #1B3A6B; padding: 4px 10px; border-radius: 4px;">👑 Admin</a>
            <!-- ⭐ AFFICHAGE CONDITIONNEL SELON LE RÔLE ⭐ -->
            @auth
                <!-- Si l'utilisateur est ADMIN, afficher le lien Admin -->
                @if(Auth::user()->role === 'admin')
                    <a href="/admin" style="background: #F59E0B; color: #1B3A6B; padding: 4px 12px; border-radius: 4px; text-decoration: none; font-weight: bold; font-size: 13px;">👑 Admin</a>
                @endif
                
                <!-- Dashboard -->
                <a href="/dashboard/client" style="color: white; text-decoration: none; font-size: 14px;">📊 Dashboard</a>
                
                <!-- Déconnexion -->
                <form method="POST" action="/logout" style="display: inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: white; text-decoration: none; font-size: 14px; cursor: pointer; opacity: 0.8;">Déconnexion</button>
                </form>
            @else
                <!-- Si l'utilisateur n'est pas connecté -->
                <a href="/login" style="color: white; text-decoration: none; font-size: 14px;">Connexion</a>
                <a href="/register" style="background-color: #3A9E3A; padding: 6px 14px; border-radius: 6px; text-decoration: none; color: white; font-size: 14px;">Inscription</a>
            @endauth
            
            <!-- Notifications -->
            @include('components.notifications')
            
            <!-- Sélecteur de langue -->
            @include('components.language-selector')
        </div>
        
        <!-- Bouton menu mobile -->
        <button id="mobile-menu-btn" style="background: none; border: 1px solid rgba(255,255,255,0.2); color: white; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 20px; display: none;" onclick="toggleMobileMenu()">
            ☰
        </button>
    </nav>
    
    <!-- Menu mobile -->
    <div id="mobile-menu" style="display: none; background-color: #1B3A6B; padding: 12px 20px 16px; border-top: 1px solid rgba(255,255,255,0.1);">
        <a href="/" style="display: block; color: white; text-decoration: none; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.05);">🏠 Accueil</a>
        <a href="/services" style="display: block; color: white; text-decoration: none; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.05);">📂 Services</a>
        <a href="/tarifs" style="display: block; color: white; text-decoration: none; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.05);">💰 Tarifs</a>
        <a href="/prestataires" style="display: block; color: white; text-decoration: none; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.05);">👨‍🔧 Prestataires</a>
        <a href="/about" style="display: block; color: white; text-decoration: none; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.05);">ℹ️ À propos</a>
        <a href="#comment-ca-marche" style="display: block; color: white; text-decoration: none; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.05);">❓ Comment ça marche</a>
        
        <div style="margin: 8px 0; border-top: 1px solid rgba(255,255,255,0.1);"></div>
        
        <div style="display: flex; gap: 8px; padding: 4px 0; align-items: center; flex-wrap: wrap;">
            <!-- Notifications mobile -->
            @include('components.notifications')
            
            @auth
                @if(Auth::user()->role === 'admin')
                    <a href="/admin" style="background: #F59E0B; color: #1B3A6B; padding: 4px 12px; border-radius: 4px; text-decoration: none; font-weight: bold; font-size: 13px;">👑 Admin</a>
                @endif
                <a href="/dashboard/client" style="color: white; text-decoration: none; padding: 6px; font-size: 14px; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; flex: 1; text-align: center;">📊 Dashboard</a>
                <form method="POST" action="/logout" style="flex: 1;">
                    @csrf
                    <button type="submit" style="width: 100%; background: none; border: 1px solid rgba(255,255,255,0.2); color: white; padding: 6px; border-radius: 6px; cursor: pointer; font-size: 14px;">Déconnexion</button>
                </form>
            @else
                <a href="/login" style="flex: 1; text-align: center; color: white; text-decoration: none; padding: 6px; font-size: 14px; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px;">Connexion</a>
                <a href="/register" style="flex: 1; text-align: center; background-color: #3A9E3A; color: white; padding: 6px; border-radius: 6px; text-decoration: none; font-size: 14px;">Inscription</a>
            @endauth
        </div>
        
        <div style="margin-top: 10px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.1);">
            @include('components.language-selector')
        </div>
    </div>
</header>

<style>
    /* Desktop : afficher le menu desktop, cacher le bouton mobile */
    @media (min-width: 768px) {
        #mobile-menu-btn {
            display: none !important;
        }
        #mobile-menu {
            display: none !important;
        }
    }
    
    /* Mobile : cacher le menu desktop, afficher le bouton mobile */
    @media (max-width: 767px) {
        #mobile-menu-btn {
            display: block !important;
        }
        #mobile-menu {
            display: none !important;
        }
    }
</style>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        if (menu.style.display === 'none' || menu.style.display === '') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    }
</script>
