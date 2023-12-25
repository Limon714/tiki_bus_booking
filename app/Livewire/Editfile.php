<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;

class Editfile extends Component
{
    public function render()
    {
        //
    }

    public function edit($id){
        $info = Location::find($id);
        return view ('livewire.editfile',[
            'info'=>$info
           ]);
      }
    
}
