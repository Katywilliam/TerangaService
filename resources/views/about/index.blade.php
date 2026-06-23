@extends('layouts.app')
@section('title', 'À propos - Teranga Service')
@section('content')
<style>
.val-card{background:white;border:1px solid #E5E7EB;border-radius:14px;padding:24px;text-align:center;border-top:3px solid #3A9E3A;transition:box-shadow .2s,transform .2s;}
.val-card:hover{box-shadow:0 8px 28px rgba(0,0,0,.08);transform:translateY(-2px);}
.team-card{background:white;border:1px solid #E5E7EB;border-radius:14px;overflow:hidden;transition:box-shadow .2s,transform .2s;}
.team-card:hover{box-shadow:0 8px 28px rgba(0,0,0,.08);transform:translateY(-2px);}
</style>

{{-- Hero avec photo de fond --}}
<div style="position:relative;background:linear-gradient(135deg,#0f2549 0%,#1B3A6B 60%,#1a4a3a 100%);color:white;padding:90px 20px;text-align:center;overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=1400&q=80&fit=crop') center/cover no-repeat;opacity:0.12;"></div>
    <div style="position:relative;max-width:700px;margin:0 auto;">
        <span style="display:inline-block;background:rgba(58,158,58,0.25);color:#7dd87d;border:1px solid rgba(58,158,58,0.4);padding:6px 18px;border-radius:999px;font-size:13px;font-weight:600;margin-bottom:18px;">
            🇸🇳 Made in Sénégal
        </span>
        <h1 style="font-size:clamp(28px,5vw,46px);font-weight:700;margin:0 0 14px;line-height:1.2;">À propos de nous</h1>
        <p style="font-size:16px;color:#c8d8e8;margin:0;line-height:1.7;">Teranga Service — bien plus qu'un service, un engagement envers les familles sénégalaises.</p>
    </div>
</div>

<div style="font-family:'Poppins',sans-serif;">

    {{-- Mission + Image --}}
    <div style="max-width:1100px;margin:0 auto;padding:64px 20px;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;">
        <div data-aos="fade-right">
            <span style="display:inline-block;background:#F0FDF4;color:#166534;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;margin-bottom:14px;">Notre mission</span>
            <h2 style="font-size:clamp(22px,3vw,32px);font-weight:700;color:#1B3A6B;margin:0 0 16px;line-height:1.3;">Simplifier le quotidien des familles au Sénégal</h2>
            <p style="color:#4B5563;line-height:1.8;font-size:15px;margin:0 0 16px;">Née à Dakar, Teranga Service connecte les particuliers avec des professionnels qualifiés, fiables et passionnés. Chaque prestation est une occasion de créer de la confiance et de valoriser le savoir-faire local.</p>
            <p style="color:#4B5563;line-height:1.8;font-size:15px;margin:0 0 24px;">Nous croyons que chaque foyer mérite un service de qualité, accessible et transparent. C'est pourquoi nous vérifions chaque prestataire et garantissons votre satisfaction.</p>
            <div style="display:flex;gap:24px;flex-wrap:wrap;">
                <div style="text-align:center;">
                    <p style="font-size:28px;font-weight:700;color:#3A9E3A;margin:0;">300+</p>
                    <p style="font-size:12px;color:#6B7280;margin:2px 0 0;">Prestataires</p>
                </div>
                <div style="text-align:center;">
                    <p style="font-size:28px;font-weight:700;color:#3A9E3A;margin:0;">1 500+</p>
                    <p style="font-size:12px;color:#6B7280;margin:2px 0 0;">Clients satisfaits</p>
                </div>
                <div style="text-align:center;">
                    <p style="font-size:28px;font-weight:700;color:#3A9E3A;margin:0;">4.8/5</p>
                    <p style="font-size:12px;color:#6B7280;margin:2px 0 0;">Note moyenne</p>
                </div>
            </div>
        </div>
        <div data-aos="fade-left" style="border-radius:16px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,.12);">
            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=700&q=80&fit=crop" alt="Notre mission" style="width:100%;height:380px;object-fit:cover;display:block;">
        </div>
    </div>

    {{-- Nos valeurs --}}
    <div style="background:#F9FAFB;padding:64px 20px;">
        <div style="max-width:1100px;margin:0 auto;">
            <div style="text-align:center;margin-bottom:48px;">
                <h2 style="font-size:clamp(22px,3vw,32px);font-weight:700;color:#1B3A6B;margin:0 0 10px;">Nos valeurs</h2>
                <div style="width:56px;height:4px;background:#3A9E3A;border-radius:2px;margin:0 auto;"></div>
            </div>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;">
                @foreach([
                    ['Confiance',  'Chaque prestataire est vérifié et validé par notre équipe avant de rejoindre la plateforme.',     '#DCFCE7','#166534','<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
                    ['Qualité',    'Nous maintenons des standards élevés grâce aux avis clients et au suivi de chaque prestation.',   '#FEF3C7','#92400e','<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>'],
                    ['Proximité',  'Des professionnels dans votre quartier, disponibles rapidement pour répondre à vos besoins.',     '#DBEAFE','#1e40af','<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>'],
                    ['Excellence', 'Nous nous engageons à offrir une expérience irréprochable du premier contact jusqu\'au paiement.','#EDE9FE','#4c1d95','<circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>'],
                ] as [$titre,$desc,$bg,$tc,$svg])
                <div class="val-card" data-aos="fade-up">
                    <div style="width:56px;height:56px;border-radius:14px;background:{{ $bg }};display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="{{ $tc }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $svg !!}</svg>
                    </div>
                    <h3 style="font-weight:700;color:#1B3A6B;font-size:15px;margin:0 0 8px;">{{ $titre }}</h3>
                    <p style="color:#6B7280;font-size:13px;margin:0;line-height:1.6;">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Notre histoire avec image --}}
    <div style="max-width:1100px;margin:0 auto;padding:64px 20px;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;">
        <div data-aos="fade-right" style="border-radius:16px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,.12);">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=700&q=80&fit=crop" alt="Notre histoire" style="width:100%;height:360px;object-fit:cover;display:block;">
        </div>
        <div data-aos="fade-left">
            <span style="display:inline-block;background:#EEF2FF;color:#4338ca;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;margin-bottom:14px;">Notre histoire</span>
            <h2 style="font-size:clamp(20px,3vw,30px);font-weight:700;color:#1B3A6B;margin:0 0 16px;line-height:1.3;">De l'idée à la réalité</h2>
            <p style="color:#4B5563;line-height:1.8;font-size:15px;margin:0 0 14px;">Teranga Service est né d'un constat simple : trouver un prestataire de confiance à Dakar était difficile, long et souvent décevant. En 2024, notre équipe a décidé de changer ça.</p>
            <p style="color:#4B5563;line-height:1.8;font-size:15px;margin:0;">En quelques mois, nous avons bâti une plateforme qui met la technologie au service de la confiance humaine — fidèle à l'esprit du "teranga", l'hospitalité sénégalaise.</p>
        </div>
    </div>

    {{-- Notre équipe --}}
    <div style="background:#F9FAFB;padding:64px 20px;">
        <div style="max-width:1100px;margin:0 auto;">
            <div style="text-align:center;margin-bottom:48px;">
                <h2 style="font-size:clamp(22px,3vw,32px);font-weight:700;color:#1B3A6B;margin:0 0 10px;">Notre équipe</h2>
                <div style="width:56px;height:4px;background:#3A9E3A;border-radius:2px;margin:0 auto 14px;"></div>
                <p style="color:#6B7280;font-size:15px;margin:0;">Des personnes engagées pour vous servir</p>
            </div>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;">
                @foreach([
                    ['Mamadou Fall',  'Chef cuisinier & Co-fondateur',   'https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=400&q=80&fit=crop&crop=face', '#FEF3C7','#92400e'],
                    ['Ousmane Diop',  'Responsable Partenariats',         'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80&fit=crop&crop=face', '#DBEAFE','#1e40af'],
                    ['Omar Barry',    'Responsable Technique',             'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80&fit=crop&crop=face', '#EDE9FE','#4c1d95'],
                    ['Aminata Sy',    'Responsable Relations Clients',    'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=400&q=80&fit=crop&crop=face', '#DCFCE7','#166534'],
                ] as [$nom,$poste,$img,$bg,$tc])
                <div class="team-card" data-aos="fade-up">
                    <div style="height:220px;overflow:hidden;position:relative;">
                        <img src="{{ $img }}" alt="{{ $nom }}" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        <div style="position:absolute;bottom:0;left:0;right:0;height:60px;background:linear-gradient(transparent,rgba(27,58,107,.6));"></div>
                    </div>
                    <div style="padding:16px;">
                        <h3 style="font-weight:700;color:#1B3A6B;font-size:15px;margin:0 0 4px;">{{ $nom }}</h3>
                        <p style="color:#6B7280;font-size:13px;margin:0 0 10px;">{{ $poste }}</p>
                        <div style="display:flex;gap:8px;">
                            <a href="#" style="width:30px;height:30px;border-radius:8px;background:{{ $bg }};display:flex;align-items:center;justify-content:center;text-decoration:none;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $tc }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                            </a>
                            <a href="#" style="width:30px;height:30px;border-radius:8px;background:{{ $bg }};display:flex;align-items:center;justify-content:center;text-decoration:none;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $tc }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- CTA rejoindre --}}
    <div style="background:linear-gradient(135deg,#1B3A6B,#142d55);padding:64px 20px;text-align:center;position:relative;overflow:hidden;">
        <div style="position:absolute;inset:0;background:url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1400&q=80&fit=crop') center/cover no-repeat;opacity:0.07;"></div>
        <div style="position:relative;max-width:600px;margin:0 auto;">
            <h2 style="font-size:clamp(22px,4vw,36px);font-weight:700;color:white;margin:0 0 14px;">Rejoignez l'aventure Teranga</h2>
            <p style="font-size:15px;color:#c8d8e8;margin:0 0 28px;line-height:1.7;">Que vous soyez client ou prestataire, notre plateforme est faite pour vous.</p>
            <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('register') }}" style="background:#3A9E3A;color:white;padding:12px 28px;border-radius:8px;text-decoration:none;font-weight:600;font-size:15px;">Créer un compte</a>
                <a href="{{ route('contact') }}" style="background:transparent;border:2px solid rgba(255,255,255,0.4);color:white;padding:12px 28px;border-radius:8px;text-decoration:none;font-weight:600;font-size:15px;">Nous contacter</a>
            </div>
        </div>
    </div>

</div>
@endsection
