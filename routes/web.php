<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/report', 'report');
Route::view('/contact', 'contact');

Route::post('/report', [MailController::class, 'send'])->name('report.send');

Route::get('/cases', [MailController::class, 'showCases'])->name('cases.show');

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth.admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::put('/admin/report/{id}/solve', function ($id) {
        $report = \App\Models\Report::findOrFail($id);
        $report->status = 'solved';
        $report->save();

        return redirect()->route('admin.dashboard')->with('success', 'Case marked as solved!');
    })->name('admin.update-status');
});
