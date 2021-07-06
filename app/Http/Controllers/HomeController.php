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
//        $this->middleware('role:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = 'Dashboard';
        return view('pages.admin.home', compact('page'));
    }
    public function index1()
    {
        $page = 'Dashboard';
        return view('pages.vet.home', compact('page'));
    }
    public function index2()
    {
        return view('pages.site.home');
    }
}
