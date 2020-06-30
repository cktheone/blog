<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
   
    public function register()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $data = $request->all();
        return view('welcome', ['data' => $data]);
    }

}