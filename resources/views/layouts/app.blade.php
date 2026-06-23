<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Teranga Service - Votre maison, nos solutions')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts : Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- AOS (animations au scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Feuilles de style Teranga -->
    <link rel="stylesheet" href="{{ asset('css/teranga.css') }}">
    <link rel="stylesheet" href="{{ asset('css/interactions.css') }}">

    <!-- SEO -->
    <meta name="description" content="Teranga Service - Plateforme de mise en relation entre particuliers et prestataires de services à domicile au Sénégal. Ménage, plomberie, cuisine et plus.">
    <meta name="keywords" content="services à domicile, prestataires, ménage, plomberie, cuisine, Sénégal, Dakar">
    <meta name="author" content="Teranga Service">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Teranga Service - Votre maison, nos solutions">
    <meta property="og:description" content="Trouvez des prestataires de services à domicile vérifiés au Sénégal.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Teranga Service - Votre maison, nos solutions">
    <meta name="twitter:description" content="Trouvez des prestataires de services à domicile vérifiés au Sénégal.">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    @stack('styles')
</head>
<body>

    @include('components.header')

    <main style="min-height: 80vh;">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Chatbot IA -->
    @include('components.chatbot')

    <!-- AOS init -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 700,
            once: true,
            offset: 80,
            easing: 'ease-out-cubic'
        });
    </script>

    @stack('scripts')
</body>
</html>
