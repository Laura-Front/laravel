<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLanguage
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
//        $locale = session('locale');
//        App::setLocale($locale);

        if(!in_array($request->language,['en','hy'])) {
            $request->language = config('app.fallback_locale');
        }
        App::setLocale($request->language);
        return $next($request);
    }
}
