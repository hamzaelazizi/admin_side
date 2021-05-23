<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $success = \File::copy(Storage::disk('out')->path('Logo/malta.jpg'),Storage::disk('public')->path('Logo/malta.jpg'));
       
       return view('home');
    }
    
}
