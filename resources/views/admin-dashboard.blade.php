@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-5">
    <h2>Admin Dashboard</h2>

    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger mb-3">Logout</button>
    </form>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Crime Type</th>
                <th>Location Link</th>
                <th>Description</th>
                <th>Proof Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->crime_type }}</td>
                    <td>
                        <a href="{{ $report->location }}" target="_blank">Open Location</a>
                    </td>
                    <td>{{ $report->description }}</td>
                    <td>
                        @if($report->proof_image_url)
                            <a href="{{ asset('storage/' . $report->proof_image_url) }}" target="_blank">View Image</a>
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ ucfirst($report->status) }}</td>
                    <td>
                        @if($report->status == 'pending')
                            <form method="POST" action="{{ route('admin.update-status', $report->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Mark as Solved</button>
                            </form>
                        @else
                            Solved
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
