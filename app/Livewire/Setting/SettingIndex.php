<?php

namespace App\Livewire\Setting;

use App\Models\Setting;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Http\Requests\SettingRequest;

class SettingIndex extends Component
{
    use SortTrait;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
  
    
    public $editSettingId;

    #[Rule('required')]
    public $value;

    public $key;
    public $description;
    public $notes;
    public $perPage=10;

    public function edit($id)
    {
      
        $this->editSettingId=$id;
       $data= Setting::findOrfail($id);

       $this->value= $data->value;
       $this->key= $data->key;
       $this->description= $data->description;
      $this->notes= $data->notes;
     

    }
    
    public function update() {
       
        //  $this->validate(SettingRequest::rules());

        $data= Setting::findOrfail($this->editSettingId);

        $data->update([
            'key'=> $this->key,
            'value'=> $this->value,
            'description'=> $this->description,
            'notes'=> $this->notes,
        ]);

     $this->cancelEdit();
        
    }



    public function destroy($id) {
        Setting::destroy($id);
    }

    public function cancelEdit() 
    {
         $this->reset( 'editSettingId');
    }
    
    #[Title('setting')]
    public function render()
    {

          $settings= Setting::orderBy($this->sortBy,$this->sortdir)->paginate($this->perPage)  ;
       
        return view('setting.setting-index',compact('settings'))->layoutData(['pageTitle'=>'اعدادات النظام']);
    }
}



 