@extends('layouts.app')

@section('title', 'Prestataires - Teranga Service')

@section('content')
<!-- Hero -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 60px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: bold; margin-bottom: 16px;">Nos prestataires</h1>
        <p style="font-size: 20px; color: #D1D5DB;">Des professionnels vérifiés près de chez vous</p>
    </div>
</div>

<!-- Barre de recherche simplifiée -->
<div data-aos="fade-up" style="padding: 30px 20px; max-width: 1200px; margin: 0 auto;">
    <div style="background: white; border-radius: 12px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div>
                <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">🔍 Rechercher</label>
                <input type="text" placeholder="Plombier, ménage..." style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
            </div>
            <div>
                <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">📂 Catégorie</label>
                <select style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                    <option>Toutes</option>
                    <option>Plomberie</option>
                    <option>Électricité</option>
                    <option>Ménage</option>
                    <option>Jardinage</option>
                    <option>Garde d'enfants</option>
                    <option>Cuisine</option>
                </select>
            </div>
            <div>
                <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">📍 Ville</label>
                <select style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                    <option>Toutes</option>
                    <option>Dakar</option>
                    <option>Thiès</option>
                    <option>Saint-Louis</option>
                </select>
            </div>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div>
                <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">💰 Prix max</label>
                <select style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                    <option>Illimité</option>
                    <option>5 000 FCFA</option>
                    <option>10 000 FCFA</option>
                    <option>15 000 FCFA</option>
                    <option>20 000 FCFA</option>
                    <option>30 000 FCFA</option>
                </select>
            </div>
            <div>
                <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">⭐ Note minimum</label>
                <select style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                    <option>Toutes</option>
                    <option>4.5+</option>
                    <option>4.0+</option>
                    <option>3.5+</option>
                </select>
            </div>
            <div>
                <label style="display: block; color: #374151; font-size: 14px; font-weight: 600; margin-bottom: 4px;">📅 Disponibilité</label>
                <select style="width: 100%; padding: 10px; border: 2px solid #E5E7EB; border-radius: 8px;">
                    <option>Anytime</option>
                    <option>Aujourd'hui</option>
                    <option>Cette semaine</option>
                </select>
            </div>
        </div>
        <div style="display: flex; gap: 12px; margin-top: 16px; justify-content: flex-end; border-top: 1px solid #E5E7EB; padding-top: 16px;">
            <button style="padding: 10px 24px; background: #F3F4F6; border: none; border-radius: 8px; cursor: pointer;">🔄 Réinitialiser</button>
            <button style="padding: 10px 24px; background: #3A9E3A; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: 600;">🔍 Rechercher</button>
        </div>
    </div>
</div>

