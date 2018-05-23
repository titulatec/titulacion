<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Laracasts\Flash\Flash;

use Closure;

class IsAcademico
{
    protected $auth;

    public function __construct(Guard $auth)
    {
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
        if ($this->auth->user()->rol != "jefe") {
            $this->auth->logout();
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                Flash::error("Has intentado acceder a una pagina o una opción no permitida para ti, por seguridad se ha terminado la sesión.");
                return redirect()->to('login');
            }
        }

        return $next($request);
    }
}
