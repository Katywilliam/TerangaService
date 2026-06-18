@extends('layouts.app')

@section('title', 'Tarifs - Teranga Service')

@section('content')
<!-- Hero avec animation -->
<div data-aos="fade-down" style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 60px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: bold; margin-bottom: 16px;">Nos tarifs</h1>
        <p style="font-size: 20px; color: #D1D5DB;">Des prix transparents et compétitifs</p>
    </div>
</div>

<div style="padding: 60px 20px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
            
            <div data-aos="flip-left" data-aos-delay="0" class="card" style="text-align: center;">
                <div style="font-size: 40px; margin-bottom: 12px;">🧹</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Ménage</h3>
                <p style="font-size: 28px; font-weight: bold; color: #3A9E3A; margin: 12px 0;">3 500 FCFA</p>
                <p style="color: #6B7280;">/heure</p>
            </div>

            <div data-aos="flip-left" data-aos-delay="100" class="card" style="text-align: center;">
                <div style="font-size: 40px; margin-bottom: 12px;">🔧</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Plomberie</h3>
                <p style="font-size: 28px; font-weight: bold; color: #3A9E3A; margin: 12px 0;">5 000 FCFA</p>
                <p style="color: #6B7280;">/intervention</p>
            </div>

            <div data-aos="flip-left" data-aos-delay="200" class="card" style="text-align: center;">
                <div style="font-size: 40px; margin-bottom: 12px;">⚡</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Électricité</h3>
                <p style="font-size: 28px; font-weight: bold; color: #3A9E3A; margin: 12px 0;">5 500 FCFA</p>
                <p style="color: #6B7280;">/intervention</p>
            </div>

            <div data-aos="flip-left" data-aos-delay="0" class="card" style="text-align: center;">
                <div style="font-size: 40px; margin-bottom: 12px;">🌿</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Jardinage</h3>
                <p style="font-size: 28px; font-weight: bold; color: #3A9E3A; margin: 12px 0;">4 000 FCFA</p>
                <p style="color: #6B7280;">/heure</p>
            </div>

            <div data-aos="flip-left" data-aos-delay="100" class="card" style="text-align: center;">
                <div style="font-size: 40px; margin-bottom: 12px;">👶</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Garde d'enfants</h3>
                <p style="font-size: 28px; font-weight: bold; color: #3A9E3A; margin: 12px 0;">2 500 FCFA</p>
                <p style="color: #6B7280;">/heure</p>
            </div>

            <div data-aos="flip-left" data-aos-delay="200" class="card" style="text-align: center;">
                <div style="font-size: 40px; margin-bottom: 12px;">🍳</div>
                <h3 style="font-size: 20px; font-weight: bold; color: #1B3A6B;">Cuisine</h3>
                <p style="font-size: 28px; font-weight: bold; color: #3A9E3A; margin: 12px 0;">3 000 FCFA</p>
                <p style="color: #6B7280;">/repas</p>
            </div>

        </div>
    </div>
</div>
@endsection