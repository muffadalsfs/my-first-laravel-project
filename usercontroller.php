<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller
{
    //
    function login(Request $request){
        $request ->session()->put('user',$request->input('user'));
        return redirect ('list');
    }
}
