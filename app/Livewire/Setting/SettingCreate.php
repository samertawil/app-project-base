<?php

namespace App\Livewire\Setting;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SettingRequest;


class SettingCreate extends Component
{

    public $key;
    public $value;
    public $description;
    public $notes;
    public $moduleName;
  

    public function store() {

       $this->validate( SettingRequest::rules());
        
        Setting::create([
            'key'=>$this->key,
            'value'=>$this->value,
            'description'=>$this->description,
            'notes'=>$this->notes,
           
        ]);
    }

    #[Title('setting')]
    public function render()
    {
    
        
        $settings=Setting::get();
        return view('setting.setting-create',compact('settings'))->layoutData(['pageTitle'=>'اعدادات النظام']);
    }
}
