<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class RolesAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$akses): Response
    {
        if (in_array(Auth::user()->roles, $akses)) {
            return $next($request);
        }
        return redirect()->route('not-found')->with(['notFound' => 'Halaman tidak ditemukan']);
    }
}
