@extends('layouts.app')

@section('title', 'Devenir prestataire - Teranga Service')

@section('content')
<!-- Hero -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #3A9E3A); color: white; padding: 60px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: bold; margin-bottom: 16px;">👨‍🔧 Devenir prestataire</h1>
        <p style="font-size: 20px; color: #D1D5DB;">Rejoignez 500+ prestataires vérifiés sur Teranga Service</p>
    </div>
</div>

<!-- Formulaire d'inscription prestataire -->
<div style="padding: 60px 20px;">
    <div style="max-width: 600px; margin: 0 auto;">
        <div class="card" style="padding: 40px; border-top: 4px solid #3A9E3A;">
            <h2 style="font-size: 24px; font-weight: bold; color: #1B3A6B; text-align: center; margin-bottom: 8px;">Créez votre compte prestataire</h2>
            <p style="text-align: center; color: #6B7280; margin-bottom: 24px;">Inscrivez-vous pour proposer vos services</p>

            <form>
                <!-- Informations personnelles -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Prénom</label>
                        <input type="text" placeholder="Votre prénom" style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Nom</label>
                        <input type="text" placeholder="Votre nom" style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                    </div>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Email</label>
                    <input type="email" placeholder="vous@exemple.com" style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Téléphone</label>
                    <input type="tel" placeholder="77 000 00 00" style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Ville</label>
                    <select style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                        <option>Dakar</option>
                        <option>Thiès</option>
                        <option>Saint-Louis</option>
                        <option>Autre</option>
                    </select>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Catégorie de service</label>
                    <select style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                        <option>Électricité</option>
                        <option>Plomberie</option>
                        <option>Ménage</option>
                        <option>Cuisine à domicile</option>
                        <option>Jardinage</option>
                        <option>Garde d'enfants</option>
                    </select>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Mot de passe</label>
                    <input type="password" placeholder="••••••••" style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                </div>

                <div style="margin-bottom: 24px;">
                    <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">Confirmer le mot de passe</label>
                    <input type="password" placeholder="••••••••" style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                </div>

                <button type="submit" style="width: 100%; background: #3A9E3A; color: white; padding: 14px; border: none; border-radius: 8px; font-weight: 600; font-size: 16px; cursor: pointer;">✅ Créer mon compte prestataire</button>

                <p style="text-align: center; color: #6B7280; font-size: 14px; margin-top: 16px;">
                    Déjà un compte ? <a href="/login" style="color: #3A9E3A; text-decoration: none;">Connectez-vous</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection