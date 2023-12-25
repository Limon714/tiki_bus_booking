<?php

namespace App\Http\Controllers;

use App\Models\Trip as ModelsTrip;
use Illuminate\Http\Request;

class Trip extends Controller
{
    public function create(Request $request){

        $lc = new ModelsTrip();
        $lc->name = $request->name;
        $lc->phone_number = $request->phone_number;
        $lc->transaction_id = $request->transaction_id;
        $lc->price = $request->price;
        $lc->shift = $request->input('shift');
        $lc->location = $request->input('location');
        $lc->date = $request->date;
        $lc->total_seat = $request->total_seat;
        $lc->available_seat = $request->available_seat;
        $lc->save();
    
        return redirect(route('home'))->with('status','Sucessfully Added');
      
      }
}
