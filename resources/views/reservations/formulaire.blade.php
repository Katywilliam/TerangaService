@extends('layouts.app')
@section('title', 'Réserver un service - Teranga Service')
@section('content')
<style>
.step-label{font-size:13px;font-weight:600;color:#1B3A6B;margin:0 0 10px;display:flex;align-items:center;gap:7px;}
.step-num{width:24px;height:24px;border-radius:50%;background:#1B3A6B;color:white;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0;}
.form-ctrl{width:100%;padding:10px 14px;border:1.5px solid #E5E7EB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;box-sizing:border-box;outline:none;transition:border-color .15s;background:#FAFAFA;}
.form-ctrl:focus{border-color:#3A9E3A;box-shadow:0 0 0 3px rgba(58,158,58,.08);}
.pay-card{border:2px solid #E5E7EB;border-radius:10px;padding:14px;text-align:center;cursor:pointer;transition:all .15s;background:white;}
.pay-card:hover{border-color:#3A9E3A;background:#F0FDF4;}
.pay-card.active{border-color:#3A9E3A;background:#F0FDF4;}
</style>

{{-- Hero --}}
<div style="background:linear-gradient(135deg,#1B3A6B,#142d55);color:white;padding:40px 20px;text-align:center;font-family:'Poppins',sans-serif;">
    <div style="max-width:700px;margin:0 auto;">
        <div style="width:50px;height:50px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <h1 style="font-size:clamp(22px,4vw,34px);font-weight:700;margin:0 0 8px;">Réserver un service</h1>
        <p style="font-size:14px;color:#D1D5DB;margin:0;">Remplissez le formulaire ci-dessous pour confirmer votre réservation</p>
    </div>
</div>

<div style="padding:40px 16px;max-width:760px;margin:0 auto;font-family:'Poppins',sans-serif;">

    {{-- Barre de progression --}}
    <div style="display:flex;align-items:center;margin-bottom:32px;">
        @foreach(['Service','Date & Lieu','Paiement','Confirmation'] as $i => $s)
        <div style="flex:1;text-align:center;">
            <div style="width:32px;height:32px;border-radius:50%;background:{{ $i===0?'#3A9E3A':'#E5E7EB' }};color:{{ $i===0?'white':'#9CA3AF' }};display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;margin:0 auto 6px;">{{ $i+1 }}</div>
            <span style="font-size:11px;color:{{ $i===0?'#3A9E3A':'#9CA3AF' }};font-weight:{{ $i===0?'600':'400' }};">{{ $s }}</span>
        </div>
        @if($i < 3)
        <div style="flex:1;height:2px;background:#E5E7EB;margin-bottom:18px;"></div>
        @endif
        @endforeach
    </div>

    <div style="background:white;border:1px solid #E5E7EB;border-radius:14px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.05);">

        <form action="{{ route('reservations.confirmation') }}" method="GET">

            <div style="padding:24px;">

                {{-- Étape 1 : Service --}}
                <div style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #F3F4F6;">
                    <p class="step-label"><span class="step-num">1</span> Choisissez le service</p>
                    <select name="service" class="form-ctrl" onchange="updateTotal()">
                        <option value="5000">Plomberie — Réparation de fuites (5 000 FCFA)</option>
                        <option value="3500">Ménage — Nettoyage complet (3 500 FCFA/h)</option>
                        <option value="5500">Électricité — Dépannage (5 500 FCFA)</option>
                        <option value="4000">Jardinage (4 000 FCFA/h)</option>
                        <option value="3000">Cuisine à domicile (3 000 FCFA/repas)</option>
                    </select>
                </div>

                {{-- Étape 2 : Date --}}
                <div style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #F3F4F6;">
                    <p class="step-label"><span class="step-num">2</span> Date, heure et lieu</p>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px;">
                        <div>
                            <label style="font-size:12px;font-weight:600;color:#374151;display:flex;align-items:center;gap:5px;margin-bottom:5px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                Date
                            </label>
                            <input type="date" name="date" class="form-ctrl" min="{{ date('Y-m-d') }}">
                        </div>
                        <div>
                            <label style="font-size:12px;font-weight:600;color:#374151;display:flex;align-items:center;gap:5px;margin-bottom:5px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                Heure
                            </label>
                            <select name="heure" class="form-ctrl">
                                @foreach(['08:00','09:00','10:00','11:00','14:00','15:00','16:00','17:00'] as $h)
                                <option>{{ $h }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                        <div>
                            <label style="font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:block;">Ville</label>
                            <select name="ville" class="form-ctrl">
                                <option>Dakar</option>
                                <option>Thiès</option>
                                <option>Saint-Louis</option>
                                <option>Kaolack</option>
                            </select>
                        </div>
                        <div>
                            <label style="font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:block;">Quartier</label>
                            <input type="text" name="quartier" placeholder="Ex: Mermoz" class="form-ctrl">
                        </div>
                    </div>
                    <div style="margin-top:10px;">
                        <label style="font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:flex;align-items:center;gap:5px;">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Adresse complète
                        </label>
                        <input type="text" name="adresse" placeholder="Numéro, rue, étage..." class="form-ctrl">
                    </div>
                </div>

                {{-- Étape 3 : Paiement --}}
                <div style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #F3F4F6;">
                    <p class="step-label"><span class="step-num">3</span> Mode de paiement</p>
                    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:10px;">
                        <div class="pay-card active" onclick="selectPay(this)">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin:0 auto 6px;display:block;" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                            <span style="font-size:12px;font-weight:600;color:#374151;">Orange Money</span>
                        </div>
                        <div class="pay-card" onclick="selectPay(this)">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin:0 auto 6px;display:block;" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                            <span style="font-size:12px;font-weight:600;color:#374151;">Wave</span>
                        </div>
                        <div class="pay-card" onclick="selectPay(this)">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin:0 auto 6px;display:block;" aria-hidden="true"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                            <span style="font-size:12px;font-weight:600;color:#374151;">Carte bancaire</span>
                        </div>
                    </div>
                </div>

                {{-- Récapitulatif --}}
                <div style="background:#F9FAFB;border:1px solid #E5E7EB;border-radius:10px;padding:16px;margin-bottom:20px;">
                    <h3 style="font-size:14px;font-weight:600;color:#1B3A6B;margin:0 0 12px;display:flex;align-items:center;gap:6px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        Récapitulatif
                    </h3>
                    <div style="display:flex;justify-content:space-between;font-size:13px;color:#6B7280;margin-bottom:6px;">
                        <span>Sous-total</span>
                        <span id="sous-total">5 000 FCFA</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;font-size:13px;color:#6B7280;margin-bottom:8px;">
                        <span>Commission (8%)</span>
                        <span id="commission">400 FCFA</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;font-size:16px;font-weight:700;border-top:1px solid #E5E7EB;padding-top:10px;">
                        <span style="color:#1B3A6B;">Total</span>
                        <span id="total" style="color:#3A9E3A;">5 400 FCFA</span>
                    </div>
                    <p style="font-size:12px;color:#9CA3AF;margin:8px 0 0;display:flex;align-items:center;gap:5px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        Paiement sécurisé — Commission de 8% incluse
                    </p>
                </div>

                <button type="submit"
                    style="width:100%;background:#3A9E3A;color:white;padding:14px;border:none;border-radius:8px;font-size:16px;font-weight:700;cursor:pointer;font-family:'Poppins',sans-serif;display:flex;align-items:center;justify-content:center;gap:8px;transition:background .15s;"
                    onmouseover="this.style.background='#2e802e'" onmouseout="this.style.background='#3A9E3A'">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                    Confirmer et payer
                </button>

                <p style="text-align:center;color:#9CA3AF;font-size:12px;margin:12px 0 0;">
                    En confirmant, vous acceptez nos
                    <a href="{{ route('terms') }}" style="color:#3A9E3A;text-decoration:none;">conditions générales</a>
                </p>
            </div>
        </form>
    </div>
</div>

<script>
function selectPay(card) {
    document.querySelectorAll('.pay-card').forEach(function(c){ c.classList.remove('active'); });
    card.classList.add('active');
}
function updateTotal() {
    var prix = parseInt(document.querySelector('select[name=service]').value) || 5000;
    var com = Math.round(prix * 0.08);
    var total = prix + com;
    function fmt(n){ return n.toLocaleString('fr-FR') + ' FCFA'; }
    document.getElementById('sous-total').textContent = fmt(prix);
    document.getElementById('commission').textContent = fmt(com);
    document.getElementById('total').textContent = fmt(total);
}
document.querySelector('select[name=service]').addEventListener('change', updateTotal);
</script>
@endsection
