@extends('layouts.app')

@section('title', 'À propos - Teranga Service')

@section('content')
<!-- Hero avec animation -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 60px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: bold; margin-bottom: 16px;">À propos de Teranga Service</h1>
        <p style="font-size: 20px; color: #D1D5DB;">Votre maison, nos solutions</p>
    </div>
</div>

<div style="padding: 60px 20px; max-width: 1000px; margin: 0 auto;">
    <!-- Introduction -->
    <div data-aos="fade-up" class="card" style="padding: 40px;">
        <h2 style="font-size: 28px; font-weight: bold; color: #1B3A6B; margin-bottom: 20px;">Introduction</h2>
        <p style="color: #4B5563; line-height: 1.8; font-size: 16px;">
            Teranga Service est une plateforme de mise en relation entre particuliers et prestataires de services à domicile. 
            Notre mission est de digitaliser le secteur des services à domicile au Sénégal en offrant une solution fiable, 
            sécurisée et accessible à tous.
        </p>
        <p style="color: #4B5563; line-height: 1.8; font-size: 16px; margin-top: 16px;">
            Nous croyons en la valeur du travail bien fait et en la confiance comme fondement de toute relation. 
            C'est pourquoi nous vérifions rigoureusement chaque prestataire avant de l'intégrer à notre plateforme.
        </p>
    </div>

    <!-- Nos valeurs -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-top: 30px;">
        <div data-aos="fade-up" data-aos-delay="0" class="card" style="padding: 24px; text-align: center;">
            <div style="font-size: 40px; margin-bottom: 12px;">🛡️</div>
            <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Confiabilité</h3>
            <p style="color: #6B7280; font-size: 14px;">Prestataires vérifiés et notés par les clients</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="100" class="card" style="padding: 24px; text-align: center;">
            <div style="font-size: 40px; margin-bottom: 12px;">🔒</div>
            <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Sécurité</h3>
            <p style="color: #6B7280; font-size: 14px;">Paiement sécurisé via Wave et Orange Money</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="200" class="card" style="padding: 24px; text-align: center;">
            <div style="font-size: 40px; margin-bottom: 12px;">🤝</div>
            <h3 style="font-weight: bold; color: #1B3A6B; margin-bottom: 8px;">Proximité</h3>
            <p style="color: #6B7280; font-size: 14px;">Des prestataires près de chez vous</p>
        </div>
    </div>
</div>
@endsection