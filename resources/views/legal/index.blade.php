@extends('layouts.app')

@section('title', 'Mentions légales - Teranga Service')

@section('content')
<!-- Hero -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 40px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 32px; font-weight: bold; margin-bottom: 8px; color: #D1D5DB;">📜 Mentions légales</h1>
        <p style="font-size: 16px; color: #D1D5DB;">Teranga Service - Votre maison, nos solutions</p>
    </div>
</div>

<div style="padding: 40px 20px; max-width: 900px; margin: 0 auto;">
    <div data-aos="fade-up" class="card" style="padding: 40px;">
        
        <!-- 1. Éditeur du site -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">1. Éditeur du site</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            <strong>Nom :</strong> Teranga Service<br>
            <strong>Statut :</strong> Projet académique - Université Numérique Cheikh Hamidou Kane (UNCHK)<br>
            <strong>Formation :</strong> Licence 3 — Informatique Développement d'Applications<br>
            <strong>Année :</strong> 2025 – 2026<br>
            <strong>Chef de projet :</strong> Abdoulaye Barry<br>
            <strong>Équipe :</strong> Coumba Séye, Oumar Baldé, Marie Louise C. William, Thierno O. Iba Sall, Alioune Tounkara, Kenda Bailo Ba, Bassirou Ndiaye, Mariama Ba<br>
            <strong>Email :</strong> ida@unchk.edu.sn<br>
            <strong>Adresse :</strong> Université Numérique Cheikh Hamidou Kane, Dakar, Sénégal
        </p>

        <!-- 2. Hébergement -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">2. Hébergement</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Le site Teranga Service est hébergé sur :<br>
            <strong>Hébergeur :</strong> À définir (phase de développement)<br>
            <strong>Adresse :</strong> À définir<br>
            <strong>Téléphone :</strong> À définir
        </p>

        <!-- 3. Propriété intellectuelle -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">3. Propriété intellectuelle</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            L'ensemble des contenus présents sur le site Teranga Service (textes, images, logos, icônes, vidéos, etc.) est la propriété exclusive de l'équipe Teranga Service et de l'Université Numérique Cheikh Hamidou Kane.<br><br>
            Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l'équipe Teranga Service.
        </p>

        <!-- 4. Protection des données personnelles -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">4. Protection des données personnelles</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Conformément à la réglementation sénégalaise sur la protection des données personnelles, Teranga Service s'engage à :<br><br>
            ✅ Collecter uniquement les données nécessaires au fonctionnement de la plateforme<br>
            ✅ Ne pas partager vos données personnelles avec des tiers sans votre consentement<br>
            ✅ Sécuriser vos données par des mesures techniques et organisationnelles appropriées<br>
            ✅ Vous permettre d'accéder, de modifier ou de supprimer vos données à tout moment<br><br>
            <strong>Données collectées :</strong> Nom, prénom, email, téléphone, adresse, historique de réservations, avis.<br>
            <strong>Finalité :</strong> Mise en relation avec des prestataires, gestion des réservations, amélioration du service.
        </p>

        <!-- 5. Cookies -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">5. Cookies</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Le site Teranga Service utilise des cookies pour :<br>
            🍪 Assurer le bon fonctionnement de la plateforme (session utilisateur)<br>
            🍪 Mémoriser vos préférences (langue, filtres de recherche)<br>
            🍪 Analyser l'audience du site (amélioration continue)<br><br>
            Vous pouvez à tout moment désactiver les cookies via les paramètres de votre navigateur.
        </p>

        <!-- 6. Responsabilité -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">6. Responsabilité</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Teranga Service s'efforce de fournir des informations exactes et à jour. Cependant, nous ne pouvons garantir l'exhaustivité et l'absence d'erreur des informations diffusées.<br><br>
            La plateforme agit comme un intermédiaire entre les clients et les prestataires. Teranga Service n'est pas responsable de la qualité des prestations fournies par les prestataires, mais s'engage à vérifier leur identité et à modérer les avis.
        </p>

        <!-- 7. Contact -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">7. Contact</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Pour toute question relative aux mentions légales, à la protection des données ou à l'utilisation du site, vous pouvez nous contacter :<br><br>
            📧 <strong>Email :</strong> ida@unchk.edu.sn<br>
            📱 <strong>Téléphone :</strong> +221 78 000 00 00<br>
            📍 <strong>Adresse :</strong> Université Numérique Cheikh Hamidou Kane, Dakar, Sénégal
        </p>

        <!-- Date de mise à jour -->
        <div style="background: #F3F4F6; padding: 16px; border-radius: 8px; margin-top: 20px; text-align: center;">
            <p style="color: #6B7280; font-size: 14px;">
                📅 Dernière mise à jour : <strong>18 juin 2026</strong>
            </p>
        </div>
    </div>
</div>
@endsection