<header style="background-color:white;color:#1B3A6B;padding:0;box-shadow:0 1px 0 #E5E7EB, 0 2px 12px rgba(0,0,0,0.06);position:sticky;top:0;z-index:100;font-family:'Poppins',sans-serif;">
    <nav style="max-width:1200px;margin:0 auto;padding:0 24px;display:flex;justify-content:space-between;align-items:center;height:110px;">

        {{-- Logo image --}}
        <a href="{{ route('home') }}" style="display:flex;align-items:center;gap:10px;text-decoration:none;flex-shrink:0;">
            <img src="{{ asset('images/logo.png') }}" alt="Teranga Service" style="height:95px;width:auto;object-fit:contain;">
        </a>

        {{-- Menu Desktop --}}
        <div id="desktop-menu" style="display:flex;gap:4px;align-items:center;">
            @foreach([
                [route('home'),      'Accueil'],
                [route('services'),  'Services'],
                [route('tarifs'),    'Tarifs'],
                [route('about'),     'À propos'],
                [route('contact'),   'Contact'],
            ] as [$href, $label])
            <a href="{{ $href }}"
               style="color:#374151;text-decoration:none;font-size:14px;font-weight:500;padding:6px 12px;border-radius:6px;transition:all 0.2s;"
               onmouseover="this.style.background='#F0FDF4';this.style.color='#3A9E3A'"
               onmouseout="this.style.background='transparent';this.style.color='#374151'">{{ $label }}</a>
            @endforeach

            <div style="width:1px;height:24px;background:#E5E7EB;margin:0 8px;"></div>

            {{-- Cloche notifications --}}
            <a href="{{ route('notifications') }}"
               style="position:relative;display:flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:8px;background:#F3F4F6;border:1px solid #E5E7EB;text-decoration:none;transition:background .2s;"
               onmouseover="this.style.background='#F0FDF4';this.style.borderColor='#3A9E3A'"
               onmouseout="this.style.background='#F3F4F6';this.style.borderColor='#E5E7EB'"
               title="Notifications" aria-label="Notifications">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                </svg>
                <span style="position:absolute;top:-4px;right:-4px;background:#EF4444;color:white;font-size:10px;font-weight:700;width:17px;height:17px;border-radius:50%;display:flex;align-items:center;justify-content:center;border:2px solid white;">2</span>
            </a>

            @auth
                @if(Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}"
                   style="background:#F59E0B;color:#1B3A6B;padding:6px 14px;border-radius:6px;text-decoration:none;font-weight:700;font-size:13px;display:flex;align-items:center;gap:6px;">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
                    Admin
                </a>
                @endif

                <div style="position:relative;" id="user-dropdown-wrapper">
                    <button onclick="toggleDropdown()"
                        style="display:flex;align-items:center;gap:8px;background:#F3F4F6;border:1px solid #E5E7EB;color:#1B3A6B;padding:6px 14px;border-radius:8px;cursor:pointer;font-size:14px;font-weight:500;font-family:'Poppins',sans-serif;transition:background .2s;"
                        onmouseover="this.style.background='#E5E7EB'"
                        onmouseout="this.style.background='#F3F4F6'">
                        <span style="width:26px;height:26px;background:#3A9E3A;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;">{{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}</span>
                        {{ Str::limit(Auth::user()->name ?? 'Mon compte', 12) }}
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>

                    <div id="user-dropdown" style="display:none;position:absolute;top:calc(100% + 8px);right:0;background:white;border-radius:10px;box-shadow:0 8px 30px rgba(0,0,0,0.15);min-width:190px;overflow:hidden;border:1px solid #E5E7EB;z-index:200;">
                        <a href="{{ Auth::user()->role === 'prestataire' ? route('dashboard.prestataire') : route('dashboard.client') }}"
                           style="display:flex;align-items:center;gap:10px;padding:12px 16px;color:#1B3A6B;text-decoration:none;font-size:14px;font-weight:500;border-bottom:1px solid #F3F4F6;"
                           onmouseover="this.style.background='#F9FAFB'" onmouseout="this.style.background='white'">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                            Dashboard
                        </a>
                        <a href="#"
                           style="display:flex;align-items:center;gap:10px;padding:12px 16px;color:#374151;text-decoration:none;font-size:14px;border-bottom:1px solid #F3F4F6;"
                           onmouseover="this.style.background='#F9FAFB'" onmouseout="this.style.background='white'">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#374151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            Mon profil
                        </a>
                        <form method="POST" action="/logout" style="margin:0;">
                            @csrf
                            <button type="submit"
                                style="display:flex;align-items:center;gap:10px;width:100%;padding:12px 16px;background:none;border:none;color:#EF4444;font-size:14px;cursor:pointer;font-family:'Poppins',sans-serif;text-align:left;"
                                onmouseover="this.style.background='#FEF2F2'" onmouseout="this.style.background='none'">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                                Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                   style="color:#1B3A6B;text-decoration:none;font-size:14px;font-weight:500;padding:7px 16px;border-radius:7px;border:1.5px solid #1B3A6B;transition:all 0.2s;"
                   onmouseover="this.style.background='#1B3A6B';this.style.color='white'" onmouseout="this.style.background='transparent';this.style.color='#1B3A6B'">Connexion</a>
                <a href="{{ route('register') }}"
                   style="background:#3A9E3A;color:white;text-decoration:none;font-size:14px;font-weight:600;padding:7px 18px;border-radius:7px;transition:all 0.2s;border:1px solid #3A9E3A;"
                   onmouseover="this.style.background='#2d8a2d'" onmouseout="this.style.background='#3A9E3A'">Inscription</a>
            @endauth
        </div>

        {{-- Hamburger mobile --}}
        <button id="mobile-menu-btn" onclick="toggleMobileMenu()"
            style="display:none;background:none;border:1.5px solid #1B3A6B;color:#1B3A6B;padding:8px 11px;border-radius:7px;cursor:pointer;line-height:1;" aria-label="Menu">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
    </nav>

    {{-- Menu mobile --}}
    <div id="mobile-menu" style="display:none;background:#142d55;border-top:1px solid rgba(255,255,255,0.08);padding:8px 16px 16px;">
        {{-- Logo mobile --}}
        <div style="padding:10px 4px 14px;border-bottom:1px solid rgba(255,255,255,0.08);margin-bottom:4px;">
            <img src="{{ asset('images/logo.png') }}" alt="Teranga Service" style="height:36px;width:auto;object-fit:contain;">
        </div>

        @foreach([
            [route('home'),         'Accueil',      '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>'],
            [route('services'),     'Services',     '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>'],
            [route('tarifs'),       'Tarifs',       '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>'],
            [route('prestataires'), 'Prestataires', '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>'],
            [route('about'),        'À propos',     '<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>'],
            [route('contact'),      'Contact',      '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.5 2 2 0 0 1 3.61 1.3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.9a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.5 16.5z"/>'],
        ] as [$href, $label, $svg])
        <a href="{{ $href }}" style="display:flex;align-items:center;gap:10px;color:white;text-decoration:none;padding:11px 4px;font-size:14px;border-bottom:1px solid rgba(255,255,255,0.06);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $svg !!}</svg>
            {{ $label }}
        </a>
        @endforeach

        <div style="padding:12px 0 4px;display:flex;gap:8px;flex-wrap:wrap;">
            <a href="{{ route('notifications') }}"
               style="display:flex;align-items:center;gap:6px;background:rgba(255,255,255,0.1);color:white;text-decoration:none;padding:9px 14px;border-radius:7px;font-size:13px;font-weight:500;border:1px solid rgba(255,255,255,0.2);">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                Notifications
                <span style="background:#EF4444;color:white;font-size:10px;font-weight:700;padding:1px 5px;border-radius:10px;">2</span>
            </a>

            @auth
                <a href="{{ Auth::user()->role === 'prestataire' ? route('dashboard.prestataire') : route('dashboard.client') }}"
                   style="flex:1;text-align:center;background:rgba(255,255,255,0.1);color:white;text-decoration:none;padding:9px 12px;border-radius:7px;font-size:13px;font-weight:500;border:1px solid rgba(255,255,255,0.2);display:flex;align-items:center;justify-content:center;gap:6px;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    Dashboard
                </a>
                <form method="POST" action="/logout" style="flex:1;margin:0;">
                    @csrf
                    <button type="submit" style="width:100%;background:#EF4444;border:none;color:white;padding:9px 12px;border-radius:7px;cursor:pointer;font-size:13px;font-weight:500;font-family:'Poppins',sans-serif;display:flex;align-items:center;justify-content:center;gap:6px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                        Déconnexion
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" style="flex:1;text-align:center;color:white;text-decoration:none;padding:9px 12px;border-radius:7px;font-size:13px;font-weight:500;border:1px solid rgba(255,255,255,0.25);">Connexion</a>
                <a href="{{ route('register') }}" style="flex:1;text-align:center;background:#3A9E3A;color:white;text-decoration:none;padding:9px 12px;border-radius:7px;font-size:13px;font-weight:600;">Inscription</a>
            @endauth
        </div>
    </div>
</header>

<style>
@media (max-width:900px){#desktop-menu{display:none!important;}#mobile-menu-btn{display:block!important;}}
@media (min-width:901px){#mobile-menu{display:none!important;}#mobile-menu-btn{display:none!important;}}
</style>

<script>
function toggleMobileMenu(){var m=document.getElementById('mobile-menu');m.style.display=m.style.display==='block'?'none':'block';}
function toggleDropdown(){var d=document.getElementById('user-dropdown');d.style.display=d.style.display==='block'?'none':'block';}
document.addEventListener('click',function(e){var w=document.getElementById('user-dropdown-wrapper');var d=document.getElementById('user-dropdown');if(w&&d&&!w.contains(e.target))d.style.display='none';});
</script>
