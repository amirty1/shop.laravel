<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //    $role = Role::create(['name' => 'writer']);
        //    $permission = Permission::create(['name' => 'edit articles']);

//        Auth::user()->assignRole('writer');
        $this->seo()
            ->setTitle('فروشگاه شاپ')
            ->setDescription('خرید از یک فروشگاه آنلاین شاپ، محصولات ایرانی و حمایت از کالای ایرانی ...');
        $products = Product::latest()->get();
        return view('index',compact('products'));
    }
}
