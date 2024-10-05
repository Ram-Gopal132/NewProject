<?php

namespace App\Http\Middleware;

use App\Http\Controllers\usercontroller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class AllowPerson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {

    //     $allow_person=['Ram Gopal','Raj','Nancy'];
    //    $person= $request->input('name');

    //    if(in_array($person,$allow_person))
    //    {
    //     return $next($request);
    //    }
    //    return response(' Sorry You not allow',403);

        
    //  }
}
