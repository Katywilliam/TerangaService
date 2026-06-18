@extends('layouts.app')

@section('title', 'Politique de confidentialité - Teranga Service')

@section('content')
<!-- Hero -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 40px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 32px; font-weight: bold; margin-bottom: 8px;">🔒 Politique de confidentialité</h1>
        <p style="font-size: 16px; color: #D1D5DB;">Teranga Service - Protection de vos données personnelles</p>
    </div>
</div>

<div style="padding: 40px 20px; max-width: 900px; margin: 0 auto;">
    <div data-aos="fade-up" class="card" style="padding: 40px;">
        
        <!-- 1. Introduction -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">1. Introduction</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Teranga Service accorde une grande importance à la protection de vos données personnelles. 
            Cette politique de confidentialité explique comment nous collectons, utilisons, partageons et protégeons 
            vos informations lorsque vous utilisez notre plateforme.
        </p>

        <!-- 2. Données collectées -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">2. Données collectées</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            Nous collectons les informations suivantes :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ <strong>Identité :</strong> Nom, prénom, photo de profil</li>
            <li>✅ <strong>Coordonnées :</strong> Email, numéro de téléphone, adresse</li>
            <li>✅ <strong>Données de localisation :</strong> Ville, quartier (pour la recherche de prestataires)</li>
            <li>✅ <strong>Historique d'utilisation :</strong> Réservations, avis, messages</li>
            <li>✅ <strong>Données de paiement :</strong> (via Wave, Orange Money, Carte bancaire) - nous ne stockons pas vos données bancaires</li>
        </ul>

        <!-- 3. Utilisation des données -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">3. Utilisation des données</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            Vos données sont utilisées pour :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ Créer et gérer votre compte utilisateur</li>
            <li>✅ Faciliter la mise en relation avec les prestataires</li>
            <li>✅ Traiter vos réservations et paiements</li>
            <li>✅ Vous envoyer des notifications et confirmations</li>
            <li>✅ Améliorer notre plateforme et nos services</li>
            <li>✅ Assurer la sécurité et prévenir la fraude</li>
        </ul>

        <!-- 4. Partage des données -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">4. Partage des données</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Nous partageons vos données uniquement dans les cas suivants :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ <strong>Avec les prestataires :</strong> Nous partageons vos coordonnées et adresse pour la réalisation de la prestation</li>
            <li>✅ <strong>Avec les services de paiement :</strong> Wave, Orange Money, CinetPay pour le traitement des transactions</li>
            <li>✅ <strong>Obligation légale :</strong> Si la loi nous y contraint</li>
            <li>❌ <strong>Jamais avec des tiers :</strong> Nous ne vendons ni ne louons vos données</li>
        </ul>

        <!-- 5. Sécurité des données -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">5. Sécurité des données</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles pour protéger vos données :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ Chiffrement des données sensibles</li>
            <li>✅ Accès limité aux données (seuls les administrateurs autorisés)</li>
            <li>✅ Authentification sécurisée (mots de passe hachés)</li>
            <li>✅ Sauvegardes régulières</li>
        </ul>

        <!-- 6. Vos droits -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">6. Vos droits</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            Conformément à la réglementation, vous disposez des droits suivants :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ <strong>Droit d'accès :</strong> Consulter vos données</li>
            <li>✅ <strong>Droit de rectification :</strong> Modifier vos données inexactes</li>
            <li>✅ <strong>Droit à l'effacement :</strong> Supprimer votre compte et vos données</li>
            <li>✅ <strong>Droit d'opposition :</strong> Refuser l'utilisation de vos données</li>
            <li>✅ <strong>Droit à la portabilité :</strong> Récupérer vos données</li>
        </ul>

        <!-- 7. Contact -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">7. Contact</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Pour toute question relative à cette politique de confidentialité :<br><br>
            📧 <strong>Email :</strong> ida@unchk.edu.sn<br>
            📱 <strong>Téléphone :</strong> +221 78 000 00 00
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