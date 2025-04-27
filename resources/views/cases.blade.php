@extends('layouts.app')

@section('title', 'Cases Reported Today')

@section('content')
<div class="bg-cover" style="background-image: url('/images/cases-bg.jpg'); background-size: cover; background-position: center;">
    <div class="overlay" style="background-color: rgba(0, 0, 0, 0.6); min-height: 100vh; padding: 80px 20px; color: white;">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Today's Reported Cases</h1>
            <p class="lead mb-5">Live tracking of reports and action status.</p>

            <div class="row justify-content-center mb-5">

                <div class="col-md-4 mb-4">
                    <div class="card bg-light text-dark shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-file-alt text-primary"></i> Reports Sent</h5>
                            <p class="display-6 fw-bold">{{ $totalReportsToday ?? 0 }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card bg-light text-dark shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-check-circle text-success"></i> Cases Solved</h5>
                            <p class="display-6 fw-bold">{{ $solvedCasesToday ?? 0 }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card bg-light text-dark shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-hourglass-half text-warning"></i> Pending Cases</h5>
                            <p class="display-6 fw-bold">{{ $pendingCasesToday ?? 0 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-5 text-white-50">Statistics are updated automatically as new cases are reported.</p>
        </div>
    </div>
</div>
@endsection
