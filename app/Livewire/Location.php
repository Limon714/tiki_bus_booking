<?php

namespace App\Livewire;

use App\Models\Trip;
use Livewire\Component;

class Location extends Component
{
    public function render()
    {
       //
    }

    public function addlocation(){
        $data = Trip::get();
        return view('livewire.location',[
          'data'=>$data
         ]);
      }
}
