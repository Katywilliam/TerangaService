@extends('layouts.app')

@section('title', 'Connexion - Teranga Service')

@section('content')
<div style="padding: 60px 20px; display: flex; justify-content: center; align-items: center; min-height: 60vh;">
    <div class="card" style="max-width: 400px; width: 100%;">
        <h2 style="font-size: 24px; font-weight: bold; color: #1B3A6B; margin-bottom: 24px; text-align: center;">Connexion</h2>
        <form>
            <div style="margin-bottom: 16px;">
                <label style="display: block; color: #374151; margin-bottom: 4px;">Email</label>
                <input type="email" placeholder="votre@email.com" style="width: 100%; padding: 10px; border: 1px solid #D1D5DB; border-radius: 8px;">
            </div>
            <div style="margin-bottom: 16px;">
                <label style="display: block; color: #374151; margin-bottom: 4px;">Mot de passe</label>
                <input type="password" placeholder="••••••••" style="width: 100%; padding: 10px; border: 1px solid #D1D5DB; border-radius: 8px;">
            </div>
            <button type="submit" class="btn-primary" style="width: 100%;">Se connecter</button>
        </form>
        <p style="margin-top: 16px; text-align: center; color: #6B7280;">
            Pas de compte ? <a href="/register" style="color: #3A9E3A; text-decoration: none;">Inscrivez-vous</a>
        </p>
    </div>
</div>
@endsection