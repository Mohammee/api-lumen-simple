<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\App;

class Lang{

    public function handle(Request $request ,Closure $next)
    {

        if($request->wantsJson())
        {
            $locale = $request->header('x-app-locale');
            if(array_key_exists($locale , config('languages'))){
                App::setLocale($locale);
            }else{
                App::setLocale(config('app.fallback_locale'));
            }
        }


//        dd(config('app.locale'));
        return $next($request);
    }
}
