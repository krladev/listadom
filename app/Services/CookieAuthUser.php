<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonalAccessToken;


class CookieAuthUser{

    private $user;

    public function __construct(Request $request)
    {
        $token = $request->cookie('user-token');
        $paToken = PersonalAccessToken::findToken($token);
        if($paToken){
            $user = User::find($paToken->tokenable_id);
            if($user){
                $this->user = $user;
            }
        }
    }

    public function getUser()
    {
        return $this->user;
    }

}
