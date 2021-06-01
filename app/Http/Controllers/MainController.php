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

class MainController extends Controller {

    public function home(){
        return view('site.home');
    }

    public function about(){
//        $staffs = Staffinfo::all();
//        $staffs = Staffinfo::orderBy('name')->get();
        $staffs = Staffinfo::orderBy('name')->paginate(10);
//        dd($staffs);
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