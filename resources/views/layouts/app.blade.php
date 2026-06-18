<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teranga Service - @yield('title', 'Votre maison, nos solutions')</title>
    
    <!-- ⭐ FAVICON TERANGA SERVICE ⭐ -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    
    <style>
        * { font-family: 'Inter', sans-serif; }
        .btn-primary { background-color: #3A9E3A; color: white; padding: 12px 24px; border-radius: 8px; font-weight: 600; transition: 0.2s; border: none; cursor: pointer; }
        .btn-primary:hover { opacity: 0.9; }
        .card { background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 24px; }
    </style>
</head>
<body>

    @include('components.header')

    <main style="min-height: 80vh;">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Assistant IA (CHATBOT) -->
    @include('components.chatbot')

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html>