@extends('layouts.app')

@section('title', 'Dashboard Client - Teranga Service')

@section('content')
<div style="padding: 40px 20px; max-width: 1200px; margin: 0 auto;">
    <h1 style="font-size: 28px; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">👋 Bonjour Fatou</h1>
    <p style="color: #6B7280; margin-bottom: 32px;">Bienvenue sur votre tableau de bord</p>

    <!-- Statistiques -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 32px;">
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">📋</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #1B3A6B;">12</h3>
            <p style="color: #6B7280;">Prestations totales</p>
        </div>
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">⏳</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #F59E0B;">2</h3>
            <p style="color: #6B7280;">En cours</p>
        </div>
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">⭐</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #3A9E3A;">4.7</h3>
            <p style="color: #6B7280;">Note moyenne</p>
        </div>
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">💰</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #1B3A6B;">45 000</h3>
            <p style="color: #6B7280;">Total dépensé</p>
        </div>
    </div>

    <!-- Mes réservations -->
    <div class="card" style="margin-bottom: 32px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Mes réservations</h2>
            <a href="#" style="color: #3A9E3A; text-decoration: none;">Voir tout →</a>
        </div>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: #F3F4F6; text-align: left;">
                        <th style="padding: 12px;">Service</th>
                        <th style="padding: 12px;">Prestataire</th>
                        <th style="padding: 12px;">Date</th>
                        <th style="padding: 12px;">Statut</th>
                        <th style="padding: 12px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #E5E7EB;">
                        <td style="padding: 12px;">Plomberie</td>
                        <td style="padding: 12px;">Modou Fall</td>
                        <td style="padding: 12px;">15/06/2026</td>
                        <td style="padding: 12px;"><span style="background: #F59E0B; color: white; padding: 4px 8px; border-radius: 20px; font-size: 12px;">En cours</span></td>
                        <td style="padding: 12px;"><a href="#" style="color: #3A9E3A; text-decoration: none;">Voir détails</a></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #E5E7EB;">
                        <td style="padding: 12px;">Ménage</td>
                        <td style="padding: 12px;">Fatou Diop</td>
                        <td style="padding: 12px;">12/06/2026</td>
                        <td style="padding: 12px;"><span style="background: #3A9E3A; color: white; padding: 4px 8px; border-radius: 20px; font-size: 12px;">Terminé</span></td>
                        <td style="padding: 12px;">
                            <a href="#" style="color: #3A9E3A; text-decoration: none; margin-right: 8px;">Voir détails</a>
                            <a href="#" style="color: #3A9E3A; text-decoration: none;">Laisser avis</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;">Électricité</td>
                        <td style="padding: 12px;">Aïssa Diallo</td>
                        <td style="padding: 12px;">10/06/2026</td>
                        <td style="padding: 12px;"><span style="background: #EF4444; color: white; padding: 4px 8px; border-radius: 20px; font-size: 12px;">Annulé</span></td>
                        <td style="padding: 12px;"><a href="#" style="color: #3A9E3A; text-decoration: none;">Voir détails</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mes avis -->
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Mes avis</h2>
            <a href="#" style="color: #3A9E3A; text-decoration: none;">Voir tous les avis</a>
        </div>
        <div>
            <div style="border-bottom: 1px solid #E5E7EB; padding: 12px 0;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="font-weight: bold;">Modou Fall</span>
                    <span style="color: #FBBF24;">★★★★★</span>
                </div>
                <p style="color: #4B5563;">"Excellent travail ! Très professionnel."</p>
            </div>
            <div style="border-bottom: 1px solid #E5E7EB; padding: 12px 0;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="font-weight: bold;">Fatou Diop</span>
                    <span style="color: #FBBF24;">★★★★☆</span>
                </div>
                <p style="color: #4B5563;">"Bon nettoyage, ponctuelle."</p>
            </div>
            <div style="padding: 12px 0;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="font-weight: bold;">Aïssa Diallo</span>
                    <span style="color: #FBBF24;">★★★★★</span>
                </div>
                <p style="color: #4B5563;">"Très compétente, je recommande."</p>
            </div>
        </div>
    </div>
</div>
@if(Auth::check() && Auth::user()->role === 'admin')
    <div style="background: #FEF3C7; border: 1px solid #F59E0B; border-radius: 8px; padding: 16px; margin-bottom: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
            <div>
                <span style="font-weight: bold; color: #1B3A6B;">👑 Espace Administrateur</span>
                <p style="color: #6B7280; font-size: 14px;">Gérez la plateforme Teranga Service</p>
            </div>
            <a href="/admin" style="background: #1B3A6B; color: white; padding: 8px 20px; border-radius: 6px; text-decoration: none; font-size: 14px;">Accéder à l'admin →</a>
        </div>
    </div>
@endif
@endsection