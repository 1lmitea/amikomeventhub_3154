<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // WAJIB DITAMBAHKAN AGAR BISA CEK LOGIN

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Mengecek apakah ada user yang sedang login DAN role-nya adalah 'admin'
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request); // Jika benar admin, izinkan masuk ke halaman yang dituju
        }

        // Jika belum login atau bukan admin, lempar kembali ke halaman login
        return redirect('/admin/login')->with('error', 'Anda tidak memiliki hak akses admin.');
    }
}
