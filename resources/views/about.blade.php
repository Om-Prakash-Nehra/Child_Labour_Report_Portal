@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<style>
    .about-hero {
        background: url('/images/about-bg.jpeg') center center / cover no-repeat;
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        background-blend-mode: darken;
        padding: 40px 20px;
    }

    .section-light {
        background-color: #f9f9f9;
        padding: 60px 20px;
    }

    .section-dark {
        background-color: #343a40;
        color: white;
        padding: 60px 20px;
    }

    .icon-circle {
        font-size: 40px;
        padding: 20px;
        border-radius: 50%;
        background-color: #ffc107;
        color: #000;
        margin-bottom: 15px;
    }
</style>

<div class="about-hero">
    <div class="container">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead mt-3">Fighting child labour with compassion, technology, and collective action.</p>
    </div>
</div>

<div class="section-light text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Our Mission</h2>
        <p class="text-muted mx-auto" style="max-width: 800px;">
            Our mission is to build a safer society where every child has the opportunity to grow, learn, and thrive—
            free from exploitation. We harness the power of modern technology to enable real-time reporting,
            effective coordination with authorities, and promote public awareness.
        </p>
    </div>
</div>

<div class="section-dark text-center">
    <div class="container">
        <h2 class="fw-bold mb-5">What We Stand For</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="icon-circle mx-auto">🤝</div>
                <h5 class="fw-semibold">Community Empowerment</h5>
                <p>We encourage citizens to speak out and participate in protecting vulnerable children.</p>
            </div>
            <div class="col-md-4">
                <div class="icon-circle mx-auto">🧭</div>
                <h5 class="fw-semibold">Transparency & Trust</h5>
                <p>We ensure your reports remain confidential and are directed to the right people.</p>
            </div>
            <div class="col-md-4">
                <div class="icon-circle mx-auto">⚡</div>
                <h5 class="fw-semibold">Action-Oriented</h5>
                <p>Our platform enables fast communication with rescue agencies and NGOs to act quickly.</p>
            </div>
        </div>
    </div>
</div>

<div class="section-light text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Working Together</h2>
        <p class="text-muted mx-auto" style="max-width: 800px;">
            We collaborate with government agencies, law enforcement, and NGOs to make sure each report
            leads to meaningful action. Whether you're a concerned citizen or part of an organization,
            your support strengthens our impact.
        </p>
    </div>
</div>
@endsection