<!-- Liste des prestataires -->
<div style="padding: 20px 20px 60px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="margin-bottom: 20px;">
            <p style="color: #6B7280;">6 prestataires trouvés</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
            
            <!-- Prestataire 1 - Modou Fall -->
            <div data-aos="fade-up" data-aos-delay="0" class="card">
                <div style="background: linear-gradient(135deg, #1B3A6B, #3A9E3A); padding: 30px; text-align: center; color: white;">
                    <div style="font-size: 48px;">👨‍🔧</div>
                    <h3 style="font-size: 20px; font-weight: bold; margin-top: 8px;">Modou Fall</h3>
                    <p style="opacity: 0.8;">Plombier</p>
                    <!-- ⭐ BADGES AJOUTÉS ICI -->
                    <div style="display: flex; gap: 4px; flex-wrap: wrap; justify-content: center; margin-top: 6px;">
                        <span style="background: #FBBF24; color: #78350F; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">⭐ Top</span>
                        <span style="background: #3B82F6; color: white; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">⚡ Rapide</span>
                        <span style="background: #8B5CF6; color: white; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">🏆 Expert</span>
                    </div>
                    <span style="display: inline-block; background: #3A9E3A; padding: 2px 12px; border-radius: 20px; font-size: 12px; margin-top: 4px;">✅ Vérifié</span>
                </div>
                <div style="padding: 20px;">
                    <p style="color: #6B7280;"><span style="font-weight: bold;">📍</span> Dakar - Mermoz</p>
                    <p style="color: #6B7280;"><span style="font-weight: bold;">⭐</span> 4.8/5 (12 avis)</p>
                    <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: bold; color: #3A9E3A;">5 000 FCFA</span>
                        <span style="color: #6B7280; font-size: 14px;">/heure</span>
                    </div>
                    <a href="/prestataires/1" style="display: block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Voir le profil</a>
                </div>
            </div>

            <!-- Prestataire 2 - Aïssa Diallo -->
            <div data-aos="fade-up" data-aos-delay="100" class="card">
                <div style="background: linear-gradient(135deg, #1B3A6B, #3A9E3A); padding: 30px; text-align: center; color: white;">
                    <div style="font-size: 48px;">👩‍🔧</div>
                    <h3 style="font-size: 20px; font-weight: bold; margin-top: 8px;">Aïssa Diallo</h3>
                    <p style="opacity: 0.8;">Électricienne</p>
                    <!-- ⭐ BADGES AJOUTÉS ICI -->
                    <div style="display: flex; gap: 4px; flex-wrap: wrap; justify-content: center; margin-top: 6px;">
                        <span style="background: #FBBF24; color: #78350F; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">⭐ Top</span>
                        <span style="background: #10B981; color: white; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">💰 Meilleur prix</span>
                    </div>
                    <span style="display: inline-block; background: #3A9E3A; padding: 2px 12px; border-radius: 20px; font-size: 12px; margin-top: 4px;">✅ Vérifié</span>
                </div>
                <div style="padding: 20px;">
                    <p style="color: #6B7280;"><span style="font-weight: bold;">📍</span> Dakar - Plateau</p>
                    <p style="color: #6B7280;"><span style="font-weight: bold;">⭐</span> 4.9/5 (18 avis)</p>
                    <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: bold; color: #3A9E3A;">5 500 FCFA</span>
                        <span style="color: #6B7280; font-size: 14px;">/heure</span>
                    </div>
                    <a href="/prestataires/2" style="display: block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Voir le profil</a>
                </div>
            </div>

            <!-- Prestataire 3 - Oumar Kane -->
            <div data-aos="fade-up" data-aos-delay="200" class="card">
                <div style="background: linear-gradient(135deg, #1B3A6B, #3A9E3A); padding: 30px; text-align: center; color: white;">
                    <div style="font-size: 48px;">👨‍🌾</div>
                    <h3 style="font-size: 20px; font-weight: bold; margin-top: 8px;">Oumar Kane</h3>
                    <p style="opacity: 0.8;">Jardinier</p>
                    <!-- ⭐ BADGES AJOUTÉS ICI -->
                    <div style="display: flex; gap: 4px; flex-wrap: wrap; justify-content: center; margin-top: 6px;">
                        <span style="background: #F59E0B; color: white; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">🔥 Populaire</span>
                    </div>
                    <span style="display: inline-block; background: #3A9E3A; padding: 2px 12px; border-radius: 20px; font-size: 12px; margin-top: 4px;">✅ Vérifié</span>
                </div>
                <div style="padding: 20px;">
                    <p style="color: #6B7280;"><span style="font-weight: bold;">📍</span> Dakar - Ouakam</p>
                    <p style="color: #6B7280;"><span style="font-weight: bold;">⭐</span> 4.7/5 (9 avis)</p>
                    <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: bold; color: #3A9E3A;">4 000 FCFA</span>
                        <span style="color: #6B7280; font-size: 14px;">/heure</span>
                    </div>
                    <a href="/prestataires/3" style="display: block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Voir le profil</a>
                </div>
            </div>

            <!-- Prestataire 4 - Coumba Ndiaye -->
            <div data-aos="fade-up" data-aos-delay="0" class="card">
                <div style="background: linear-gradient(135deg, #1B3A6B, #3A9E3A); padding: 30px; text-align: center; color: white;">
                    <div style="font-size: 48px;">👩‍🍳</div>
                    <h3 style="font-size: 20px; font-weight: bold; margin-top: 8px;">Coumba Ndiaye</h3>
                    <p style="opacity: 0.8;">Cuisinière</p>
                    <div style="display: flex; gap: 4px; flex-wrap: wrap; justify-content: center; margin-top: 6px;">
                        <span style="background: #8B5CF6; color: white; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">🏆 Expert</span>
                    </div>
                    <span style="display: inline-block; background: #3A9E3A; padding: 2px 12px; border-radius: 20px; font-size: 12px; margin-top: 4px;">✅ Vérifié</span>
                </div>
                <div style="padding: 20px;">
                    <p style="color: #6B7280;"><span style="font-weight: bold;">📍</span> Dakar - Yoff</p>
                    <p style="color: #6B7280;"><span style="font-weight: bold;">⭐</span> 4.6/5 (7 avis)</p>
                    <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: bold; color: #3A9E3A;">3 000 FCFA</span>
                        <span style="color: #6B7280; font-size: 14px;">/repas</span>
                    </div>
                    <a href="/prestataires/4" style="display: block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Voir le profil</a>
                </div>
            </div>

            <!-- Prestataire 5 - Ibrahima Seck -->
            <div data-aos="fade-up" data-aos-delay="100" class="card">
                <div style="background: linear-gradient(135deg, #1B3A6B, #3A9E3A); padding: 30px; text-align: center; color: white;">
                    <div style="font-size: 48px;">👨‍🏫</div>
                    <h3 style="font-size: 20px; font-weight: bold; margin-top: 8px;">Ibrahima Seck</h3>
                    <p style="opacity: 0.8;">Garde d'enfants</p>
                    <div style="display: flex; gap: 4px; flex-wrap: wrap; justify-content: center; margin-top: 6px;">
                        <span style="background: #3B82F6; color: white; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">⚡ Rapide</span>
                    </div>
                    <span style="display: inline-block; background: #3A9E3A; padding: 2px 12px; border-radius: 20px; font-size: 12px; margin-top: 4px;">✅ Vérifié</span>
                </div>
                <div style="padding: 20px;">
                    <p style="color: #6B7280;"><span style="font-weight: bold;">📍</span> Dakar - Almadies</p>
                    <p style="color: #6B7280;"><span style="font-weight: bold;">⭐</span> 4.9/5 (15 avis)</p>
                    <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: bold; color: #3A9E3A;">2 500 FCFA</span>
                        <span style="color: #6B7280; font-size: 14px;">/heure</span>
                    </div>
                    <a href="/prestataires/5" style="display: block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Voir le profil</a>
                </div>
            </div>

            <!-- Prestataire 6 - Fatou Diop -->
            <div data-aos="fade-up" data-aos-delay="200" class="card">
                <div style="background: linear-gradient(135deg, #1B3A6B, #3A9E3A); padding: 30px; text-align: center; color: white;">
                    <div style="font-size: 48px;">🧹</div>
                    <h3 style="font-size: 20px; font-weight: bold; margin-top: 8px;">Fatou Diop</h3>
                    <p style="opacity: 0.8;">Femme de ménage</p>
                    <div style="display: flex; gap: 4px; flex-wrap: wrap; justify-content: center; margin-top: 6px;">
                        <span style="background: #10B981; color: white; font-size: 10px; font-weight: bold; padding: 2px 8px; border-radius: 20px;">💰 Meilleur prix</span>
                    </div>
                    <span style="display: inline-block; background: #3A9E3A; padding: 2px 12px; border-radius: 20px; font-size: 12px; margin-top: 4px;">✅ Vérifié</span>
                </div>
                <div style="padding: 20px;">
                    <p style="color: #6B7280;"><span style="font-weight: bold;">📍</span> Dakar - Grand Yoff</p>
                    <p style="color: #6B7280;"><span style="font-weight: bold;">⭐</span> 4.8/5 (10 avis)</p>
                    <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: bold; color: #3A9E3A;">3 500 FCFA</span>
                        <span style="color: #6B7280; font-size: 14px;">/heure</span>
                    </div>
                    <a href="/prestataires/6" style="display: block; margin-top: 16px; background-color: #3A9E3A; color: white; padding: 10px; border-radius: 8px; text-decoration: none; text-align: center;">Voir le profil</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection