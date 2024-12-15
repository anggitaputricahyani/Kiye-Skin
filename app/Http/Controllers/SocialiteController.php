<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite; 
use App\Models\User; 

class SocialiteController extends Controller
{
    public function redirect() {
        
        return Socialite::driver('google')
        ->with(['prompt' => 'select_account']) // Tambahkan parameter ini
        ->redirect();

    }

    public function callback() {
        $userFromGoogle = Socialite::driver('google')->stateless()->user();

        $userFromDb = User::where('google_id' , $userFromGoogle->getId())->first();

        if(!$userFromDb){
            $userFromDb = new User();
            $userFromDb->email = $userFromGoogle->getEmail();
            $userFromDb->google_id = $userFromGoogle->getId();
            $userFromDb->name = $userFromGoogle->getName();

            $userFromDb->save();

            auth('web')->login($userFromDb);
            session()->regenerate();
            return redirect('/');
        }

        auth('web')->login($userFromDb);
            session()->regenerate();
            return redirect('/');
    }

    public function logout(Request $request){
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
