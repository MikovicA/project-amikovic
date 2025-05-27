@extends('layouts.app')

@section('content')
<style>
    .dashboard-header {
        background: linear-gradient(to right, #800020, #b22222);
        color: white;
        padding: 2rem;
        text-align: center;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
    }

    .dashboard-header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .dashboard-header p {
        font-size: 1.1rem;
    }

    .info-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        justify-content: center;
    }

    .info-card {
        flex: 1 1 250px;
        background: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 1rem;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s;
    }

    .info-card:hover {
        transform: translateY(-5px);
        border-color: #800020;
    }

    .info-card h4 {
        margin-bottom: 0.5rem;
        color: #800020;
    }

    .info-card p {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        
    }
    
</style>

<div class="container">
    <div class="dashboard-header">
        <h1>Dobrodošli, {{ Auth::user()->name }}</h1>
        <p>Ovo je vaš korisnički kontrolni panel. Pratite svoje aktivnosti i upravljajte podacima.</p>
    </div>

    <div class="info-cards">
        <div class="info-card">
            <h4>Ukupno vina</h4>
            <p>12</p>
        </div>
        <div class="info-card">
            <h4>Današnje narudžbine</h4>
            <p>7</p>
        </div>
        <div class="info-card">
            <h4>Omiljena vina</h4>
            <p>3</p>
        </div>
    </div>
</div>
@endsection
