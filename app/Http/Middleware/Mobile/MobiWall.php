<?php

namespace App\Http\Middleware\Mobile;

use Closure;
use Illuminate\Http\Request;

class MobiWall
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token     =    $request->token;

        if($token != "Romeo2021"){

         return response()->json(['message' => 'Damnn , You cant get data , Authorized only!!!'],401);

        }

        else{

        return $next($request);


        }
    }
}
