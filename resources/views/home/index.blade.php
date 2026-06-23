@extends('layouts.app')
@section('title', 'Accueil - Teranga Service')
@section('content')

<!-- ===== HERO ===== -->
<div data-aos="fade-down" style="position:relative; background:linear-gradient(135deg,#0f2549 0%,#1B3A6B 60%,#1a4a3a 100%); color:white; padding:100px 20px; text-align:center; overflow:hidden;">
    <div style="position:absolute; inset:0; background:url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1400&q=80&fit=crop') center/cover no-repeat; opacity:0.08;"></div>
    <div style="position:relative; max-width:800px; margin:0 auto;">
        <span style="display:inline-block; background:rgba(58,158,58,0.25); color:#7dd87d; border:1px solid rgba(58,158,58,0.4); padding:6px 18px; border-radius:999px; font-size:13px; font-weight:600; margin-bottom:20px;">🇸🇳 La plateforme #1 au Sénégal</span>
        <h1 style="font-size:clamp(28px,6vw,54px); font-weight:700; margin-bottom:16px; line-height:1.15; color:white;">
            Vos services à domicile<br><span style="color:#3A9E3A;">en toute confiance</span>
        </h1>
        <p style="font-size:clamp(15px,2vw,19px); margin-bottom:32px; color:#c8d8e8; max-width:580px; margin-left:auto; margin-right:auto; line-height:1.7;">
            Teranga Service vous connecte avec des professionnels qualifiés pour tous vos besoins à la maison, en quelques clics.
        </p>
        <div style="display:flex; gap:8px; max-width:520px; margin:0 auto 28px; background:white; border-radius:50px; padding:6px 6px 6px 20px; box-shadow:0 8px 30px rgba(0,0,0,0.25);">
            <input type="text" placeholder="Ménage, Dakar Plateau..." style="flex:1; border:none; outline:none; font-size:14px; color:#1B3A6B; background:transparent; min-width:0; font-family:'Poppins',sans-serif;">
            <button style="background:#3A9E3A; color:white; padding:10px 24px; border:none; border-radius:50px; cursor:pointer; font-weight:600; font-size:14px; font-family:'Poppins',sans-serif;">Réserver</button>
        </div>
        <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
            <a href="#comment-ca-marche" style="background:transparent; border:2px solid rgba(255,255,255,0.4); color:white; padding:10px 22px; border-radius:8px; text-decoration:none; font-weight:600; font-size:15px;">Comment ça marche</a>
            <a href="/prestataires" style="background:#3A9E3A; border:2px solid #3A9E3A; color:white; padding:10px 22px; border-radius:8px; text-decoration:none; font-weight:600; font-size:15px;">Voir les prestataires</a>
        </div>
    </div>
</div>

<!-- ===== STATS ===== -->
<div data-aos="fade-up" style="padding:48px 20px; background:#ffffff; border-bottom:1px solid #F3F4F6;">
    <div style="max-width:900px; margin:0 auto; display:grid; grid-template-columns:repeat(auto-fit,minmax(140px,1fr)); gap:8px; text-align:center;">
        <div style="padding:20px 12px;">
            <div style="font-size:36px; font-weight:700; color:#1B3A6B;">300<span style="color:#3A9E3A;">+</span></div>
            <div style="font-size:14px; color:#6B7280; font-weight:500; margin-top:4px;">Professionnels</div>
        </div>
        <div style="padding:20px 12px; border-left:1px solid #F3F4F6;">
            <div style="font-size:36px; font-weight:700; color:#1B3A6B;">1 500<span style="color:#3A9E3A;">+</span></div>
            <div style="font-size:14px; color:#6B7280; font-weight:500; margin-top:4px;">Clients satisfaits</div>
        </div>
        <div style="padding:20px 12px; border-left:1px solid #F3F4F6;">
            <div style="font-size:36px; font-weight:700; color:#1B3A6B;">2 000<span style="color:#3A9E3A;">+</span></div>
            <div style="font-size:14px; color:#6B7280; font-weight:500; margin-top:4px;">Services réalisés</div>
        </div>
        <div style="padding:20px 12px; border-left:1px solid #F3F4F6;">
            <div style="font-size:36px; font-weight:700; color:#1B3A6B;">24h<span style="color:#3A9E3A;">/24</span></div>
            <div style="font-size:14px; color:#6B7280; font-weight:500; margin-top:4px;">Disponibilité</div>
        </div>
    </div>
</div>

