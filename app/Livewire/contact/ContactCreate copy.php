<?php

namespace App\Livewire\contact;

use App\Models\Status;
use App\Models\Address;
use App\Models\Contact;
use Livewire\Component;
use App\Traits\testTrait;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadingFilesTrait;
use App\Services\CacheModelServices;
use Illuminate\Support\Facades\Auth;
use App\Services\CacheStatusModelServices;

class ContactCreate extends Component
{
    use UploadingFilesTrait;
    use WithFileUploads;

    public $full_name;
    public $short_description;
    public $personal_phone_primary;
    public $personal_phone_secondary;
    public $work_phone_primary;
    public $work_phone_secondary;
    public $identity_number;
    public $nick_name;
    public $fname;
    public $sname;
    public $tname;
    public $lname;
    public $responsible;
    public $region_id;
    public $city_id;
    public $neighbourhood_id;
    public $location_id;
    public $address_name;
    public $address_specific;
    public $address_type;
    public $notes;
    public $description;
    public $note;

    public $image1 = 'http://127.0.0.1:8000/assets/img/faces/5.jpg';

    public $ContactTypeToshow = 1236;
    public $contact_type;
    public $contactImage;

    public $templates = [];   // dropdown value
    public $all_templates;
    public $questions = [''];
    public $saved = FALSE;
    public $properties;


    public function mount()
    {

        $this->all_templates = Status::where('p_id_sub',1246)->get();

    }

    public function addQuestion()
    {
        $this->questions[] = '';
    }

    public function removeQuestion($index)
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }


    public function store()
    {
        foreach ($this->templates as $key => $value) {

           $x1[$value] =  $this->questions[$key]  ;

             if (key($x1)=='Email') {
              
                   $this->properties  =$this->questions[$key];

                   $this->validate([ 'properties' => ['required','email'], ]);
                dd(1);
             }
          }
      
       
        foreach ($this->templates as $key => $value) {
          $x1[$value] =  $this->questions[$key]  ;
        }


        $this->validate([
            // 'region_id' => ['required',],
            // 'city_id' => ['required',],
            // 'address_type' => ['required', 'exists:statuses,id'],
            'contact_type' => ['required', 'exists:statuses,id'],
            'full_name' => ['required'],
            'contactImage.*' => ['nullable', 'image', 'max:1024'],
        ]);




        $attchments =  UploadingFilesTrait::uploadSingleFile($this->contactImage, 'contactProfile', 'public');

        DB::beginTransaction();
        try {

            // $addessId =  Address::create([
            //     'region_id' => $this->region_id,
            //     'city_id' => $this->city_id,
            //     'neighbourhood_id' => $this->neighbourhood_id,
            //     'location_id' => $this->location_id,
            //     'address_specific' => $this->address_specific,
            //     'address_name' => 'عنوان',
            //     'address_type' => $this->address_type,
            //     'user_id' => Auth::id(),
            //     'notes' => $this->notes,
            // ]);
          
            Contact::create([
                'contact_type' => $this->contact_type,
                'identity_number' => $this->identity_number,
                'full_name' => $this->full_name,
                'nick_name' => $this->nick_name,
                'fname' => $this->fname,
                'sname' => $this->sname,
                'tname' => $this->tname,
                'lname' => $this->lname,
                'responsible' => $this->responsible,
                // 'address_id' => $addessId->id,
                'short_description' => $this->short_description,
                'description' => $this->description,
                'personal_phone_primary' => $this->personal_phone_primary,
                'personal_phone_secondary' => $this->personal_phone_secondary,
                'work_phone_primary' => $this->work_phone_primary,
                'work_phone_secondary' => $this->work_phone_secondary,
                'note' => $this->note,
                'attchments'=>['contactImage'=>$attchments],
                'properties' =>  $x1 ,


            ]);

            DB::commit();

            FlashMsgTraits::created();

            $this->reset();
        } catch (\Exception $e) {

            DB::rollBack();

            FlashMsgTraits::created($msgType = 'error', $msg = $e->getMessage());

            return $e;
        }
    }
    public function contactType()
    {
        $this->ContactTypeToshow = $this->contact_type;
    }



    public function updated($key, $value)
    {
        $this->saved = FALSE;
        // $parts = explode(".", $key);
        // if (count($parts) == 2 && $parts[0] == "templates") {
        //     $question = $this->all_templates->where('status_name', $value)->first()->text;
        //     if ($question) {
        //         $this->questions[$parts[1]] = $question;
        //     }
        // }
    }


    public function render()
    {

        $contacts = Contact::get();
        $pageTitle = 'جهات الاتصال';
        $statuses = CacheStatusModelServices::getData();
        $regions =  CacheModelServices::getRegionVwData();

        return view('livewire.contact.contact-create', compact('statuses', 'regions', 'contacts'))->layoutData(['pageTitle' => $pageTitle, 'title' => $pageTitle]);
    }
}
