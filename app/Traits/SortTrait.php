<?php

namespace App\Traits;

use Livewire\Attributes\Url;


 
trait SortTrait  {

   
   
    
    // #[Url(history:true)]
    // public $sortBy='created_at';
 
    #[Url(history:true)]
    public $sortdir='DESC';

 
    public $editId;

 
    public function setSortBy($sortByCol) {
        
        if($this->sortBy===$sortByCol) {
           
            $this->sortdir =($this->sortdir == "ASC") ? "DESC" : "ASC";
            return;
        }
     
        $this->sortBy=$sortByCol;
        $this->sortdir='DESC';

    }

    public function updated($prop) {

        $this->resetPage();

    }




 
}

 