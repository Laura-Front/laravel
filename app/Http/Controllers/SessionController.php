<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $req)
    {
        if($req->session()->has('name')){
           echo $req->session()->get('name');
        }else {
            echo 'No Data In The Session';
        }

    }

    public function setSessionData(Request $req)
    {
        $req->session()->put('name', 'Laura');
        echo 'Data has been added to the session';
    }

    public function unsetSessionData(Request $req)
    {
        $req->session()->forget('name');
        echo 'Data has been removed from session';
    }
}
