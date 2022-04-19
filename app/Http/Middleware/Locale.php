<?php

namespace App\Http\Middleware;

use Config;
use App;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App as FacadesApp;
use Illuminate\Support\Facades\Config as FacadesConfig;
use Illuminate\Support\Facades\Session;

class Locale
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
        $locale = Session::get('locale');
        if (!Session('locale')) {
            Session::put('locale', FacadesConfig::get('app.locale'));
        }
        FacadesApp::setlocale($locale, FacadesConfig::get('app.locale'));
        return $next($request);
    }
}
