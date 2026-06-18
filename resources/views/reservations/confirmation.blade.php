@extends('layouts.app')

@section('title', 'Confirmation - Teranga Service')

@section('content')
<div style="padding: 60px 20px; max-width: 600px; margin: 0 auto;">
    <div class="card" style="padding: 40px; text-align: center;">
        <div style="font-size: 80px; margin-bottom: 16px;">✅</div>
        <h1 style="font-size: 28px; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Réservation confirmée !</h1>
        <p style="color: #6B7280; margin-bottom: 24px;">Votre prestation a été réservée avec succès</p>

        <div style="background: #F3F4F6; padding: 20px; border-radius: 8px; text-align: left; margin-bottom: 24px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #6B7280;">Numéro de réservation</span>
                <span style="font-weight: bold;">#TS-2026-001</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #6B7280;">Service</span>
                <span>Plomberie - Réparation de fuites</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #6B7280;">Prestataire</span>
                <span>Modou Fall</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #6B7280;">Date et heure</span>
                <span>15/06/2026 à 10h</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #6B7280;">Adresse</span>
                <span>Dakar - Mermoz</span>
            </div>
            <div style="display: flex; justify-content: space-between; border-top: 2px solid #D1D5DB; padding-top: 12px; margin-top: 8px;">
                <span style="font-weight: bold;">Montant payé</span>
                <span style="font-weight: bold; color: #3A9E3A;">5 000 FCFA</span>
            </div>
        </div>

        <p style="color: #6B7280; margin-bottom: 24px;">
            📧 Un email de confirmation vous a été envoyé.<br>
            📱 Vous recevrez une notification sur votre téléphone.
        </p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
            <a href="/dashboard/client" style="background: #1B3A6B; color: white; padding: 12px; border-radius: 8px; text-decoration: none;">Voir mes réservations</a>
            <a href="/prestataires" style="background: #3A9E3A; color: white; padding: 12px; border-radius: 8px; text-decoration: none;">Nouvelle réservation</a>
        </div>

        <p style="margin-top: 16px; color: #6B7280; font-size: 14px;">
            🔒 Paiement sécurisé via Orange Money
        </p>
    </div>
</div>
@endsection