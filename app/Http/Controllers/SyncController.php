<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyncController extends Controller
{
    function validation($request) {
        return $this->validate($request, [
            'title' => 'required',
            'city' => 'required',
            'email' => 'required|email'
        ]);
    }

    public function test(Request $request) {

        $data = $this->validation($request);
        return response($data)->header('Access-Control-Allow-Origin', '*');
    }


}