<!-- ===== NOS SERVICES (icônes SVG) ===== -->
<div data-aos="fade-up" style="padding:80px 20px; background:#F9FAFB;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="text-align:center; margin-bottom:52px;">
            <h2 style="font-size:clamp(24px,4vw,36px); font-weight:700; color:#1B3A6B; margin-bottom:10px;">Nos services</h2>
            <div style="width:56px; height:4px; background:#3A9E3A; border-radius:2px; margin:0 auto 14px;"></div>
            <p style="color:#6B7280; font-size:16px; max-width:500px; margin:0 auto;">Découvrez tous nos services à domicile réalisés par des professionnels vérifiés</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:28px;">

            @php
            $services = [
                ['icon'=>'menage',       'titre'=>'Ménage',              'desc'=>'Nettoyage complet, repassage et entretien de votre maison.',         'img'=>'https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&q=80&fit=crop', 'badge'=>'Populaire'],
                ['icon'=>'plomberie',    'titre'=>'Plomberie',           'desc'=>'Installation, réparation de fuites et dépannage rapide.',            'img'=>'https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?w=600&q=80&fit=crop', 'badge'=>null],
                ['icon'=>'cuisine',      'titre'=>'Cuisine à domicile',  'desc'=>'Repas préparés chez vous par un cuisinier qualifié.',               'img'=>'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&q=80&fit=crop', 'badge'=>null],
                ['icon'=>'electricite',  'titre'=>'Électricité',         'desc'=>'Installation électrique, dépannage et mise aux normes.',            'img'=>'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=600&q=80&fit=crop', 'badge'=>null],
                ['icon'=>'climatisation','titre'=>'Climatisation',       'desc'=>'Installation, entretien et dépannage de climatiseurs.',             'img'=>'https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=600&q=80&fit=crop', 'badge'=>null],
                ['icon'=>'informatique', 'titre'=>'Informatique',        'desc'=>'Maintenance, dépannage et assistance technique.',                   'img'=>'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&q=80&fit=crop', 'badge'=>null],
            ];
            @endphp

            @foreach($services as $s)
            <div class="card" style="padding:0; overflow:hidden; border-radius:16px;">
                <div style="height:180px; overflow:hidden; position:relative;">
                    <img src="{{ $s['img'] }}" alt="{{ $s['titre'] }}" style="width:100%; height:100%; object-fit:cover; transition:transform 0.4s ease;" onmouseover="this.style.transform='scale(1.07)'" onmouseout="this.style.transform='scale(1)'">
                    @if($s['badge'])
                    <div style="position:absolute; top:12px; left:12px; background:#3A9E3A; color:white; padding:4px 12px; border-radius:999px; font-size:12px; font-weight:600;">{{ $s['badge'] }}</div>
                    @endif
                    <!-- Icône SVG en bas à droite de l'image -->
                    <div style="position:absolute; bottom:12px; right:12px; width:40px; height:40px; background:white; border-radius:50%; display:flex; align-items:center; justify-content:center; box-shadow:0 2px 8px rgba(0,0,0,0.15);">
                        @include('components.icons', ['icon' => $s['icon'], 'size' => '20', 'color' => '#3A9E3A'])
                    </div>
                </div>
                <div style="padding:20px;">
                    <h3 style="font-size:18px; font-weight:600; color:#1B3A6B; margin-bottom:6px;">{{ $s['titre'] }}</h3>
                    <p style="color:#6B7280; font-size:14px; margin-bottom:16px; line-height:1.6;">{{ $s['desc'] }}</p>
                    <a href="/services" style="color:#3A9E3A; font-size:14px; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:4px;">
                        Réserver
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        <div style="text-align:center; margin-top:40px;">
            <a href="/services" style="background:#1B3A6B; color:white; padding:13px 32px; border-radius:8px; text-decoration:none; font-weight:600; font-size:15px; display:inline-block;">Voir tous les services</a>
        </div>
    </div>
</div>

<!-- ===== COMMENT ÇA MARCHE ===== -->
<div id="comment-ca-marche" data-aos="fade-up" style="padding:80px 20px; background:#ffffff;">
    <div style="max-width:1100px; margin:0 auto;">
        <div style="text-align:center; margin-bottom:52px;">
            <h2 style="font-size:clamp(24px,4vw,36px); font-weight:700; color:#1B3A6B; margin-bottom:10px;">Comment ça marche ?</h2>
            <div style="width:56px; height:4px; background:#3A9E3A; border-radius:2px; margin:0 auto 14px;"></div>
            <p style="color:#6B7280; font-size:16px;">Trouvez un prestataire qualifié en quelques clics</p>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:32px; text-align:center;">
            @php
            $steps = [
                ['num'=>'1', 'icon'=>'search',   'titre'=>'Choisissez',  'desc'=>'Sélectionnez votre service parmi notre catalogue'],
                ['num'=>'2', 'icon'=>'calendar',  'titre'=>'Réservez',    'desc'=>'Planifiez votre intervention à la date qui vous convient'],
                ['num'=>'3', 'icon'=>'plomberie', 'titre'=>'On intervient','desc'=>'Le prestataire se déplace directement chez vous'],
                ['num'=>'4', 'icon'=>'star',      'titre'=>'Profitez',    'desc'=>'Évaluez le service et bénéficiez d\'un suivi qualité'],
            ];
            @endphp
            @foreach($steps as $i => $step)
            <div data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div style="width:72px; height:72px; border-radius:50%; background:linear-gradient(135deg,#3A9E3A,#2d8a2d); display:flex; align-items:center; justify-content:center; margin:0 auto 16px; box-shadow:0 6px 20px rgba(58,158,58,0.3);">
                    @include('components.icons', ['icon' => $step['icon'], 'size' => '28', 'color' => '#ffffff'])
                </div>
                <h3 style="font-size:17px; font-weight:600; color:#1B3A6B; margin-bottom:8px;">{{ $step['titre'] }}</h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.6;">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ===== TÉMOIGNAGES ===== -->
