@extends('layouts.app')

@section('title', 'Réserver un service - Teranga Service')

@section('content')
<div style="padding: 60px 20px; max-width: 800px; margin: 0 auto;">
    <div class="card" style="padding: 40px;">
        <h1 style="font-size: 28px; font-weight: bold; color: #1B3A6B; text-align: center; margin-bottom: 8px;">📝 Réserver un service</h1>
        <p style="text-align: center; color: #6B7280; margin-bottom: 32px;">Remplissez les informations ci-dessous</p>

        <form>
            <!-- Étape 1 : Service -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Étape 1 : Choisissez le service</label>
                <select style="width: 100%; padding: 12px; border: 2px solid #D1D5DB; border-radius: 8px;">
                    <option>Plomberie - Réparation de fuites (5 000 FCFA)</option>
                    <option>Ménage - Nettoyage complet (3 500 FCFA/heure)</option>
                    <option>Électricité - Dépannage (5 500 FCFA)</option>
                </select>
            </div>

            <!-- Étape 2 : Date et heure -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Étape 2 : Choisissez la date et l'heure</label>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div>
                        <label style="display: block; color: #374151; font-size: 14px; margin-bottom: 4px;">Date</label>
                        <input type="date" style="width: 100%; padding: 10px; border: 2px solid #D1D5DB; border-radius: 8px;">
                    </div>
                    <div>
                        <label style="display: block; color: #374151; font-size: 14px; margin-bottom: 4px;">Heure</label>
                        <select style="width: 100%; padding: 10px; border: 2px solid #D1D5DB; border-radius: 8px;">
                            <option>09:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Étape 3 : Adresse -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Étape 3 : Où intervenir ?</label>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div>
                        <label style="display: block; color: #374151; font-size: 14px; margin-bottom: 4px;">Ville</label>
                        <select style="width: 100%; padding: 10px; border: 2px solid #D1D5DB; border-radius: 8px;">
                            <option>Dakar</option>
                            <option>Thiès</option>
                            <option>Saint-Louis</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; color: #374151; font-size: 14px; margin-bottom: 4px;">Quartier</label>
                        <input type="text" placeholder="Ex: Mermoz" style="width: 100%; padding: 10px; border: 2px solid #D1D5DB; border-radius: 8px;">
                    </div>
                </div>
                <div style="margin-top: 8px;">
                    <label style="display: block; color: #374151; font-size: 14px; margin-bottom: 4px;">Adresse complète</label>
                    <input type="text" placeholder="Numéro, rue, étage..." style="width: 100%; padding: 10px; border: 2px solid #D1D5DB; border-radius: 8px;">
                </div>
            </div>

            <!-- Étape 4 : Paiement -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Étape 4 : Mode de paiement</label>
                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px;">
                    <div style="border: 2px solid #D1D5DB; border-radius: 8px; padding: 12px; text-align: center; cursor: pointer; background: #F3F4F6;">
                        <div style="font-size: 24px;">📱</div>
                        <span>Wave</span>
                    </div>
                    <div style="border: 2px solid #3A9E3A; border-radius: 8px; padding: 12px; text-align: center; cursor: pointer; background: #F0FDF4;">
                        <div style="font-size: 24px;">📱</div>
                        <span style="color: #3A9E3A; font-weight: bold;">Orange Money</span>
                    </div>
                    <div style="border: 2px solid #D1D5DB; border-radius: 8px; padding: 12px; text-align: center; cursor: pointer;">
                        <div style="font-size: 24px;">💳</div>
                        <span>Carte bancaire</span>
                    </div>
                </div>
            </div>

            <!-- Récapitulatif -->
            <div style="background: #F3F4F6; padding: 20px; border-radius: 8px; margin-bottom: 24px;">
                <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 12px;">Récapitulatif</h3>
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span>Service</span>
                    <span>Plomberie - Réparation de fuites</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span>Date</span>
                    <span>15/06/2026 à 10h</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span>Adresse</span>
                    <span>Dakar - Mermoz</span>
                </div>
                <div style="display: flex; justify-content: space-between; font-weight: bold; font-size: 18px; border-top: 2px solid #D1D5DB; padding-top: 12px; margin-top: 8px;">
                    <span>Total</span>
                    <span style="color: #3A9E3A;">5 000 FCFA</span>
                </div>
                <p style="color: #6B7280; font-size: 12px; margin-top: 8px;">🔒 Paiement sécurisé. Commission de 8% incluse.</p>
            </div>

            <button type="submit" style="width: 100%; background: #3A9E3A; color: white; padding: 14px; border: none; border-radius: 8px; font-size: 18px; font-weight: bold; cursor: pointer; transition: 0.2s;">
                ✅ Confirmer et payer
            </button>

            <p style="text-align: center; color: #6B7280; font-size: 14px; margin-top: 12px;">
                En cliquant sur confirmer, vous acceptez nos <a href="#" style="color: #3A9E3A;">conditions générales</a>
            </p>
        </form>
    </div>
</div>
@endsection