@extends('layouts.app')

@section('title', 'Accueil - Teranga Service')

@section('content')
<!-- 1. HERO SECTION -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 80px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: bold; margin-bottom: 16px;">Votre maison, <span style="color: #3A9E3A;">nos solutions</span></h1>
        <p style="font-size: 24px; margin-bottom: 24px;">Sérénité · Confiance · Proximité</p>
        <p style="font-size: 18px; margin-bottom: 32px; color: #D1D5DB;">Teranga Service connecte les particuliers sénégalais à des prestataires vérifiés pour tous vos besoins du quotidien.</p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="/prestataires" style="background-color: #3A9E3A; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600;">Trouver un prestataire</a>
            <a href="/register" style="background-color: white; color: #1B3A6B; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600;">Devenir prestataire</a>
        </div>
    </div>
</div>

<!-- 2. BANDEAU DE CONFIANCE -->
<div data-aos="fade-up" style="padding: 32px 20px; background-color: #F3F4F6;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: center; gap: 32px;">
        <div style="display: flex; align-items: center; gap: 8px;">
            <span style="font-size: 24px;">🛡️</span>
            <span style="font-weight: 500;">Prestataires vérifiés</span>
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
            <span style="font-size: 24px;">🔒</span>
            <span style="font-weight: 500;">Paiement sécurisé</span>
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
            <span style="font-size: 24px;">⏰</span>
            <span style="font-weight: 500;">Disponible 24/7</span>
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
            <span style="font-size: 24px;">😊</span>
            <span style="font-weight: 500;">Satisfaction garantie</span>
        </div>
    </div>
</div>

<!-- 3. SECTION "COMMENT ÇA MARCHE" (CORRIGÉ AVEC ID) -->
<div id="comment-ca-marche" data-aos="fade-up" style="padding: 60px 20px; background-color: #F9FAFB;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: bold; text-align: center; color: #1B3A6B; margin-bottom: 12px;">Comment ça marche ?</h2>
        <p style="text-align: center; color: #6B7280; margin-bottom: 48px;">Trouvez un prestataire qualifié en quelques clics</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px;">
            <!-- Étape 1 -->
            <div data-aos="fade-up" data-aos-delay="0" style="text-align: center;">
                <div style="background: #3A9E3A; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: white; font-size: 28px; font-weight: bold; position: relative;">
                    1
                    <div style="position: absolute; top: -8px; right: -8px; background: #1B3A6B; color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">🔍</div>
                </div>
                <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Recherchez</h3>
                <p style="color: #6B7280; font-size: 14px;">Trouvez le prestataire idéal près de chez vous</p>
            </div>

            <!-- Étape 2 -->
            <div data-aos="fade-up" data-aos-delay="100" style="text-align: center;">
                <div style="background: #3A9E3A; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: white; font-size: 28px; font-weight: bold; position: relative;">
                    2
                    <div style="position: absolute; top: -8px; right: -8px; background: #1B3A6B; color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">📅</div>
                </div>
                <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Réservez</h3>
                <p style="color: #6B7280; font-size: 14px;">Choisissez votre créneau et confirmez</p>
            </div>

            <!-- Étape 3 -->
            <div data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
                <div style="background: #3A9E3A; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: white; font-size: 28px; font-weight: bold; position: relative;">
                    3
                    <div style="position: absolute; top: -8px; right: -8px; background: #1B3A6B; color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">💳</div>
                </div>
                <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Payez</h3>
                <p style="color: #6B7280; font-size: 14px;">Paiement sécurisé via Wave ou Orange Money</p>
            </div>

            <!-- Étape 4 -->
            <div data-aos="fade-up" data-aos-delay="300" style="text-align: center;">
                <div style="background: #3A9E3A; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: white; font-size: 28px; font-weight: bold; position: relative;">
                    4
                    <div style="position: absolute; top: -8px; right: -8px; background: #1B3A6B; color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">😊</div>
                </div>
                <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Profitez</h3>
                <p style="color: #6B7280; font-size: 14px;">Service de qualité et satisfaction garantie</p>
            </div>
        </div>
    </div>
</div>

<!-- 4. SECTION SERVICES -->
<div data-aos="fade-up" style="padding: 64px 20px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: bold; text-align: center; color: #1B3A6B; margin-bottom: 48px;">Nos services à domicile</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
            <div data-aos="fade-up" data-aos-delay="0" class="card" style="padding: 24px; text-align: center;">
                <div style="font-size: 32px; margin-bottom: 16px;">🧹</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Ménage & Nettoyage</h3>
                <p style="color: #6B7280;">Nettoyage complet de votre maison avec des produits adaptés.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="card" style="padding: 24px; text-align: center;">
                <div style="font-size: 32px; margin-bottom: 16px;">🔧</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Plomberie</h3>
                <p style="color: #6B7280;">Réparation de fuites, installation sanitaire, débouchage.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="card" style="padding: 24px; text-align: center;">
                <div style="font-size: 32px; margin-bottom: 16px;">⚡</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Électricité</h3>
                <p style="color: #6B7280;">Installation, dépannage électrique et mise aux normes.</p>
            </div>
        </div>
    </div>
</div>

<!-- 5. SECTION TÉMOIGNAGES -->
<div data-aos="fade-up" style="padding: 64px 20px; background-color: #F9FAFB;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: bold; text-align: center; color: #1B3A6B; margin-bottom: 48px;">Ce que nos clients disent</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
            <div data-aos="fade-up" data-aos-delay="0" class="card" style="padding: 24px;">
                <div style="color: #FBBF24; font-size: 20px;">★★★★★</div>
                <p style="margin: 16px 0; color: #4B5563;">"Service impeccable ! J'ai trouvé un plombier en moins de 30 minutes."</p>
                <p style="font-weight: 600;">— Fatou N.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="card" style="padding: 24px;">
                <div style="color: #FBBF24; font-size: 20px;">★★★★★</div>
                <p style="margin: 16px 0; color: #4B5563;">"Paiement sécurisé avec Wave, très pratique. Je recommande !"</p>
                <p style="font-weight: 600;">— Mamadou D.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="card" style="padding: 24px;">
                <div style="color: #FBBF24; font-size: 20px;">★★★★☆</div>
                <p style="margin: 16px 0; color: #4B5563;">"Service client réactif. Le jardinier a fait un excellent travail."</p>
                <p style="font-weight: 600;">— Aïcha S.</p>
            </div>
        </div>
    </div>
</div>

<!-- 6. CTA FINAL -->
<div data-aos="zoom-in" style="padding: 64px 20px; background-color: #1B3A6B; color: white; text-align: center;">
    <div style="max-width: 600px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 16px;">Prêt à simplifier votre quotidien ?</h2>
        <a href="/prestataires" style="background-color: #3A9E3A; color: white; padding: 12px 32px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block;">Trouvez un prestataire</a>
    </div>
</div>
@endsection