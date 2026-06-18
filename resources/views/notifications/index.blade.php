@extends('layouts.app')

@section('title', 'Mes notifications - Teranga Service')

@section('content')
<div style="padding: 60px 20px; max-width: 800px; margin: 0 auto;">
    <h1 style="font-size: 28px; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">🔔 Mes notifications</h1>
    <p style="color: #6B7280; margin-bottom: 30px;">Retrouvez toutes vos notifications ici</p>

    <div class="card" style="padding: 0; overflow: hidden;">
        <!-- En-tête -->
        <div style="background: #F3F4F6; padding: 12px 20px; border-bottom: 1px solid #E5E7EB; display: flex; justify-content: space-between;">
            <span style="font-weight: bold; color: #1B3A6B;">Toutes les notifications</span>
            <button onclick="document.querySelectorAll('.notif-item').forEach(el => { el.style.background = 'white'; el.style.borderLeft = 'none'; })" style="background: #3A9E3A; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px;">Tout marquer comme lu</button>
        </div>

        <!-- Liste des notifications -->
        <div class="notif-item" style="padding: 14px 20px; border-bottom: 1px solid #F3F4F6; background: #F0FDF4; border-left: 4px solid #3A9E3A; cursor: pointer;" onclick="window.location.href='/reservations/confirmation'">
            <p style="font-weight: bold; margin: 0; font-size: 14px;">✅ Réservation confirmée</p>
            <p style="margin: 4px 0; font-size: 13px; color: #6B7280;">Votre réservation avec Modou Fall est confirmée pour le 20/06/2026</p>
            <p style="margin: 0; font-size: 12px; color: #9CA3AF;">Il y a 5 min</p>
        </div>

        <div class="notif-item" style="padding: 14px 20px; border-bottom: 1px solid #F3F4F6; background: #F0FDF4; border-left: 4px solid #3A9E3A; cursor: pointer;" onclick="window.location.href='/messages/2'">
            <p style="font-weight: bold; margin: 0; font-size: 14px;">💬 Nouveau message</p>
            <p style="margin: 4px 0; font-size: 13px; color: #6B7280;">Aïssa Diallo vous a envoyé un message concernant votre réservation</p>
            <p style="margin: 0; font-size: 12px; color: #9CA3AF;">Il y a 2h</p>
        </div>

        <div class="notif-item" style="padding: 14px 20px; border-bottom: 1px solid #F3F4F6; cursor: pointer; background: white;" onclick="window.location.href='/prestataires/1#avis'">
            <p style="font-weight: bold; margin: 0; font-size: 14px;">⭐ Nouvel avis</p>
            <p style="margin: 4px 0; font-size: 13px; color: #6B7280;">Fatou N. a laissé un avis sur votre prestation (5 étoiles)</p>
            <p style="margin: 0; font-size: 12px; color: #9CA3AF;">Il y a 1 jour</p>
        </div>

        <div class="notif-item" style="padding: 14px 20px; cursor: pointer; background: white;" onclick="window.location.href='/dashboard/prestataire'">
            <p style="font-weight: bold; margin: 0; font-size: 14px;">💰 Paiement reçu</p>
            <p style="margin: 4px 0; font-size: 13px; color: #6B7280;">Vous avez reçu 5 000 FCFA pour la prestation du 15/06/2026</p>
            <p style="margin: 0; font-size: 12px; color: #9CA3AF;">Il y a 2 jours</p>
        </div>

        <div class="notif-item" style="padding: 14px 20px; cursor: pointer; background: white;" onclick="window.location.href='/reservations/5'">
            <p style="font-weight: bold; margin: 0; font-size: 14px;">📅 Rappel de réservation</p>
            <p style="margin: 4px 0; font-size: 13px; color: #6B7280;">Vous avez une réservation demain à 14h avec Oumar Kane</p>
            <p style="margin: 0; font-size: 12px; color: #9CA3AF;">Il y a 3h</p>
        </div>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <a href="/" style="color: #3A9E3A; text-decoration: none;">← Retour à l'accueil</a>
    </div>
</div>
@endsection