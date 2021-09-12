<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reading;

class ReadingController extends Controller
{
    //List all readings for user
    public function index(){
        $readings = Reading::where('user_id',Auth::user()->id)->get();
        //dd($readings);
        return view('user/readings/index',compact('readings'));
    }

    //Show reading input page
    public function create(){
        return view('user/readings/create');
    }

    // store reading
    public function store(Request $request){
        $reading = new Reading;
        $reading->user_id =Auth::user()->id;
        $reading->ph = $request->ph;
        $reading->high_range_ph = $request->high_range_ph;
        $reading->ammonia = $request->ammonia;
        $reading->nitrite = $request->nitrite;
        $reading->nitrate = $request->nitrate;
        $reading->water_changed = $request->water;
        $reading->save();
        return redirect()->route('user.dashboard')->with('status','Reading Saved');
    }   

    // remove reading
    public function delete(){

    }
}
