<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoAddressController extends Controller
{
    public function autocomplete(Request $request){
        $this->validate($request,[
            'address'=>'required',
        ]);
    }
}