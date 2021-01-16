<?php

namespace App\Http\Middleware;

use Closure;
use PhpParser\Node\Stmt\Return_;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('api_key');
        if($token != 'ABCDEFGHIJK'){
            return response()->json(['pesan' => 'Plz Token API nya'], 400);
        }
        return $next($request);
    }
}