<div data-aos="fade-up" style="padding:80px 20px; background:#F9FAFB;">
    <div style="max-width:1100px; margin:0 auto;">
        <div style="text-align:center; margin-bottom:52px;">
            <h2 style="font-size:clamp(24px,4vw,36px); font-weight:700; color:#1B3A6B; margin-bottom:10px;">Témoignages clients</h2>
            <div style="width:56px; height:4px; background:#3A9E3A; border-radius:2px; margin:0 auto 14px;"></div>
            <p style="color:#6B7280; font-size:16px;">Ils nous font confiance</p>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:24px;">
            @php
            $temos = [
                ['texte'=>'Service impeccable ! La personne est arrivée à l\'heure et le travail était parfait. Je recommande vivement.', 'nom'=>'Aissatou D.', 'ville'=>'Dakar Plateau', 'img'=>'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=80&q=80&fit=crop&crop=face'],
                ['texte'=>'Excellente expérience ! Un vrai gain de temps, je n\'ai plus besoin de chercher partout. La plateforme est très simple.', 'nom'=>'Fatou M.', 'ville'=>'Almadies', 'img'=>'https://images.unsplash.com/photo-1589156280159-27698a70f29e?w=80&q=80&fit=crop&crop=face'],
                ['texte'=>'Service rapide et professionnel. Mon problème de plomberie a été résolu en moins d\'une heure. Merci !', 'nom'=>'Mamadou F.', 'ville'=>'Mermoz', 'img'=>'https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=80&q=80&fit=crop&crop=face'],
            ];
            @endphp
            @foreach($temos as $t)
            <div class="card" style="border-top:4px solid #3A9E3A; padding:24px;">
                <div style="display:flex; gap:4px; margin-bottom:14px;">
                    @for($i=0;$i<5;$i++)
                    @include('components.icons', ['icon' => 'star', 'size' => '16', 'color' => '#FBBF24'])
                    @endfor
                </div>
                <p style="color:#4B5563; font-size:15px; font-style:italic; line-height:1.7; margin-bottom:16px;">"{{ $t['texte'] }}"</p>
                <div style="display:flex; align-items:center; gap:12px;">
                    <img src="{{ $t['img'] }}" alt="{{ $t['nom'] }}" style="width:44px; height:44px; border-radius:50%; object-fit:cover;">
                    <div>
                        <p style="font-weight:600; font-size:14px; color:#1B3A6B; margin:0;">{{ $t['nom'] }}</p>
                        <p style="font-size:12px; color:#9CA3AF; margin:0;">{{ $t['ville'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ===== CTA FINAL ===== -->
<div data-aos="zoom-in" style="padding:80px 20px; background:linear-gradient(135deg,#1B3A6B,#142d55); color:white; text-align:center; position:relative; overflow:hidden;">
    <div style="position:absolute; inset:0; background:url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1400&q=80&fit=crop') center/cover no-repeat; opacity:0.07;"></div>
    <div style="position:relative; max-width:600px; margin:0 auto;">
        <h2 style="font-size:clamp(24px,4vw,38px); font-weight:700; margin-bottom:14px; color:white;">Rejoignez notre communauté</h2>
        <p style="font-size:16px; color:#c8d8e8; margin-bottom:28px; line-height:1.7;">Des milliers de familles au Sénégal nous font déjà confiance pour leurs services à domicile.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="/register" style="background:#3A9E3A; color:white; padding:13px 28px; border-radius:8px; text-decoration:none; font-weight:600; font-size:15px; display:inline-block;">Créer un compte</a>
            <a href="/prestataires" style="background:transparent; border:2px solid rgba(255,255,255,0.4); color:white; padding:13px 28px; border-radius:8px; text-decoration:none; font-weight:600; font-size:15px; display:inline-block;">Voir les prestataires</a>
        </div>
    </div>
</div>

@endsection
