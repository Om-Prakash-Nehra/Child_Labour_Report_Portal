@extends('layouts.app')

@section('title', 'Report a Crime')

@section('content')
<div class="bg-cover" style="background-image: url('/images/report-bg.jpg'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="overlay d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.5); min-height: 100vh; padding: 60px 20px;">
        <div class="container">
            <div class="card shadow-lg p-4" style="max-width: 700px; margin: auto; background-color: rgba(255, 255, 255, 0.95); border-radius: 15px;">
                <h2 class="text-center mb-4" style="color: #333;">Report a Child Labour Case</h2>

                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('report.send') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="crime_type" class="form-label fw-bold">Crime Type</label>
                        <input type="text" class="form-control" id="crime_type" name="crime_type" placeholder="e.g., Forced Labor" required>
                    </div>

                    <input type="hidden" id="location" name="location">

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Provide detailed information..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="proof_image" class="form-label fw-bold">Upload Proof Image (optional)</label>
                        <input type="file" class="form-control" id="proof_image" name="proof_image" accept="image/*">
                    </div>

                    <div class="alert alert-warning mt-4 small" role="alert" style="background-color: #fff3cd;">
                        <strong>Note:</strong> Submitting false or misleading reports is a serious offense. Legal action may be taken against repeated fake reporting.
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5 py-2" style="border-radius: 30px; font-weight: 600;">
                            Submit Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const coords = position.coords.latitude + "," + position.coords.longitude;
                document.getElementById('location').value = coords;
            }, function (error) {
                console.warn('Geolocation error:', error.message);
            });
        } else {
            console.warn('Geolocation not supported by this browser.');
        }
    }
</script>
@endsection
