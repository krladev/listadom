<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function home(){
        return view('public.home');
    }

    public function login(){
        return view('public.login');
    }

    public function register(){
        return view('public.register');
    }

}
