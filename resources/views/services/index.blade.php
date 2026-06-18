@extends('layouts.app')

@section('title', 'Nos services - Teranga Service')

@section('content')
<!-- Hero avec animation -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 60px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: bold; margin-bottom: 16px;">Nos services à domicile</h1>
        <p style="font-size: 20px; color: #D1D5DB;">Des professionnels qualifiés pour tous vos besoins du quotidien</p>
    </div>
</div>

<div style="padding: 60px 20px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            
            <!-- Ménage -->
            <div data-aos="fade-up" data-aos-delay="0" class="card" style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 16px;">🧹</div>
                <h3 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">Ménage & Nettoyage</h3>
                <p style="color: #6B7280; line-height: 1.6;">Nettoyage complet de votre maison, appartement ou bureau. Produits écologiques et professionnels.</p>
                <div style="margin-top: 20px;">
                    <span style="color: #3A9E3A; font-size: 24px; font-weight: bold;">3 500 FCFA</span>
                    <span style="color: #6B7280;">/heure</span>
                </div>
                <a href="/prestataires" style="display: inline-block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px 24px; border-radius: 8px; text-decoration: none;">Réserver</a>
            </div>

            <!-- Plomberie -->
            <div data-aos="fade-up" data-aos-delay="100" class="card" style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 16px;">🔧</div>
                <h3 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">Plomberie</h3>
                <p style="color: #6B7280; line-height: 1.6;">Réparation de fuites, installation sanitaire, débouchage de canalisations. Intervention rapide.</p>
                <div style="margin-top: 20px;">
                    <span style="color: #3A9E3A; font-size: 24px; font-weight: bold;">5 000 FCFA</span>
                    <span style="color: #6B7280;">/intervention</span>
                </div>
                <a href="/prestataires" style="display: inline-block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px 24px; border-radius: 8px; text-decoration: none;">Réserver</a>
            </div>

            <!-- Électricité -->
            <div data-aos="fade-up" data-aos-delay="200" class="card" style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 16px;">⚡</div>
                <h3 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">Électricité</h3>
                <p style="color: #6B7280; line-height: 1.6;">Installation électrique, dépannage d'urgence, mise aux normes. Électriciens certifiés.</p>
                <div style="margin-top: 20px;">
                    <span style="color: #3A9E3A; font-size: 24px; font-weight: bold;">5 500 FCFA</span>
                    <span style="color: #6B7280;">/intervention</span>
                </div>
                <a href="/prestataires" style="display: inline-block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px 24px; border-radius: 8px; text-decoration: none;">Réserver</a>
            </div>

            <!-- Jardinage -->
            <div data-aos="fade-up" data-aos-delay="0" class="card" style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 16px;">🌿</div>
                <h3 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">Jardinage</h3>
                <p style="color: #6B7280; line-height: 1.6;">Entretien de jardin, tonte de pelouse, taille de haies, plantation et aménagement paysager.</p>
                <div style="margin-top: 20px;">
                    <span style="color: #3A9E3A; font-size: 24px; font-weight: bold;">4 000 FCFA</span>
                    <span style="color: #6B7280;">/heure</span>
                </div>
                <a href="/prestataires" style="display: inline-block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px 24px; border-radius: 8px; text-decoration: none;">Réserver</a>
            </div>

            <!-- Garde d'enfants -->
            <div data-aos="fade-up" data-aos-delay="100" class="card" style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 16px;">👶</div>
                <h3 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">Garde d'enfants</h3>
                <p style="color: #6B7280; line-height: 1.6;">Garde d'enfants à domicile, aide aux devoirs, activités éducatives et ludiques.</p>
                <div style="margin-top: 20px;">
                    <span style="color: #3A9E3A; font-size: 24px; font-weight: bold;">2 500 FCFA</span>
                    <span style="color: #6B7280;">/heure</span>
                </div>
                <a href="/prestataires" style="display: inline-block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px 24px; border-radius: 8px; text-decoration: none;">Réserver</a>
            </div>

            <!-- Cuisine -->
            <div data-aos="fade-up" data-aos-delay="200" class="card" style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 16px;">🍳</div>
                <h3 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">Cuisine</h3>
                <p style="color: #6B7280; line-height: 1.6;">Préparation de repas à domicile, cuisine sénégalaise et internationale, service traiteur.</p>
                <div style="margin-top: 20px;">
                    <span style="color: #3A9E3A; font-size: 24px; font-weight: bold;">3 000 FCFA</span>
                    <span style="color: #6B7280;">/repas</span>
                </div>
                <a href="/prestataires" style="display: inline-block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px 24px; border-radius: 8px; text-decoration: none;">Réserver</a>
            </div>

        </div>
    </div>
</div>
@endsection