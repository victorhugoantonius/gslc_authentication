<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
// use Auth;
use \Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class GoogleController extends Controller
{
    public function redirectGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
        $u = Socialite::driver('google')->user();

        $check = User::where('google_id',$u->getId())->first();
        if($check) {
            FacadesAuth::login($check);

            return redirect()->intended('home');
        } else {
            $new = User::create([
                'name' => $u->getName(),
                'email' => $u->getEmail(),
                'google_id' => $u->getId(),
                'password' => bcrypt('123123'),
            ]);
            FacadesAuth::login($check);
            return redirect()->intended('home');
        }
    }
}
