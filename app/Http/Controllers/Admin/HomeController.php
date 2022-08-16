<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','auth.admin']);
    }
    public function index()
    {
        $user_this = Auth::user();
        return view('dashboard.home' , compact('user_this'));
    }
}
