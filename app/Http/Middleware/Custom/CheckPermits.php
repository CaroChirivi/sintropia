<?php

namespace App\Http\Middleware\Custom;

use Illuminate\Contracts\Auth\Guard;

use Closure;

class CheckPermits
{

    protected $auth;
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (getPermit() == null) {
            return redirect()->to('panel')->with('error', "No tiene permisos de usuario para esta acción");
        }

        return $next($request);
    }
}
