<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location as UserLocation;
class Location extends Controller
{
    public function index(){
        $data = UserLocation::get();
        return view ('welcome',[
         'data'=>$data
        ]);
      }


  public function create(Request $request){

    $lc = new UserLocation;
    $lc->location = $request->location;
    $lc->shift = $request->shift;
    $lc->save();

    return redirect(route('home'))->with('status','Sucessfully Added');
  
  }
 

  public function edit($id){
    $info = UserLocation::find($id);
    return view ('livewire.editfile',[
        'info'=>$info
       ]);
  }

  public function update(Request $request, $id){
    $lc = UserLocation::find($id);
    $lc->location = $request->location;
    $lc->save();

    return redirect(route('dashboard'))->with('status','Update Sucessfully');
  }

  public function delete($id){
   UserLocation::destroy($id);
   return redirect(route('home'));
    
  }

  // show html

  public function view(){
    $data = UserLocation::get();
    return view('layouts.view',[
      'data'=>$data
     ]);
  }

 




}
