<?php

namespace App\Http\Controllers\Auth;

use App\Models\ActiveCode;
use App\Notifications\ActiveCodeNotification;
use App\Notifications\LoginNotification;
use Illuminate\Http\Request;

trait TwoFactorType
{

    public function loggedIn(Request $request, $user)
    {
        if ($user->hasTwoFactorAuthenticatedEnabled()){
            auth()->logout();
            $request->session()->flash('auth',[
                'user_id' => $user->id,
                'using_sms' => false,
                'remember' => $request->has('remember')
            ]);

            if ($user->two_factor_type == 'sms'){
                $code = ActiveCode::generateCode($user);
                $request->user()->notify(new ActiveCodeNotification($code));

                $request->session()->push('auth.using_sms' , 'true');

            }
            return redirect(route('auth.token'));
        }
        $user->notify(new LoginNotification());
        return false;

    }

}
