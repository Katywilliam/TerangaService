@extends('layouts.app')
@section('title', 'Page non trouvée - Teranga Service')
@section('content')

<div style="min-height:70vh;display:flex;align-items:center;justify-content:center;padding:60px 20px;font-family:'Poppins',sans-serif;background:#F9FAFB;">
    <div style="text-align:center;max-width:500px;">
        <div style="width:100px;height:100px;border-radius:50%;background:#FEF3C7;display:flex;align-items:center;justify-content:center;margin:0 auto 24px;">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        </div>
        <h1 style="font-size:80px;font-weight:800;color:#1B3A6B;margin:0;line-height:1;">404</h1>
        <h2 style="font-size:22px;font-weight:600;color:#374151;margin:8px 0 12px;">Page non trouvée</h2>
        <p style="color:#6B7280;font-size:15px;line-height:1.7;margin:0 0 32px;">La page que vous cherchez n'existe pas ou a été déplacée. Pas de panique, retournez à l'accueil !</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
            <a href="{{ route('home') }}"
               style="display:inline-flex;align-items:center;gap:8px;background:#1B3A6B;color:white;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:600;font-size:14px;transition:background .15s;"
               onmouseover="this.style.background='#142d55'" onmouseout="this.style.background='#1B3A6B'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                Retour à l'accueil
            </a>
            <a href="{{ route('contact') }}"
               style="display:inline-flex;align-items:center;gap:8px;background:white;color:#1B3A6B;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:600;font-size:14px;border:1.5px solid #1B3A6B;transition:background .15s;"
               onmouseover="this.style.background='#F0F4FF'" onmouseout="this.style.background='white'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1B3A6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                Nous contacter
            </a>
        </div>
    </div>
</div>
@endsection
