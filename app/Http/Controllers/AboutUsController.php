<?php
/**
 * Created by PhpStorm.
 * User: HTcoding
 * Date: 5/6/2021
 * Time: 7:02 PM
 */

namespace App\Http\Controllers;

use App\Models\Staffinfo;
use Illuminate\Http\Request;

class AboutUsController extends Controller {
/*
    public function index(Request $req)
    {
        return $req->method();   // GET
        return $req->path();    //  about
        return $req->url();     //  http://laravel.loc/about
        return $req->fullUrl(); //  http://laravel.loc/about?pag=2&id=21
    }

*/


    public function about(){
//        $staffs = Staffinfo::all();
//        $staffs = Staffinfo::orderBy('name')->get();
        $staffs = Staffinfo::orderBy('name')->paginate(10);
//        dd($staffs);
//        return view('site.about')->with('staffs' , $staffs);
        return view('site.about',compact('staffs'));
    }

    public function search(Request $request){
//        $s = $_GET['s'];
        $s = $request->s;
//        dd($s);
//        $staffs = Staffinfo::query()->where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        $staffs = Staffinfo::where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        return view('site.about',compact('staffs'));
    }

}