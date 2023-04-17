<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
class LoginController extends \SCart\Core\Front\Controllers\Auth\LoginController
{
    public function __construct()
    {
        parent::__construct();
    }
    
     public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        //return $this->loggedOut($request) ?: redirect(sc_route('login'));
        return $this->loggedOut($request) ?:redirect('/');
    }

}
