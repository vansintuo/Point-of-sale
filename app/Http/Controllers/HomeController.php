<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user=Auth::user()->inactived;
        if($user=='1'){
        return view('home.home_page');
    }
    else{
        return view('dashboard');
    }
    }


}
