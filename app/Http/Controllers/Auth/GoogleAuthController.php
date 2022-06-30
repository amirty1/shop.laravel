<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Models;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    use TwoFactorType;

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        try {
            $googleUser=Socialite::driver('google')->stateless()->user();
            $user=User::where('email',$googleUser->email)->first();
            if (! $user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => bcrypt(\Str::random(16))
                ]);
            }
            auth()->loginUsingId($user->id);
            //TODO Sweet Alert
            return $this->loggedIn($request,$user) ?:redirect(route('login'));

        }catch (\Exception $e){
            alert()->error('خطا رخ داد','در ورود به سایت خطایی رخ داد')->persistent('متوجه شدم');
            return redirect(route('login'));
        }
    }
}
