@extends('layouts.app')

@section('title', 'Profil du prestataire - Teranga Service')

@section('content')
<!-- Hero avec animation -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 60px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <div style="font-size: 80px; margin-bottom: 16px;">👨‍🔧</div>
        <h1 style="font-size: 36px; font-weight: bold; margin-bottom: 8px;">Modou Fall</h1>
        <p style="font-size: 18px; color: #D1D5DB;">Plombier professionnel</p>
        <div style="display: flex; justify-content: center; gap: 20px; margin-top: 16px; flex-wrap: wrap;">
            <span style="background-color: #3A9E3A; padding: 4px 12px; border-radius: 20px; font-size: 14px;">✅ Vérifié</span>
            <span>⭐ 4.8/5 (12 avis)</span>
            <span>📍 Dakar - Mermoz</span>
        </div>
    </div>
</div>

<div style="padding: 60px 20px; max-width: 1200px; margin: 0 auto;">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
        <!-- Colonne gauche -->
        <div>
            <div data-aos="fade-right" class="card" style="margin-bottom: 24px;">
                <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 16px;">À propos</h2>
                <p style="color: #4B5563; line-height: 1.8;">
                    Plombier professionnel avec 10 ans d'expérience. Je propose des services de qualité pour tous vos besoins en plomberie : réparation de fuites, installation sanitaire, débouchage de canalisations, etc. Intervention rapide et garantie sur tous mes travaux.
                </p>
            </div>

            <div data-aos="fade-right" data-aos-delay="100" class="card" style="margin-bottom: 24px;">
                <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 16px;">Services proposés</h2>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div style="background: #F3F4F6; padding: 12px; border-radius: 8px;">
                        <span style="font-weight: bold;">🔧</span> Réparation de fuites
                        <span style="display: block; color: #3A9E3A; font-weight: bold;">5 000 FCFA</span>
                    </div>
                    <div style="background: #F3F4F6; padding: 12px; border-radius: 8px;">
                        <span style="font-weight: bold;">🚰</span> Installation sanitaire
                        <span style="display: block; color: #3A9E3A; font-weight: bold;">8 000 FCFA</span>
                    </div>
                    <div style="background: #F3F4F6; padding: 12px; border-radius: 8px;">
                        <span style="font-weight: bold;">🌀</span> Débouchage
                        <span style="display: block; color: #3A9E3A; font-weight: bold;">3 500 FCFA</span>
                    </div>
                    <div style="background: #F3F4F6; padding: 12px; border-radius: 8px;">
                        <span style="font-weight: bold;">🛁</span> Installation chauffe-eau
                        <span style="display: block; color: #3A9E3A; font-weight: bold;">10 000 FCFA</span>
                    </div>
                </div>
            </div>

            <div data-aos="fade-right" data-aos-delay="200" class="card">
                <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 16px;">Avis clients</h2>
                <div style="border-bottom: 1px solid #E5E7EB; padding: 16px 0;">
                    <div style="display: flex; justify-content: space-between;">
                        <span style="font-weight: bold;">Fatou N.</span>
                        <span style="color: #FBBF24;">★★★★★</span>
                    </div>
                    <p style="color: #4B5563; margin-top: 4px;">"Excellent travail ! Réparation rapide et propre. Je recommande."</p>
                </div>
                <div style="border-bottom: 1px solid #E5E7EB; padding: 16px 0;">
                    <div style="display: flex; justify-content: space-between;">
                        <span style="font-weight: bold;">Mamadou D.</span>
                        <span style="color: #FBBF24;">★★★★☆</span>
                    </div>
                    <p style="color: #4B5563; margin-top: 4px;">"Bon professionnel, ponctuel et efficace."</p>
                </div>
                <div style="padding: 16px 0;">
                    <div style="display: flex; justify-content: space-between;">
                        <span style="font-weight: bold;">Aïcha S.</span>
                        <span style="color: #FBBF24;">★★★★★</span>
                    </div>
                    <p style="color: #4B5563; margin-top: 4px;">"Service de qualité, je ferai appel à lui à nouveau."</p>
                </div>
            </div>
        </div>

        <!-- Colonne droite (Carte de réservation) -->
        <div data-aos="fade-left">
            <div class="card" style="position: sticky; top: 100px;">
                <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 16px;">Réserver</h2>
                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; margin-bottom: 4px;">Date</label>
                    <input type="date" style="width: 100%; padding: 10px; border: 1px solid #D1D5DB; border-radius: 8px;">
                </div>
                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; margin-bottom: 4px;">Heure</label>
                    <select style="width: 100%; padding: 10px; border: 1px solid #D1D5DB; border-radius: 8px;">
                        <option>09:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                    </select>
                </div>
                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; margin-bottom: 4px;">Adresse</label>
                    <input type="text" placeholder="Votre adresse" style="width: 100%; padding: 10px; border: 1px solid #D1D5DB; border-radius: 8px;">
                </div>
                <a href="/reservations/confirmation" style="display: block; background-color: #3A9E3A; color: white; padding: 14px; border-radius: 8px; text-decoration: none; text-align: center; font-weight: 600;">Réserver maintenant</a>
                <p style="text-align: center; color: #6B7280; font-size: 14px; margin-top: 8px;">🔒 Paiement sécurisé</p>
            </div>
        </div>
    </div>
</div>
@endsection