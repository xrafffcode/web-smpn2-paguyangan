<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\StoreLoginRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function store(StoreLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home');
        }

        Swal::toast('Email atau password salah', 'error')->timerProgressBar();

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Swal::toast('Berhasil logout', 'success')->timerProgressBar();

        return redirect()->route('login');
    }
}
