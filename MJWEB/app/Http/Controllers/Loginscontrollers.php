<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Loginscontrollers extends Controller
{
    public function Fazerlogin()
    {
    	return view('login', [
    		"title" => 'Tela de login'
    	]);
    }

    public function login()
    {
    	return 'ok';
    }
}
