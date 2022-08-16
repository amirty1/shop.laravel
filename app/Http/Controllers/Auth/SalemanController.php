<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Saleman;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;

class SalemanController extends Controller
{
      /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index(){
        return view('profile.register');
    }



    public function dashboard(){
        return view('dashboard.home');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:saleman'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string', 'max:16'],
            'code' => ['required', 'string', 'max:10'],
            'birthcode' => ['required', 'string', 'max:14'],
            'market_name' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Saleman
     */





    public function register(Request $request)
    {


            $student = new User();
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->phone_number = $request->input('phone_number');
            $student->is_operator = '1';

            $student->password= Hash::make($request->password);

            $student->save();




            $student = new Saleman();
            $code = random_int(100000, 999999);

            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->phone_number = $request->input('phone_number');
            $student->code = $request->input('code');
            $student->birthcode = $request->input('birthcode');

            $student->password= Hash::make($request->password);

            $student->market_name = $request->input('market_name');
            $student->market_id = $request->input('market_id').$code;
            $student->save();

            // Auth::user()->assignRole('writer' , 'admin');

            return redirect(route('dashboard'))->with('status','Student Added Successfully');

    }
}
