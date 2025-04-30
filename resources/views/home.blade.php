@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
    .full-screen-section {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .hero-section {
        flex: 1;
        background: url('/images/home-bg.jpeg') center center / cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        padding: 40px 20px;  
        background-color: rgba(0, 0, 0, 0.5);
        background-blend-mode: darken;
    }

    .info-section {
        background-color: #f8f9fa;
        padding: 20px;
    }

    .features {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 20px;
    }

    .feature-box {
        flex: 1;
        min-width: 200px;
        padding: 20px;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    footer {
        text-align: center;
        padding: 10px;
        background: #343a40;
        color: white;
    }

    .admin-login {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
    }

    .admin-login a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }
</style>

<div class="full-screen-section">
    <div class="admin-login">
        <a href="/admin/login">Admin Login</a>
    </div>

    <div class="hero-section">
        <h1 class="display-4 fw-bold mb-3">Child Labour Help Portal</h1>
        <p class="lead mb-4">Report. Raise Awareness. Protect Children.</p>
        <a href="/report" class="btn btn-warning btn-lg px-5">Report a Case</a>
    </div>

    <div class="info-section">
        <h2 class="text-center fw-bold mb-3">What You Can Do</h2>
        <div class="features">
            <div class="feature-box text-center">
                <h5>📢 Report a Case</h5>
                <p class="text-muted">Raise a concern with ease and confidentiality.</p>
            </div>
            <div class="feature-box text-center">
                <h5>📍 Location-Based Alerts</h5>
                <p class="text-muted">Auto-detects your location to notify relevant authorities.</p>
            </div>
            <div class="feature-box text-center">
                <h5>🔒 Stay Anonymous</h5>
                <p class="text-muted">Your identity is protected. Help safely.</p>
            </div>
        </div>
    </div>

    <footer>
        <small>&copy; {{ date('Y') }} Child Labour Help Portal. All rights reserved.</small>
    </footer>
</div>
@endsection
