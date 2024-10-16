<?php

namespace App\Livewire\StatusModule;


use Livewire\Component;
use App\Models\SettingSystem;
use App\Http\Requests\SystemNamesRequest;


class SystemClass extends Component
{

    public $description;
    public $system_name;


    public function systemStore()
    {

        $this->validate(SystemNamesRequest::rules());

        SettingSystem::create([
            'system_name' => $this->system_name,
            'description' => $this->description,
        ]);


        CreateSuccessMsg();
    }
    public function render()
    {
       $systems_data = SettingSystem::orderBy('created_at','desc')->get();
        
        return view('status.system',compact('systems_data'));
    }



    
}


