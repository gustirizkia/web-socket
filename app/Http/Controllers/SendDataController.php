<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendDataController extends Controller
{
    public function create(Request $request){
        $data = $request->all();

        return view('welcome', [
            'data' => $data
        ]);
    }
}
