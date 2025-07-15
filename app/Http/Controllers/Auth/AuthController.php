<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function login(Request $req)
    {
        $req->validate([
            'username'  => 'required',
            'password'  => 'required',
            'captcha'   => 'required'
        ]);

        $credentials = $req->only('username', 'password');

        if ($req->captcha == $req->captchaReload and Auth::attempt($credentials)) {

            $cekStatus = User::where('username', $req->username)->first();
            $status = $cekStatus->st_user;

            if ($status == 'N') {
                $LogAksi        = 'Login';
                $Keterangan     = 'Gagal Login, User & Password Sesuai, Status User Tidak Aktif';
                $getUser        = $req->username;
                \LogNote::LogGagalLogin('Gagal Login', $LogAksi, $Keterangan, $getUser);

                Auth::logout();
                return redirect()->route('login')->with(['msgGagalLogin' => 'Gagal Login']);
            } else {

                $LogAksi        = 'Login';
                $Keterangan     = 'Berhasil Login';
                $getUser        = $req->username;

                \LogNote::LogLogin('Login', $LogAksi, $Keterangan, $getUser);

                // Session::regenerate();
                Session::regenerate();
                // dd(Auth::id(), session()->getId());

                // dd(session()->getId());



                // dd(Auth::user()->roles);

                return redirect()->intended('dashboard')->with(['notifLogin' => 'Login Berhasil']);
            }
        }

        $LogAksi        = 'Login';
        $Keterangan     = 'Gagal Login, Username/Password/Captcha Tidak Sesuai';
        $getUser        = $req->username;
        \LogNote::LogGagalLogin('Gagal Login', $LogAksi, $Keterangan, $getUser);

        return redirect()->route('login')->with(['msgGagalLogin' => 'Gagal Login']);
    }

    public function logout(Request $req)
    {
        $LogAksi        = 'Logout';
        $Keterangan     = 'Logout Berhasil, Berhasil Logout';
        $getUser        = $req->username;
        \LogNote::LogLogout('Logout', $LogAksi, $Keterangan, $getUser);

        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect()->route('login')->with(['notifLogout' => 'Logout Berhasil']);
    }
}
