<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/')->with(['error' => 'Anda Sedang Login!']);
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::Attempt($data)) {
            return redirect('/')->with(['success' => 'Login Berhasil!!']);
        } else {
            return redirect('/login')->with(['error' => 'Username atau Password Salah!!']);
        }
    }
    public function actionLogout()
    {
        Auth::logout();
        return redirect('/login')->with(['success' => 'Anda Berhasil Logout!!']);
    }
}
Route::get('/', function (){
    return view('home.dashboard');
});