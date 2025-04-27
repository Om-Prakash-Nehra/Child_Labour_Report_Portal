@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="bg-cover" style="background-image: url('/images/contact-bg.png'); background-size: cover; background-position: center;">
    <div class="overlay" style="background-color: rgba(0, 0, 0, 0.4); min-height: 100vh; padding: 80px 20px; color: white;">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Get in Touch</h1>
            <p class="lead mb-5">We're here to assist you. If you have any questions, concerns, or would like to get involved, feel free to contact us through the channels below.</p>

            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card bg-light text-dark shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-envelope text-primary"></i> Email</h5>
                            <p class="card-text">omprakashnehra078@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card bg-light text-dark shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-phone-alt text-success"></i> Phone</h5>
                            <p class="card-text">+91 91211 59845</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card bg-light text-dark shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-map-marker-alt text-danger"></i> Address</h5>
                            <p class="card-text">XLovely Professional Univeristy, Phagwara, Punjab -144411, India</p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-5 text-white-50">We usually respond to queries within 24-48 hours. For emergencies, please use the hotline or local authorities immediately.</p>
        </div>
    </div>
</div>
@endsection
