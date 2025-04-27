<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::get('is_admin')) {
            return redirect()->route('admin.login')->withErrors(['Please login as admin first.']);
        }

        return $next($request);
    }
}
