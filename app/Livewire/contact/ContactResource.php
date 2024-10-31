<?php

namespace App\Livewire\contact;

use App\Models\Contact;
use Livewire\Component;
use App\Services\CacheStatusModelServices;

class ContactResource extends Component
{

    public $ContactTypeToshow = 1236;
    public $contact_type;

     public $contactObject;



    public $editContact=1;

    public function mount($id=1) {

        $contact= Contact::with(['contactTypeName'])->findOrfail($id);
       
        $this->contactObject=$contact;

        
    }

    public function contactType()
    {
        $this->ContactTypeToshow = $this->contact_type;
    }

    public function render()
    {
        $contacts= Contact::get();
        $statuses = CacheStatusModelServices::getData();

    
        // dd($contacts[0]['attchments']['contactImage1']);
        //  foreach ($contacts[0]['attchments'] as $key => $value) {
        //     // dd($contacts[0]['attchments']);
        
        // }
       
        return view('livewire.contact.contact-resource',compact('contacts','statuses'));
    }
}
