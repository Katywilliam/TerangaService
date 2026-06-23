@extends('layouts.app')
@section('title', 'Inscription - Teranga Service')
@section('content')

<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;padding:40px 20px;background:linear-gradient(135deg,#F0F4FF 0%,#F0FDF4 100%);font-family:'Poppins',sans-serif;">
    <div style="width:100%;max-width:460px;">

        {{-- Logo --}}
        <div style="text-align:center;margin-bottom:28px;">
            <a href="{{ route('home') }}" style="display:inline-block;text-decoration:none;">
                <img src="/TerangaService/public/images/logo.png" alt="Teranga Service" style="height:80px;width:auto;object-fit:contain;">
            </a>
            <p style="color:#6B7280;font-size:14px;margin-top:8px;">Créez votre compte gratuitement</p>
        </div>

        <div style="background:white;border-radius:16px;border-top:4px solid #3A9E3A;box-shadow:0 8px 32px rgba(0,0,0,0.08);padding:36px;">
            <h2 style="font-size:22px;font-weight:700;color:#1B3A6B;margin:0 0 24px;text-align:center;">Créer un compte</h2>

            <form method="POST" action="/register">
                @csrf

                {{-- Nom --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;">Nom complet</label>
                    <div style="position:relative;">
                        <div style="position:absolute;left:12px;top:50%;transform:translateY(-50%);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Votre nom complet" required
                            style="width:100%;padding:11px 14px 11px 40px;border:1.5px solid #D1D5DB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;background:#FAFAFA;box-sizing:border-box;outline:none;transition:border-color .15s;"
                            onfocus="this.style.borderColor='#3A9E3A'" onblur="this.style.borderColor='#D1D5DB'">
                    </div>
                    @error('name')<p style="color:#EF4444;font-size:12px;margin:4px 0 0;">{{ $message }}</p>@enderror
                </div>

                {{-- Email --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;">Adresse email</label>
                    <div style="position:relative;">
                        <div style="position:absolute;left:12px;top:50%;transform:translateY(-50%);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="votre@email.com" required
                            style="width:100%;padding:11px 14px 11px 40px;border:1.5px solid #D1D5DB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;background:#FAFAFA;box-sizing:border-box;outline:none;transition:border-color .15s;"
                            onfocus="this.style.borderColor='#3A9E3A'" onblur="this.style.borderColor='#D1D5DB'">
                    </div>
                    @error('email')<p style="color:#EF4444;font-size:12px;margin:4px 0 0;">{{ $message }}</p>@enderror
                </div>

                {{-- Téléphone --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;">Téléphone</label>
                    <div style="position:relative;">
                        <div style="position:absolute;left:12px;top:50%;transform:translateY(-50%);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                        </div>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="77 000 00 00" required
                            style="width:100%;padding:11px 14px 11px 40px;border:1.5px solid #D1D5DB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;background:#FAFAFA;box-sizing:border-box;outline:none;transition:border-color .15s;"
                            onfocus="this.style.borderColor='#3A9E3A'" onblur="this.style.borderColor='#D1D5DB'">
                    </div>
                </div>

                {{-- Rôle --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;">Je suis</label>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                        <label style="cursor:pointer;">
                            <input type="radio" name="role" value="client" checked style="display:none;" class="role-radio">
                            <div class="role-card" onclick="selectRole(this,'client')"
                                style="border:2px solid #3A9E3A;background:#F0FDF4;border-radius:10px;padding:12px;text-align:center;transition:all .15s;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="margin:0 auto 6px;display:block;"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                <span style="font-size:13px;font-weight:600;color:#3A9E3A;">Un client</span>
                            </div>
                        </label>
                        <label style="cursor:pointer;">
                            <input type="radio" name="role" value="prestataire" style="display:none;" class="role-radio">
                            <div class="role-card" onclick="selectRole(this,'prestataire')"
                                style="border:2px solid #E5E7EB;background:white;border-radius:10px;padding:12px;text-align:center;transition:all .15s;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="margin:0 auto 6px;display:block;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                                <span style="font-size:13px;font-weight:600;color:#6B7280;">Un prestataire</span>
                            </div>
                        </label>
                    </div>
                </div>

                {{-- Mot de passe --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;">Mot de passe</label>
                    <div style="position:relative;">
                        <div style="position:absolute;left:12px;top:50%;transform:translateY(-50%);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </div>
                        <input type="password" name="password" id="pwd" placeholder="Min. 8 caractères" required
                            style="width:100%;padding:11px 40px;border:1.5px solid #D1D5DB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;background:#FAFAFA;box-sizing:border-box;outline:none;transition:border-color .15s;"
                            onfocus="this.style.borderColor='#3A9E3A'" onblur="this.style.borderColor='#D1D5DB'">
                        <button type="button" onclick="togglePwd('pwd')" tabindex="-1" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:#9CA3AF;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                    </div>
                    @error('password')<p style="color:#EF4444;font-size:12px;margin:4px 0 0;">{{ $message }}</p>@enderror
                </div>

                {{-- Confirmer --}}
                <div style="margin-bottom:24px;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;">Confirmer le mot de passe</label>
                    <div style="position:relative;">
                        <div style="position:absolute;left:12px;top:50%;transform:translateY(-50%);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <input type="password" name="password_confirmation" id="pwd2" placeholder="Répétez le mot de passe" required
                            style="width:100%;padding:11px 40px;border:1.5px solid #D1D5DB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;background:#FAFAFA;box-sizing:border-box;outline:none;transition:border-color .15s;"
                            onfocus="this.style.borderColor='#3A9E3A'" onblur="this.style.borderColor='#D1D5DB'">
                        <button type="button" onclick="togglePwd('pwd2')" tabindex="-1" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:#9CA3AF;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                    </div>
                </div>

                <button type="submit"
                    style="width:100%;background:#3A9E3A;color:white;padding:13px;border:none;border-radius:8px;font-weight:600;font-size:15px;cursor:pointer;font-family:'Poppins',sans-serif;display:flex;align-items:center;justify-content:center;gap:8px;transition:background .15s;"
                    onmouseover="this.style.background='#2e802e'" onmouseout="this.style.background='#3A9E3A'">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                    Créer mon compte
                </button>
            </form>

            <div style="text-align:center;margin-top:20px;padding-top:20px;border-top:1px solid #F3F4F6;">
                <p style="color:#6B7280;font-size:14px;margin:0;">
                    Déjà un compte ?
                    <a href="{{ route('login') }}" style="color:#3A9E3A;font-weight:600;text-decoration:none;margin-left:4px;">Se connecter</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function togglePwd(id) {
    var el = document.getElementById(id);
    el.type = el.type === 'password' ? 'text' : 'password';
}
function selectRole(card, role) {
    document.querySelectorAll('.role-card').forEach(function(c) {
        c.style.border = '2px solid #E5E7EB';
        c.style.background = 'white';
        c.querySelector('svg').setAttribute('stroke','#6B7280');
        c.querySelector('span').style.color = '#6B7280';
    });
    card.style.border = '2px solid #3A9E3A';
    card.style.background = '#F0FDF4';
    card.querySelector('svg').setAttribute('stroke','#3A9E3A');
    card.querySelector('span').style.color = '#3A9E3A';
    card.previousElementSibling.checked = true;
}
</script>
@endsection
