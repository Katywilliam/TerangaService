@extends('layouts.app')

@section('title', 'Dashboard Prestataire - Teranga Service')

@section('content')
<div style="padding: 40px 20px; max-width: 1200px; margin: 0 auto;">
    <h1 style="font-size: 28px; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">👋 Bonjour Modou</h1>
    <p style="color: #6B7280; margin-bottom: 32px;">Bienvenue sur votre tableau de bord</p>

    <!-- Statistiques -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 32px;">
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">📋</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #1B3A6B;">25</h3>
            <p style="color: #6B7280;">Prestations totales</p>
        </div>
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">⏳</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #F59E0B;">3</h3>
            <p style="color: #6B7280;">En attente</p>
        </div>
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">⭐</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #3A9E3A;">4.8</h3>
            <p style="color: #6B7280;">Note moyenne</p>
        </div>
        <div class="card" style="text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">💰</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #1B3A6B;">120 000</h3>
            <p style="color: #6B7280;">Gains totaux</p>
        </div>
    </div>

    <!-- Demandes en attente -->
    <div class="card" style="margin-bottom: 32px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Demandes en attente</h2>
            <span style="background: #EF4444; color: white; padding: 2px 10px; border-radius: 20px; font-size: 14px;">3 nouvelles</span>
        </div>
        <div>
            <div style="border-bottom: 1px solid #E5E7EB; padding: 16px 0;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    <div>
                        <p style="font-weight: bold;">Fatou N. - Ménage</p>
                        <p style="color: #6B7280; font-size: 14px;">📍 Dakar - Mermoz | 15/06/2026 à 10h</p>
                    </div>
                    <div style="display: flex; gap: 8px;">
                        <button style="background: #3A9E3A; color: white; padding: 6px 16px; border: none; border-radius: 8px; cursor: pointer;">Accepter</button>
                        <button style="background: #EF4444; color: white; padding: 6px 16px; border: none; border-radius: 8px; cursor: pointer;">Refuser</button>
                    </div>
                </div>
            </div>
            <div style="border-bottom: 1px solid #E5E7EB; padding: 16px 0;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    <div>
                        <p style="font-weight: bold;">Mamadou D. - Plomberie</p>
                        <p style="color: #6B7280; font-size: 14px;">📍 Dakar - Plateau | 16/06/2026 à 14h</p>
                    </div>
                    <div style="display: flex; gap: 8px;">
                        <button style="background: #3A9E3A; color: white; padding: 6px 16px; border: none; border-radius: 8px; cursor: pointer;">Accepter</button>
                        <button style="background: #EF4444; color: white; padding: 6px 16px; border: none; border-radius: 8px; cursor: pointer;">Refuser</button>
                    </div>
                </div>
            </div>
            <div style="padding: 16px 0;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    <div>
                        <p style="font-weight: bold;">Aïcha S. - Électricité</p>
                        <p style="color: #6B7280; font-size: 14px;">📍 Dakar - Ouakam | 17/06/2026 à 09h</p>
                    </div>
                    <div style="display: flex; gap: 8px;">
                        <button style="background: #3A9E3A; color: white; padding: 6px 16px; border: none; border-radius: 8px; cursor: pointer;">Accepter</button>
                        <button style="background: #EF4444; color: white; padding: 6px 16px; border: none; border-radius: 8px; cursor: pointer;">Refuser</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gestion des services -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
        <div class="card">
            <h2 style="font-size: 20px; font-weight: bold; color: #1B3A6B; margin-bottom: 16px;">Mes services</h2>
            <div style="background: #F3F4F6; padding: 12px; border-radius: 8px; margin-bottom: 8px; display: flex; justify-content: space-between;">
                <span>🔧 Réparation de fuites</span>
                <span style="color: #3A9E3A; font-weight: bold;">5 000 FCFA</span>
            </div>
            <div style="background: #F3F4F6; padding: 12px; border-radius: 8px; margin-bottom: 8px; display: flex; justify-content: space-between;">
                <span>🚰 Installation sanitaire</span>
                <span style="color: #3A9E3A; font-weight: bold;">8 000 FCFA</span>
            </div>
            <div style="background: #F3F4F6; padding: 12px; border-radius: 8px; display: flex; justify-content: space-between;">
                <span>🌀 Débouchage</span>
                <span style="color: #3A9E3A; font-weight: bold;">3 500 FCFA</span>
            </div>
            <a href="#" style="display: block; margin-top: 16px; background: #1B3A6B; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Gérer mes services</a>
        </div>

        <div class="card">
            <h2 style="font-size: 20px; font-weight: bold; color: #1B3A6B; margin-bottom: 16px;">Disponibilités</h2>
            <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 4px; margin-bottom: 16px;">
                <div style="background: #3A9E3A; color: white; padding: 8px; text-align: center; border-radius: 4px; font-size: 12px;">L</div>
                <div style="background: #3A9E3A; color: white; padding: 8px; text-align: center; border-radius: 4px; font-size: 12px;">M</div>
                <div style="background: #3A9E3A; color: white; padding: 8px; text-align: center; border-radius: 4px; font-size: 12px;">M</div>
                <div style="background: #3A9E3A; color: white; padding: 8px; text-align: center; border-radius: 4px; font-size: 12px;">J</div>
                <div style="background: #3A9E3A; color: white; padding: 8px; text-align: center; border-radius: 4px; font-size: 12px;">V</div>
                <div style="background: #F59E0B; color: white; padding: 8px; text-align: center; border-radius: 4px; font-size: 12px;">S</div>
                <div style="background: #F59E0B; color: white; padding: 8px; text-align: center; border-radius: 4px; font-size: 12px;">D</div>
            </div>
            <a href="#" style="display: block; background: #1B3A6B; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Gérer mes disponibilités</a>
        </div>
    </div>
</div>
@endsection