@extends('layouts.app')

@section('title', 'Conditions générales - Teranga Service')

@section('content')
<!-- Hero -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 40px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 32px; font-weight: bold; margin-bottom: 8px;">📋 Conditions générales</h1>
        <p style="font-size: 16px; color: #D1D5DB;">Teranga Service - Conditions d'utilisation de la plateforme</p>
    </div>
</div>

<div style="padding: 40px 20px; max-width: 900px; margin: 0 auto;">
    <div data-aos="fade-up" class="card" style="padding: 40px;">
        
        <!-- 1. Objet -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">1. Objet</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Les présentes conditions générales régissent l'utilisation de la plateforme Teranga Service, 
            une marketplace de mise en relation entre clients et prestataires de services à domicile au Sénégal.
        </p>

        <!-- 2. Acceptation des conditions -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">2. Acceptation des conditions</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            En utilisant Teranga Service, vous acceptez pleinement et sans réserve les présentes conditions générales. 
            Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser la plateforme.
        </p>

        <!-- 3. Inscription et compte -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">3. Inscription et compte</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            Pour utiliser la plateforme, vous devez créer un compte en fournissant des informations exactes et à jour.
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ Vous êtes responsable de la confidentialité de votre mot de passe</li>
            <li>✅ Vous devez nous informer de toute utilisation non autorisée de votre compte</li>
            <li>✅ Vous devez avoir au moins 18 ans pour utiliser la plateforme</li>
            <li>✅ Les prestataires doivent fournir une pièce d'identité valide</li>
        </ul>

        <!-- 4. Rôle de la plateforme -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">4. Rôle de la plateforme</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Teranga Service est une plateforme de mise en relation entre clients et prestataires. 
            Nous ne sommes pas responsables de la qualité des prestations fournies, mais nous nous engageons à :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ Vérifier l'identité des prestataires</li>
            <li>✅ Modérer les avis et les contenus</li>
            <li>✅ Assurer la sécurité des paiements (escrow)</li>
            <li>✅ Gérer les litiges entre clients et prestataires</li>
        </ul>

        <!-- 5. Réservations et paiements -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">5. Réservations et paiements</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            <strong>5.1 Processus de réservation</strong>
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 16px; padding-left: 20px;">
            <li>Le client choisit un service et un prestataire</li>
            <li>Le client sélectionne la date et l'heure</li>
            <li>Le client fournit son adresse d'intervention</li>
            <li>Le paiement est effectué en ligne (Wave, Orange Money, Carte)</li>
            <li>La réservation est confirmée après paiement</li>
        </ul>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            <strong>5.2 Commission</strong>
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>💰 Une commission de <strong>8%</strong> est prélevée sur chaque transaction</li>
            <li>Le montant est calculé sur le montant total payé par le client</li>
        </ul>

        <!-- 6. Annulation et remboursement -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">6. Annulation et remboursement</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            <strong>6.1 Annulation par le client</strong>
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 16px; padding-left: 20px;">
            <li>✅ > 24h avant : remboursement intégral</li>
            <li>⚠️ < 24h avant : remboursement à 50%</li>
        </ul>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 12px;">
            <strong>6.2 Annulation par le prestataire</strong>
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ Remboursement intégral au client</li>
            <li>⚠️ 3 annulations = suspension du compte prestataire</li>
        </ul>

        <!-- 7. Litiges -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">7. Litiges</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            En cas de litige entre un client et un prestataire :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>✅ Le client peut déclarer un litige dans les 72h suivant la prestation</li>
            <li>✅ Les fonds sont bloqués en escrow jusqu'à la décision</li>
            <li>✅ L'administrateur arbitre le litige dans les 72h</li>
            <li>✅ La décision de l'administrateur est définitive</li>
        </ul>

        <!-- 8. Responsabilité -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">8. Responsabilité</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Teranga Service agit en tant qu'intermédiaire et ne peut être tenu responsable :
        </p>
        <ul style="color: #4B5563; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
            <li>❌ De la qualité des prestations fournies par les prestataires</li>
            <li>❌ Des dommages causés lors de l'intervention</li>
            <li>❌ Des retards ou annulations de dernière minute</li>
            <li>✅ Nous nous engageons à faciliter la résolution des litiges</li>
        </ul>

        <!-- 9. Modification des conditions -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">9. Modification des conditions</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Teranga Service se réserve le droit de modifier les présentes conditions générales à tout moment. 
            Les modifications seront notifiées par email ou via la plateforme.
        </p>

        <!-- 10. Contact -->
        <h2 style="font-size: 22px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px; border-bottom: 2px solid #3A9E3A; padding-bottom: 8px;">10. Contact</h2>
        <p style="color: #4B5563; line-height: 1.8; margin-bottom: 20px;">
            Pour toute question relative à ces conditions générales :<br><br>
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