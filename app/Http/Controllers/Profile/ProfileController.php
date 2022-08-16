<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ActiveCode;
use App\Models\Basket;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Notifications\ActiveCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        $user_this = Auth::user();
        return view('profile.home' , compact('user_this'));
    }

    public function getVerifyPhone(Request $request)
    {
        return view('profile.2factor');
    }


    public function postVerifyPhone(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|in:off,sms',
            'phone'=> ['required_unless:type,off',Rule::unique('users','phone_number')->ignore($request->user()->id)]
        ]);

        if ($data['type'] == 'sms'){
            if ($request->user()->phone_number !== $data['phone']){
                $code = ActiveCode::generateCode($request->user());
                $request->session()->flash('phone',$data['phone']);
//                $request->user()->notify(new ActiveCodeNotification($code,$data['phone']));
                return redirect(route('phone.verify'));
            }
            //code Generate
            //send sms
        }else{
            $request->user()->update([
                'two_factor_type' => 'sms'
            ]);
        }
        if ($data['type'] == 'off'){
            $request->user()->update([
                'two_factor_type' => 'off'
            ]);
        }else{
            $request->user()->update([
                'two_factor_type' => 'sms'
            ]);
        }
        return back();
    }

    public function getPhoneVerifyCode(Request $request)
    {
        $request->session()->reflash();
        return view('profile.phone-verify');
    }

    public function postPhoneVerifyCode(Request $request)
    {
        $request->validate([
            'token' => 'required'
        ]);
        $status = ActiveCode::verifyCode($request->token,$request->user());
        if ($status){
            $request->user()->activeCode()->delete();

            $request->user()->update([
                'two_factor_type' => 'sms',
                'phone_number' => $request->session()->get('phone')
            ]);
        }else{
            alert()->error('کد تایید بدرستی وارد نشده است','متن خطا')->persistent('خیلی خوب');
            return redirect('/profile/twofactor');
        }
        return redirect('/profile');
    }
}
