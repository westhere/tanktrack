<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reading;
use App\Preferences;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
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
        $preferences = Preferences::where('user_id',Auth::user()->id)->first();
        $readings = Reading::where('user_id',Auth::user()->id)->get();
        return view('user/home', compact('readings','preferences'));
    }
}
