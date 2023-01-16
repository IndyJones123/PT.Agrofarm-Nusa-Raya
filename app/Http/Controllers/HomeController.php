<?php

namespace App\Http\Controllers;

use App\Models\_data_perusahaan;

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
        $dataperusahaan = _data_perusahaan::count();
        return view('Admin/home', compact(["dataperusahaan"]));
    }
}
