<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Preferences;
use App\User;

class PreferencesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the Preferences dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $preferences = Preferences::where('user_id',Auth::user()->id)->first();
        return view('user/preferences',compact('preferences'));
    }

    /**
     * Store Preferences
     *
     */
    public function store(request $request)
    {
        $preferences = Preferences::where('user_id',Auth::user()->id)->first();
        $preferences->ph = $request->ph;
        $preferences->high_range_ph = $request->high_range_ph;
        $preferences->ammonia = $request->ammonia;
        $preferences->nitrite = $request->nitrite;
        $preferences->nitrate = $request->nitrate;
        $preferences->save();
        return redirect()->back()->with('status','Preferences saved');
    }
}
