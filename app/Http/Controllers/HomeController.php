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
    public function tenantIndex()
    {
        return view('tenant.index');
    }

    public function ownerIndex()
    {
        return view('owner.index');
    }
    
    public function staffIndex()
    {
        return view('staff.index');
    }

}