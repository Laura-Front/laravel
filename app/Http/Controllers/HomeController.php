<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.home');
    }

    public function locale($locale)
    {
        if( !in_array($locale,['en','hy'])){
            $locale =  config('app.locale');
        }
//        Session::put('locale', $locale);
        session(['locale'=> $locale]);

        App::setLocale($locale);
//        dd(App::getLocale());
        return redirect()->back();
    }
}
