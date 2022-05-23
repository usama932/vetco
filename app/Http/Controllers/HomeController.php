<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('role:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){




        if(Auth::user()->hasrole('pet')){
            return view('pages.site.home');
        }
        elseif(Auth::user()->hasrole('vet')){
            $page = 'Dashboard';
            return view('pages.vet.home', compact('page'));
        }
        elseif(Auth::user()->hasrole('admin')){
            $page = 'Dashboard';
            return view('pages.admin.home', compact('page'));
        }
    }
    // public function index1()
    // {
    //     $page = 'Dashboard';
    //     return view('pages.vet.home', compact('page'));
    // }
    // public function index2()
    // {
    //     return view('pages.site.home');

}
