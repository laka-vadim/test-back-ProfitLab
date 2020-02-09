<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyncController extends Controller
{
    function validation($request) {
        return $this->validate($request, [
            'title' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|string|email',
            'pass' => 'required|string|min:5'
        ]);
    }

    public function test(Request $request) {

        $data = $this->validation($request);
        return response($data);
    }


}
