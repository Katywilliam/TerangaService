@extends('layouts.app')
@section('title', 'Contact - Teranga Service')
@section('content')
<style>
.form-ctrl{width:100%;padding:10px 14px;border:1.5px solid #E5E7EB;border-radius:8px;font-size:14px;font-family:'Poppins',sans-serif;box-sizing:border-box;outline:none;transition:border-color .15s;background:#FAFAFA;}
.form-ctrl:focus{border-color:#3A9E3A;box-shadow:0 0 0 3px rgba(58,158,58,.08);}
.social-ico{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;transition:transform .15s;}
.social-ico:hover{transform:translateY(-2px);}
</style>

{{-- Hero --}}
<div style="background:linear-gradient(135deg,#0f2549 0%,#1B3A6B 60%,#1a4a3a 100%);color:white;padding:60px 20px;text-align:center;font-family:'Poppins',sans-serif;">
    <div style="max-width:700px;margin:0 auto;">
        <div style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.5 2 2 0 0 1 3.61 1.3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.9a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.5 16.5z"/></svg>
        </div>
        <h1 style="font-size:clamp(26px,5vw,42px);font-weight:700;margin:0 0 10px;">Nous contacter</h1>
        <p style="font-size:15px;color:#c8d8e8;margin:0;">Une question ? Nous vous répondons dans les 24h.</p>
    </div>
</div>

<div style="padding:40px 16px;max-width:1000px;margin:0 auto;font-family:'Poppins',sans-serif;">
    <div style="display:grid;grid-template-columns:1.2fr 1fr;gap:20px;">

        {{-- Formulaire --}}
        <div style="background:white;border:1px solid #E5E7EB;border-radius:12px;padding:24px;border-top:3px solid #3A9E3A;">
            <h2 style="font-size:16px;font-weight:600;color:#1B3A6B;margin:0 0 18px;display:flex;align-items:center;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Envoyez-nous un message
            </h2>

            @if(session('success'))
            <div style="background:#F0FDF4;border:1px solid #DCFCE7;border-radius:8px;padding:12px;margin-bottom:16px;display:flex;align-items:center;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span style="font-size:13px;color:#166534;">{{ session('success') }}</span>
            </div>
            @endif

            <form method="POST" action="{{ route('contact') }}">
                @csrf
                <div style="margin-bottom:14px;">
                    <label style="display:block;font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:flex;align-items:center;gap:5px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        Nom complet
                    </label>
                    <input type="text" name="name" class="form-ctrl" placeholder="Votre nom" value="{{ old('name') }}">
                </div>
                <div style="margin-bottom:14px;">
                    <label style="display:block;font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:flex;align-items:center;gap:5px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Email
                    </label>
                    <input type="email" name="email" class="form-ctrl" placeholder="votre@email.com" value="{{ old('email') }}">
                </div>
                <div style="margin-bottom:14px;">
                    <label style="display:block;font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:flex;align-items:center;gap:5px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="4" y1="9" x2="20" y2="9"/><line x1="4" y1="15" x2="20" y2="15"/><line x1="10" y1="3" x2="8" y2="21"/><line x1="16" y1="3" x2="14" y2="21"/></svg>
                        Sujet
                    </label>
                    <select name="sujet" class="form-ctrl">
                        <option>Question sur un service</option>
                        <option>Problème technique</option>
                        <option>Devenir prestataire</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div style="margin-bottom:18px;">
                    <label style="display:block;font-size:12px;font-weight:600;color:#374151;margin-bottom:5px;display:flex;align-items:center;gap:5px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        Message
                    </label>
                    <textarea rows="5" name="message" class="form-ctrl" placeholder="Votre message…">{{ old('message') }}</textarea>
                </div>
                <button type="submit"
                    style="width:100%;background:#3A9E3A;color:white;border:none;padding:12px;border-radius:8px;font-weight:600;font-size:14px;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:8px;font-family:'Poppins',sans-serif;transition:background .15s;"
                    onmouseover="this.style.background='#2e802e'" onmouseout="this.style.background='#3A9E3A'">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    Envoyer le message
                </button>
            </form>
        </div>

        {{-- Coordonnées --}}
        <div style="background:white;border:1px solid #E5E7EB;border-radius:12px;padding:24px;border-top:3px solid #3A9E3A;">
            <h2 style="font-size:16px;font-weight:600;color:#1B3A6B;margin:0 0 18px;display:flex;align-items:center;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Nos coordonnées
            </h2>
            @foreach([
                ['<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>','contact@terangaservice.sn'],
                ['<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.5 2 2 0 0 1 3.61 1.3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.9a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.5 16.5z"/>','+221 77 000 00 00'],
                ['<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>','Dakar, Sénégal'],
                ['<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>','Lun – Dim : 7h00 – 20h00'],
            ] as [$svg,$txt])
            <div style="display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px solid #F3F4F6;">
                <div style="width:36px;height:36px;border-radius:9px;background:#F0FDF4;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $svg !!}</svg>
                </div>
                <span style="font-size:13px;color:#374151;">{{ $txt }}</span>
            </div>
            @endforeach

            {{-- Réseaux sociaux --}}
            <div style="background:#F9FAFB;border:1px solid #E5E7EB;border-radius:10px;padding:16px;margin-top:16px;text-align:center;">
                <p style="font-size:13px;font-weight:600;color:#374151;margin:0 0 12px;display:flex;align-items:center;justify-content:center;gap:6px;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                    Suivez-nous
                </p>
                <div style="display:flex;gap:10px;justify-content:center;">
                    <a href="#" class="social-ico" style="background:#1877F2;" aria-label="Facebook">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" class="social-ico" style="background:#E1306C;" aria-label="Instagram">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="social-ico" style="background:#1DA1F2;" aria-label="Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                    </a>
                    <a href="#" class="social-ico" style="background:#0A66C2;" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            {{-- Map placeholder --}}
            <div style="margin-top:16px;border-radius:10px;overflow:hidden;border:1px solid #E5E7EB;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15428.487!2d-17.4677!3d14.6937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173c6a1b5bb19%3A0x61e!2sDakar%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2sfr!4v1" width="100%" height="160" style="border:0;display:block;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<style>
@media(max-width:768px){
    div[style*="grid-template-columns:1.2fr 1fr"]{grid-template-columns:1fr!important;}
}
</style>
@endsection
