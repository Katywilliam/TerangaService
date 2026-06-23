@extends('layouts.app')
@section('title', 'Connexion - Teranga Service')
@section('content')

<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;padding:40px 20px;background:linear-gradient(135deg,#F0F4FF 0%,#F0FDF4 100%);font-family:'Poppins',sans-serif;">
    <div style="width:100%;max-width:420px;">

        {{-- Logo centré --}}
        <div style="text-align:center;margin-bottom:28px;">
            <a href="{{ route('home') }}" style="display:inline-block;text-decoration:none;">
                <img src="/TerangaService/public/images/logo.png" alt="Teranga Service" style="height:80px;width:auto;object-fit:contain;">
            </a>
            <p style="color:#6B7280;font-size:14px;margin-top:8px;">Bon retour parmi nous !</p>
        </div>

        <div style="background:white;border-radius:16px;border-top:4px solid #3A9E3A;box-shadow:0 8px 32px rgba(0,0,0,0.08);padding:36px;">
            <h2 style="font-size:22px;font-weight:700;color:#1B3A6B;margin:0 0 24px;text-align:center;">Connexion</h2>

            @if(session('error'))
            <div style="background:#FEF2F2;border:1px solid #FECACA;border-radius:8px;padding:12px;margin-bottom:16px;display:flex;align-items:center;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <span style="font-size:13px;color:#EF4444;">{{ session('error') }}</span>
            </div>
            @endif

            <form method="POST" action="/login">
                @csrf

                {{-- Email --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;">Adresse email</label>
                    <div style="position:relative;">
                        <div style="position:absolute;left:12px;top:50%;transform:translateY(-50%);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="votre@email.com" required
                            style="width:100%;padding:11px 14px 11px 40px;border:1.5px solid #D1D5DB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;color:#374151;background:#FAFAFA;box-sizing:border-box;outline:none;transition:border-color .15s;"
                            onfocus="this.style.borderColor='#3A9E3A'" onblur="this.style.borderColor='#D1D5DB'">
                    </div>
                    @error('email')<p style="color:#EF4444;font-size:12px;margin:4px 0 0;">{{ $message }}</p>@enderror
                </div>

                {{-- Mot de passe --}}
                <div style="margin-bottom:8px;">
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;">
                        <label style="font-size:13px;font-weight:600;color:#374151;">Mot de passe</label>
                        <a href="/password/reset" style="font-size:12px;color:#3A9E3A;text-decoration:none;font-weight:500;">Mot de passe oublié ?</a>
                    </div>
                    <div style="position:relative;">
                        <div style="position:absolute;left:12px;top:50%;transform:translateY(-50%);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </div>
                        <input type="password" name="password" placeholder="••••••••" required
                            style="width:100%;padding:11px 40px 11px 40px;border:1.5px solid #D1D5DB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;color:#374151;background:#FAFAFA;box-sizing:border-box;outline:none;transition:border-color .15s;"
                            onfocus="this.style.borderColor='#3A9E3A'" onblur="this.style.borderColor='#D1D5DB'">
                        <button type="button" onclick="togglePwd(this)" tabindex="-1"
                            style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;padding:0;color:#9CA3AF;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                    </div>
                    @error('password')<p style="color:#EF4444;font-size:12px;margin:4px 0 0;">{{ $message }}</p>@enderror
                </div>

                {{-- Se souvenir --}}
                <div style="display:flex;align-items:center;gap:8px;margin:16px 0 20px;">
                    <input type="checkbox" name="remember" id="remember" style="width:15px;height:15px;accent-color:#3A9E3A;cursor:pointer;">
                    <label for="remember" style="font-size:13px;color:#6B7280;cursor:pointer;">Se souvenir de moi</label>
                </div>

                {{-- Bouton --}}
                <button type="submit"
                    style="width:100%;background:#3A9E3A;color:white;padding:13px;border:none;border-radius:8px;font-weight:600;font-size:15px;cursor:pointer;font-family:'Poppins',sans-serif;display:flex;align-items:center;justify-content:center;gap:8px;transition:background .15s;"
                    onmouseover="this.style.background='#2e802e'" onmouseout="this.style.background='#3A9E3A'">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>
                    Se connecter
                </button>
            </form>

            <div style="text-align:center;margin-top:20px;padding-top:20px;border-top:1px solid #F3F4F6;">
                <p style="color:#6B7280;font-size:14px;margin:0 0 8px;">
                    Pas encore de compte ?
                    <a href="{{ route('register') }}" style="color:#3A9E3A;font-weight:600;text-decoration:none;margin-left:4px;">Créer un compte</a>
                </p>
                <p style="color:#6B7280;font-size:13px;margin:0;">
                    Vous êtes prestataire ?
                    <a href="{{ route('prestataire.register') }}" style="color:#1B3A6B;font-weight:600;text-decoration:none;margin-left:4px;">Rejoindre ici</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function togglePwd(btn) {
    var input = btn.previousElementSibling;
    input.type = input.type === 'password' ? 'text' : 'password';
}
</script>
@endsection
