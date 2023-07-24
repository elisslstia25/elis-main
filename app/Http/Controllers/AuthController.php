<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');

    }

    public function loginProcess()
    {
        if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('admin');
        }

		if (auth()->guard('dosen')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('dosen');
        }

		return redirect('login');
    }


    public function logout(Request $request)
    {
        

        return redirect('login');
}

}

