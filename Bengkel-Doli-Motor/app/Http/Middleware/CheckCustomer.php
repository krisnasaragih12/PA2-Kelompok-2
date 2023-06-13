<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class CheckCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $customerLogin = $request->session()->get('set_customerdata');
        
        //Cek session customer
        if(!$customerLogin){ // jika tidak ada

            //kembali ke login
            return redirect('/login')->with('error', 'Silahkan Login Terlebih dahulu');
        }

        //kembali ke request
        return $next($request);
    }
}
