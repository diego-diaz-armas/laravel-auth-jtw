<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class varificarUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //condicion si el usuario no ingresa un id lo redireccionamos a otro lado
        if(!$request->has('admin') || $request->admin !='123'){
            return redirect(route('no_admin'));
        }
        return $next($request);
    }
}
