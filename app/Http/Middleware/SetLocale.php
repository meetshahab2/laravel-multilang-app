<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class SetLocale
{
    public function handle($request, Closure $next)
    {

        App::setLocale($request->segment(1));
        return $next($request);
    }
}
