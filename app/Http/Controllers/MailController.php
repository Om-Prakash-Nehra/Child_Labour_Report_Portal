<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;  
use App\Models\Report;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'crime_type' => 'required|string|max:255',
            'location' => 'required|string',
            'description' => 'required|string',
            'proof_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('proof_image')) {
            $imagePath = $request->file('proof_image')->store('proof_images', 'public');
        }

        Report::create([
            'crime_type' => $request->crime_type,
            'location' => $request->location,
            'description' => $request->description,
            'proof_image_url' => $imagePath,
            'status' => 'pending',
        ]);

        $imageNote = $imagePath
            ? "\nProof image attached: " . asset('storage/' . $imagePath)
            : "\nNo proof image provided.";

        Mail::raw(
            "🚨 Child Labour Case Reported 🚨\n\n" .
            "Crime Type: {$request->crime_type}\n" .
            "Location Link: {$request->location}\n" .
            "Description:\n{$request->description}\n" .
            "{$imageNote}",
            function ($message) {
                $message->to('omprakashnehra078@gmail.com')
                        ->subject('New Child Labour Case Reported');
            }
        );

        return back()->with('success', 'Your report has been sent.');
    }

    public function showCases()
{
    $today = now()->startOfDay();

    $totalReportsToday = Report::where('created_at', '>=', $today)->count();
    $solvedCasesToday = Report::where('created_at', '>=', $today)->where('status', 'solved')->count();
    $pendingCasesToday = Report::where('created_at', '>=', $today)->where('status', 'pending')->count();

    $reportsToday = Report::where('created_at', '>=', $today)->get();
    $allReports = Report::all(); 

    return view('cases', compact('totalReportsToday', 'solvedCasesToday', 'pendingCasesToday', 'reportsToday', 'allReports'));
}


    public function markAsSolved($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'solved';
        $report->save();

        return back()->with('success', 'Case marked as solved.');
    }
}
