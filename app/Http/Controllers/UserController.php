<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * User login form processing
     * AA
     * @return \Illuminate\Http\Response
     */
    public function userLogin(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $email = User::where('email', $email)->first();

        if($email) {

        }
    }
}
