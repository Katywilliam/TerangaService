@extends('layouts.app')
@section('title', 'Nos services - Teranga Service')
@section('content')

<!-- Hero -->
<div data-aos="fade-down" style="background:linear-gradient(135deg,#1B3A6B,#142d55); color:white; padding:80px 20px; text-align:center;">
    <div style="max-width:800px; margin:0 auto;">
        <h1 style="font-size:clamp(28px,6vw,48px); font-weight:700; margin-bottom:12px;">Nos services</h1>
        <p style="font-size:clamp(14px,2vw,18px); color:#D1D5DB; margin-bottom:24px;">Découvrez tous nos services à domicile réalisés par des professionnels vérifiés</p>
        <div style="display:flex; gap:8px; max-width:500px; margin:0 auto; background:white; border-radius:50px; padding:6px 6px 6px 20px; box-shadow:0 8px 24px rgba(0,0,0,0.2);">
            <input type="text" placeholder="Rechercher un service..." style="flex:1; border:none; outline:none; font-size:14px; color:#1B3A6B; font-family:'Poppins',sans-serif; background:transparent; min-width:0;">
            <button style="background:#3A9E3A; color:white; padding:10px 22px; border:none; border-radius:50px; cursor:pointer; font-weight:600; font-size:14px; white-space:nowrap; font-family:'Poppins',sans-serif;">Rechercher</button>
        </div>
    </div>
</div>

<!-- Grille services -->
<div style="padding:64px 20px; background:#F9FAFB;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="text-align:center; margin-bottom:48px;">
            <h2 style="font-size:clamp(22px,4vw,32px); font-weight:700; color:#1B3A6B; margin-bottom:10px;">Tous nos services</h2>
            <div style="width:56px; height:4px; background:#3A9E3A; border-radius:2px; margin:0 auto;"></div>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:28px;">

            @php
            $services = [
                ['icon'=>'electricite',  'titre'=>'Électricité',         'desc'=>'Installation électrique, dépannage et maintenance. Interventions rapides et garanties.',  'prix'=>'5 500', 'unite'=>'intervention'],
                ['icon'=>'plomberie',    'titre'=>'Plomberie',           'desc'=>'Installation, réparation et entretien de vos équipements sanitaires.',                   'prix'=>'5 000', 'unite'=>'intervention'],
                ['icon'=>'menage',       'titre'=>'Ménage',              'desc'=>'Nettoyage complet de votre maison ou bureau. Lessive, repassage, vitres.',              'prix'=>'5 000', 'unite'=>'intervention'],
                ['icon'=>'cuisine',      'titre'=>'Cuisine à domicile',  'desc'=>'Préparation de repas pour événements et particuliers.',                                  'prix'=>'5 000', 'unite'=>'repas'],
                ['icon'=>'climatisation','titre'=>'Froid & Climatisation','desc'=>'Installation et dépannage de climatiseurs et réfrigérateurs.',                          'prix'=>'3 000', 'unite'=>'intervention'],
                ['icon'=>'informatique', 'titre'=>'Informatique',        'desc'=>'Maintenance informatique, installation de logiciels et assistance technique.',           'prix'=>'4 500', 'unite'=>'heure'],
            ];
            @endphp

            @foreach($services as $i => $s)
            <div data-aos="fade-up" data-aos-delay="{{ $i * 80 }}" class="card" style="padding:28px 24px; text-align:center; border-top:4px solid #3A9E3A; border-radius:16px;">
                <!-- Icône SVG dans un cercle -->
                <div style="width:72px; height:72px; background:linear-gradient(135deg,#EFF6FF,#F0FDF4); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 16px; box-shadow:0 4px 12px rgba(58,158,58,0.15);">
                    @include('components.icons', ['icon' => $s['icon'], 'size' => '32', 'color' => '#3A9E3A'])
                </div>
                <h3 style="font-size:18px; font-weight:700; color:#1B3A6B; margin-bottom:8px;">{{ $s['titre'] }}</h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.7; margin-bottom:16px;">{{ $s['desc'] }}</p>
                <div style="margin-bottom:20px;">
                    <span style="color:#3A9E3A; font-size:22px; font-weight:700;">{{ $s['prix'] }} FCFA</span>
                    <span style="color:#9CA3AF; font-size:13px;"> /{{ $s['unite'] }}</span>
                </div>
                <a href="/prestataires" style="display:inline-block; background:#3A9E3A; color:white; padding:10px 24px; border-radius:8px; text-decoration:none; font-size:14px; font-weight:600;">Réserver</a>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
