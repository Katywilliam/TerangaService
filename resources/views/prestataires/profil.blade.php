@extends('layouts.app')

@section('title', 'Profil prestataire - Teranga Service')

@section('content')
<style>
    .ts-card { background: white; border: 1px solid #E5E7EB; border-radius: 12px; padding: 18px; }
    .ts-card-top { border-top: 3px solid #3A9E3A; }
    .service-card { background: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 10px; padding: 12px 14px; }
    .badge-pill { display: inline-flex; align-items: center; gap: 5px; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 500; }
    .star { color: #FBBF24; }
    .review-item { padding: 12px 0; border-bottom: 1px solid #F3F4F6; }
    .review-item:last-child { border-bottom: none; }
    .form-label { display: block; font-size: 12px; font-weight: 600; color: #374151; margin-bottom: 5px; }
    .form-control { width: 100%; padding: 9px 12px; border: 1px solid #D1D5DB; border-radius: 8px; font-size: 13px; font-family: 'Poppins', sans-serif; box-sizing: border-box; transition: border-color .15s; }
    .form-control:focus { outline: none; border-color: #3A9E3A; box-shadow: 0 0 0 3px rgba(58,158,58,0.1); }
    .btn-primary { display: block; width: 100%; background: #3A9E3A; color: white; border: none; padding: 11px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; text-align: center; text-decoration: none; transition: background .15s; }
    .btn-primary:hover { background: #2e802e; }
    @media (min-width: 768px) {
        .layout-grid { display: grid; grid-template-columns: 1fr 360px; gap: 24px; }
    }
</style>

{{-- Hero --}}
<div style="background: linear-gradient(135deg, #1B3A6B 0%, #2d5fa8 50%, #3A9E3A 100%); color: white; padding: 36px 20px; text-align: center;">
    <div style="max-width: 700px; margin: 0 auto;">
        <div style="width: 72px; height: 72px; border-radius: 50%; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </div>
        <h1 style="font-size: clamp(22px, 4vw, 32px); font-weight: 700; margin: 0 0 6px;">Mamadou Sow</h1>
        <p style="font-size: 15px; opacity: 0.88; margin: 0 0 14px;">Spécialiste ménage et entretien · Plateau, Dakar</p>
        <div style="display: flex; justify-content: center; gap: 8px; flex-wrap: wrap; margin-bottom: 18px;">
            <span class="badge-pill" style="background: #FBBF24; color: #78350F;">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="#78350F" stroke="#78350F" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                4.9 · 127 avis
            </span>
            <span class="badge-pill" style="background: rgba(255,255,255,0.2); color: white;">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                3 ans d'expérience
            </span>
            <span class="badge-pill" style="background: rgba(255,255,255,0.2); color: white;">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                200+ prestations
            </span>
        </div>
        <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('reservations.formulaire') }}" style="background: #3A9E3A; color: white; padding: 9px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; gap: 7px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                Réserver
            </a>
            <a href="{{ route('contact') }}" style="background: rgba(255,255,255,0.15); color: white; padding: 9px 20px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 7px; border: 1px solid rgba(255,255,255,0.3);">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                Contacter
            </a>
        </div>
    </div>
</div>

{{-- Contenu --}}
<div style="max-width: 1100px; margin: 0 auto; padding: 28px 16px; font-family: 'Poppins', sans-serif;">
    <div class="layout-grid">

        {{-- Colonne gauche --}}
        <div>

            {{-- Services --}}
            <div class="ts-card ts-card-top" style="margin-bottom: 18px;" id="avis">
                <h2 style="font-size: 15px; font-weight: 600; color: #1B3A6B; margin: 0 0 14px; display: flex; align-items: center; gap: 8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                    Services proposés
                </h2>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                    @foreach([
                        ['icone' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>', 'nom' => 'Nettoyage complet', 'prix' => '5 000 FCFA'],
                        ['icone' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.38 3.46L16 2a4 4 0 01-8 0L3.62 3.46a2 2 0 00-1.34 2.23l.58 3.57a1 1 0 00.99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 002-2V10h2.15a1 1 0 00.99-.84l.58-3.57a2 2 0 00-1.34-2.23z"/></svg>', 'nom' => 'Lessive & repassage', 'prix' => '3 500 FCFA'],
                        ['icone' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>', 'nom' => 'Vitres & surfaces', 'prix' => '4 000 FCFA'],
                        ['icone' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>', 'nom' => 'Cuisine légère', 'prix' => '3 000 FCFA'],
                    ] as $s)
                    <div class="service-card">
                        <div style="display: flex; align-items: center; gap: 7px; margin-bottom: 5px;">
                            {!! $s['icone'] !!}
                            <span style="font-size: 13px; font-weight: 500; color: #374151;">{{ $s['nom'] }}</span>
                        </div>
                        <span style="font-size: 14px; font-weight: 700; color: #3A9E3A;">{{ $s['prix'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- À propos --}}
            <div class="ts-card ts-card-top" style="margin-bottom: 18px;">
                <h2 style="font-size: 15px; font-weight: 600; color: #1B3A6B; margin: 0 0 10px; display: flex; align-items: center; gap: 8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    À propos
                </h2>
                <p style="color: #4B5563; line-height: 1.8; font-size: 14px; margin: 0;">
                    Professionnel du ménage avec plus de 3 ans d'expérience, je propose des services de nettoyage complet, lessive et repassage pour particuliers à Dakar. Ponctuel, discret et minutieux, je m'adapte à vos besoins.
                </p>
            </div>

            {{-- Avis --}}
            <div class="ts-card ts-card-top">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
                    <h2 style="font-size: 15px; font-weight: 600; color: #1B3A6B; margin: 0; display: flex; align-items: center; gap: 8px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        Avis clients
                    </h2>
                    <span style="font-weight: 700; color: #3A9E3A; font-size: 15px;">4.9 / 5</span>
                </div>
                @foreach([
                    ['nom' => 'Coumba Fall', 'etoiles' => 5, 'avis' => 'Excellent travail, très propre et ponctuel !', 'temps' => 'Il y a 2 jours'],
                    ['nom' => 'Omar Diallo', 'etoiles' => 5, 'avis' => 'Je recommande vivement, très professionnel !', 'temps' => 'Il y a 5 jours'],
                    ['nom' => 'Mariama Ba', 'etoiles' => 4, 'avis' => 'Bon travail, quelques petits oublis mais globalement satisfaite.', 'temps' => 'Il y a 1 semaine'],
                ] as $r)
                <div class="review-item">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4px;">
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: #E0E7FF; display: flex; align-items: center; justify-content: center;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                            <span style="font-weight: 600; font-size: 13px; color: #111827;">{{ $r['nom'] }}</span>
                        </div>
                        <span style="font-size: 11px; color: #9CA3AF;">{{ $r['temps'] }}</span>
                    </div>
                    <div style="margin: 4px 0 6px 40px;">
                        @for ($i = 1; $i <= 5; $i++)
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="{{ $i <= $r['etoiles'] ? '#FBBF24' : 'none' }}" stroke="#FBBF24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        @endfor
                    </div>
                    <p style="font-size: 13px; color: #4B5563; margin: 0 0 0 40px; line-height: 1.5;">{{ $r['avis'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Colonne droite : formulaire de réservation --}}
        <div>
            <div class="ts-card ts-card-top" style="position: sticky; top: 90px;">
                <h2 style="font-size: 15px; font-weight: 600; color: #1B3A6B; margin: 0 0 16px; display: flex; align-items: center; gap: 8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    Réserver une prestation
                </h2>

                <div style="margin-bottom: 12px;">
                    <label class="form-label">Service</label>
                    <select class="form-control" id="sel-service" onchange="updateTotal()">
                        <option value="5000">Nettoyage complet — 5 000 FCFA/h</option>
                        <option value="3500">Lessive & repassage — 3 500 FCFA/h</option>
                        <option value="4000">Vitres & surfaces — 4 000 FCFA/h</option>
                        <option value="3000">Cuisine légère — 3 000 FCFA/h</option>
                    </select>
                </div>

                <div style="margin-bottom: 12px;">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" id="inp-date">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
                    <div>
                        <label class="form-label">Heure</label>
                        <select class="form-control" id="sel-heure">
                            @foreach(['08:00','09:00','10:00','11:00','14:00','15:00','16:00'] as $h)
                            <option>{{ $h }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Durée</label>
                        <select class="form-control" id="sel-duree" onchange="updateTotal()">
                            <option value="2">2 heures</option>
                            <option value="3">3 heures</option>
                            <option value="4">4 heures</option>
                        </select>
                    </div>
                </div>

                {{-- Récapitulatif --}}
                <div style="background:#F9FAFB;border:1px solid #E5E7EB;border-radius:10px;padding:12px;margin-bottom:14px;">
                    <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:5px;">
                        <span style="color:#6B7280;">Sous-total</span>
                        <span id="sous-total" style="font-weight:500;color:#111827;">10 000 FCFA</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:8px;">
                        <span style="color:#6B7280;">Commission (8%)</span>
                        <span id="commission" style="color:#6B7280;">800 FCFA</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;font-size:15px;font-weight:700;border-top:1px solid #E5E7EB;padding-top:8px;">
                        <span style="color:#1B3A6B;">Total</span>
                        <span id="total" style="color:#3A9E3A;">10 800 FCFA</span>
                    </div>
                </div>

                <a href="{{ route('reservations.confirmation') }}" class="btn-primary">
                    Confirmer la réservation
                </a>
                <div style="margin-top:10px;text-align:center;">
                    <a href="{{ route('contact') }}" style="color:#3A9E3A;text-decoration:none;font-size:13px;display:inline-flex;align-items:center;gap:5px;">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        Poser une question d'abord
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
function updateTotal() {
    var prix = parseInt(document.getElementById('sel-service').value) || 5000;
    var duree = parseInt(document.getElementById('sel-duree').value) || 2;
    var sousTotal = prix * duree;
    var commission = Math.round(sousTotal * 0.08);
    var total = sousTotal + commission;
    function fmt(n) { return n.toLocaleString('fr-FR') + ' FCFA'; }
    document.getElementById('sous-total').textContent = fmt(sousTotal);
    document.getElementById('commission').textContent = fmt(commission);
    document.getElementById('total').textContent = fmt(total);
}
document.getElementById('sel-service').addEventListener('change', updateTotal);
document.getElementById('sel-duree').addEventListener('change', updateTotal);
updateTotal();
</script>
@endsection