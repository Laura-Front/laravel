<?php
/**
 * Created by PhpStorm.
 * User: HTcoding
 * Date: 5/6/2021
 * Time: 7:02 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function home(){
        return view('site.home');
    }

    public function about(){
        return view('site.about');
    }

    public function reviews(){
        return view('site.reviews');
    }

    public function reviews_check(Request $request){
        dd($request->all());
    }

}