<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class IsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        $request->is_logged_in kosong balikin aja ke home, ngga peduli udah log in atau belum
        if (empty($request->is_logged_in)) {
            return redirect('/home');
        }
        else if (Crypt::decrypt($request->is_logged_in) == 'no') {
            return $next($request);
        }
        else {
            abort(404, 'Parameter Not Found');
        }
    }
}
