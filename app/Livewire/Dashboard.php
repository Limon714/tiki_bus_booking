<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $data = Location::get();
        return view('livewire.dashboard',[
            'data'=>$data
           ]);
    }

    

}
