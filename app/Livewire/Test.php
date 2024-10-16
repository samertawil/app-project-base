<?php

namespace App\Livewire;

use App\Models\Ability;
use Livewire\Component;

class Test extends Component
{
    // protected $listeners = ['re' => '$refresh'];
    public function destroy($id) 
    {
        
       $x= Ability::where('id',$id)->delete();
    //    $this->resetPage();
    //    dd($id);
    //    $this->dispatch('re');
    }
    public function render()
    {
       $abilitties= Ability::get();
        return view('livewire.test',compact('abilitties'));
    }
}
