<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*session(['gekif'=> 'fikar']);

        return session('gekif');*/

//        $request->session()->forget('felix');

        $request->session()->flush();

        return $request->session()->all();

//        return view('home');
    }
}
