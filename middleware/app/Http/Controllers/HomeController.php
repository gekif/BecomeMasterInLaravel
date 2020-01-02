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
//        $request->session()->put(['fikar' => 'gekif']);

//        session(['felix' => 'siauw']);

//        echo $request->session()->get('Fikar');

         return $request->session()->all();

//        return view('home');
    }
}
