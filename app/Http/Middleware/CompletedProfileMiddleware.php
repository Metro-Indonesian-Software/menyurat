<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompletedProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if(
            $user->address !== null &&
            $user->phone_number !== null &&
            $user->postal_code !== null &&
            $user->logo_url !== null
        ) {
            return $next($request);
        }

        return redirect()->route("profile.edit")->with("alert-warning", "Anda belum melengkapi data profil perusahaan, silahkan lengkapi profil perusahaan terlebih dahulu.");
    }
}