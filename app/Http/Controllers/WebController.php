<?php

namespace App\Http\Controllers;

use App\Services\CookieAuthUser;


class WebController extends Controller
{
    public function home(){
        return view('public.home');
    }

    public function login(){
        return view('public.auth.login');
    }

    public function register(){
        return view('public.auth.register');
    }

    public function forgot(){
        return view('public.auth.forgot');
    }

    public function dash(CookieAuthUser $cookieAuth){
        if(!$cookieAuth->getUser()){
            return redirect('login');
        }

        $data = [
            'auth' => true,
        ];

        return view('dash.home', $data);
    }
}
