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
                        @if($report->location)
                            <a href="{{ Str::startsWith($report->location, ['http://', 'https://']) ? $report->location : 'https://www.google.com/maps?q=' . $report->location }}" target="_blank">
                                Open Location
                            </a>
                        @else
                            No Location
                        @endif
                    </td>
                    <td>{{ $report->description }}</td>
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
