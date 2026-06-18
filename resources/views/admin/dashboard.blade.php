@extends('layouts.app')

@section('title', 'Dashboard Admin - Teranga Service')

@section('content')
<div style="padding: 40px 20px; max-width: 1200px; margin: 0 auto;">
    
    <!-- En-tête -->
    <div data-aos="fade-down">
        <h1 style="font-size: 28px; font-weight: bold; color: #1B3A6B; margin-bottom: 4px;">👋 Administration</h1>
        <p style="color: #6B7280; margin-bottom: 30px;">Gérez votre plateforme Teranga Service</p>
    </div>

    <!-- Statistiques globales -->
    <div data-aos="fade-up" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px; margin-bottom: 30px;">
        <div class="card" style="text-align: center; padding: 20px;">
            <div style="font-size: 28px;">👥</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #1B3A6B;">156</h3>
            <p style="color: #6B7280; font-size: 13px;">Utilisateurs</p>
        </div>
        <div class="card" style="text-align: center; padding: 20px;">
            <div style="font-size: 28px;">✅</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #3A9E3A;">42</h3>
            <p style="color: #6B7280; font-size: 13px;">Prestataires actifs</p>
        </div>
        <div class="card" style="text-align: center; padding: 20px; background: #FEF3C7;">
            <div style="font-size: 28px;">⏳</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #F59E0B;">8</h3>
            <p style="color: #6B7280; font-size: 13px;">En attente de validation</p>
        </div>
        <div class="card" style="text-align: center; padding: 20px;">
            <div style="font-size: 28px;">📋</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #1B3A6B;">234</h3>
            <p style="color: #6B7280; font-size: 13px;">Prestations totales</p>
        </div>
        <div class="card" style="text-align: center; padding: 20px;">
            <div style="font-size: 28px;">💰</div>
            <h3 style="font-size: 24px; font-weight: bold; color: #3A9E3A;">1 250 000</h3>
            <p style="color: #6B7280; font-size: 13px;">Chiffre d'affaires</p>
        </div>
    </div>

    <!-- Gestion des prestataires (en attente) -->
    <div data-aos="fade-up" class="card" style="padding: 24px; margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
            <h2 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">📋 Prestataires en attente de validation</h2>
            <span style="background: #F59E0B; color: white; padding: 2px 10px; border-radius: 20px; font-size: 12px;">8 nouveaux</span>
        </div>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: #F3F4F6; text-align: left;">
                        <th style="padding: 10px 12px; font-size: 13px; color: #374151;">Nom</th>
                        <th style="padding: 10px 12px; font-size: 13px; color: #374151;">Service</th>
                        <th style="padding: 10px 12px; font-size: 13px; color: #374151;">Date d'inscription</th>
                        <th style="padding: 10px 12px; font-size: 13px; color: #374151;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #E5E7EB;">
                        <td style="padding: 10px 12px; font-size: 14px;">Oumar Diop</td>
                        <td style="padding: 10px 12px; font-size: 14px;">🌿 Jardinage</td>
                        <td style="padding: 10px 12px; font-size: 14px; color: #6B7280;">12/06/2026</td>
                        <td style="padding: 10px 12px;">
                            <button style="background: #3A9E3A; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px; margin-right: 4px;">✅ Valider</button>
                            <button style="background: #EF4444; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px;">❌ Rejeter</button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #E5E7EB;">
                        <td style="padding: 10px 12px; font-size: 14px;">Fatou Gueye</td>
                        <td style="padding: 10px 12px; font-size: 14px;">🍳 Cuisine</td>
                        <td style="padding: 10px 12px; font-size: 14px; color: #6B7280;">11/06/2026</td>
                        <td style="padding: 10px 12px;">
                            <button style="background: #3A9E3A; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px; margin-right: 4px;">✅ Valider</button>
                            <button style="background: #EF4444; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px;">❌ Rejeter</button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #E5E7EB;">
                        <td style="padding: 10px 12px; font-size: 14px;">Moussa Ndiaye</td>
                        <td style="padding: 10px 12px; font-size: 14px;">⚡ Électricité</td>
                        <td style="padding: 10px 12px; font-size: 14px; color: #6B7280;">10/06/2026</td>
                        <td style="padding: 10px 12px;">
                            <button style="background: #3A9E3A; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px; margin-right: 4px;">✅ Valider</button>
                            <button style="background: #EF4444; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px;">❌ Rejeter</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 12px; font-size: 14px;">Aïssa Diallo</td>
                        <td style="padding: 10px 12px; font-size: 14px;">🧹 Ménage</td>
                        <td style="padding: 10px 12px; font-size: 14px; color: #6B7280;">09/06/2026</td>
                        <td style="padding: 10px 12px;">
                            <button style="background: #3A9E3A; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px; margin-right: 4px;">✅ Valider</button>
                            <button style="background: #EF4444; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px;">❌ Rejeter</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Dernières transactions -->
    <div data-aos="fade-up" style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
        <!-- Colonne gauche : Transactions -->
        <div class="card" style="padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                <h2 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">💰 Dernières transactions</h2>
                <a href="#" style="color: #3A9E3A; text-decoration: none; font-size: 13px;">Voir tout →</a>
            </div>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: #F3F4F6; text-align: left;">
                            <th style="padding: 8px 10px; font-size: 12px; color: #374151;">Client</th>
                            <th style="padding: 8px 10px; font-size: 12px; color: #374151;">Prestataire</th>
                            <th style="padding: 8px 10px; font-size: 12px; color: #374151;">Montant</th>
                            <th style="padding: 8px 10px; font-size: 12px; color: #374151;">Commission</th>
                            <th style="padding: 8px 10px; font-size: 12px; color: #374151;">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #E5E7EB;">
                            <td style="padding: 8px 10px; font-size: 13px;">Fatou N.</td>
                            <td style="padding: 8px 10px; font-size: 13px;">Modou Fall</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #3A9E3A; font-weight: bold;">5 000 FCFA</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #6B7280;">400 FCFA</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #6B7280;">15/06/2026</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #E5E7EB;">
                            <td style="padding: 8px 10px; font-size: 13px;">Mamadou D.</td>
                            <td style="padding: 8px 10px; font-size: 13px;">Aïssa Diallo</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #3A9E3A; font-weight: bold;">5 500 FCFA</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #6B7280;">440 FCFA</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #6B7280;">14/06/2026</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px 10px; font-size: 13px;">Aïcha S.</td>
                            <td style="padding: 8px 10px; font-size: 13px;">Fatou Diop</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #3A9E3A; font-weight: bold;">3 500 FCFA</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #6B7280;">280 FCFA</td>
                            <td style="padding: 8px 10px; font-size: 13px; color: #6B7280;">13/06/2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Colonne droite : Actions rapides -->
        <div>
            <!-- Litiges -->
            <div data-aos="fade-up" class="card" style="padding: 20px; margin-bottom: 16px;">
                <h2 style="font-size: 18px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">⚖️ Litiges en cours</h2>
                <div style="background: #FEF2F2; padding: 12px; border-radius: 8px; margin-bottom: 8px;">
                    <p style="font-weight: bold; font-size: 14px; color: #1B3A6B;">#TS-2026-012</p>
                    <p style="font-size: 13px; color: #6B7280;">Client: Mamadou D. | Prestataire: Oumar K.</p>
                    <span style="background: #EF4444; color: white; padding: 2px 8px; border-radius: 20px; font-size: 11px;">En attente</span>
                </div>
                <div style="background: #FEF2F2; padding: 12px; border-radius: 8px;">
                    <p style="font-weight: bold; font-size: 14px; color: #1B3A6B;">#TS-2026-008</p>
                    <p style="font-size: 13px; color: #6B7280;">Client: Fatou N. | Prestataire: Aïssa D.</p>
                    <span style="background: #F59E0B; color: white; padding: 2px 8px; border-radius: 20px; font-size: 11px;">En cours</span>
                </div>
                <a href="#" style="display: block; margin-top: 12px; text-align: center; color: #3A9E3A; text-decoration: none; font-size: 13px;">Gérer les litiges →</a>
            </div>

            <!-- Actions admin -->
            <div data-aos="fade-up" class="card" style="padding: 20px;">
                <h2 style="font-size: 18px; font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">⚙️ Actions rapides</h2>
                <a href="#" style="display: block; background: #1B3A6B; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center; margin-bottom: 8px;">📊 Exporter les rapports</a>
                <a href="#" style="display: block; background: #3A9E3A; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center; margin-bottom: 8px;">📧 Envoyer une notification</a>
                <a href="#" style="display: block; background: #F59E0B; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">🏷️ Gérer les catégories</a>
            </div>
        </div>
    </div>
</div>
@endsection