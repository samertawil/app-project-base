<?php

namespace App\Livewire\Ability;

use App\Models\Ability;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use App\Services\CacheStatusModelServices;

class AbilityIndex extends Component
{
    use  SortTrait;

    use WithPagination;
    protected $paginationTheme='bootstrap';

    protected $listeners=['Refresh_Ability_Index'=>'$refresh'];

    #[Url('history:true')]
    public $search='';

    #[Url('history:true')]
    public $searchModuleId='';

    public $editAbilityId='';

    #[Rule('required|string')]
     public $editAbilityName='';
     
    #[Rule(['required','string'])]
    public $editAbilityDescription='';

    public $editAbilityUrl='';
 
    #[Rule(['required','in:"0","1"'])]
    public $editAbilityActivation='';

    #[Rule(['required','exists:statuses,id'])]
    public $editAbilityModuleId='';

    public $editDescription='';

    #[Url('history:true')]
    public $perPage=10;
 
 

    public function edit($id) {

        $this->editAbilityId= $id;
        $data=Ability::withoutGlobalScope('not-active')->find($id);
        
       
        $this->editAbilityName=$data->ability_name;
        $this->editAbilityDescription=$data->ability_description;
        $this->editAbilityUrl=$data->url;
        $this->editAbilityActivation=$data->activation;
        $this->editAbilityModuleId=$data->module_id;
        $this->editDescription=$data->description;
        
    }

    public function update() 
    {
     
        $data=Ability::withoutGlobalScope('not-active')->find($this->editAbilityId);
      
        $this->validate();

        $data->update([
            'ability_name'=>$this->editAbilityName,
            'ability_description'=>$this->editAbilityDescription,
            'url'=>$this->editAbilityUrl,
            'activation'=>$this->editAbilityActivation,
            'module_id'=>$this->editAbilityModuleId,
          
        ]);

        $this->cancelEdit();
        
        
    }

    public function destroy($id) 
    {
        Ability::find($id)->delete();
  
    }

  

    public function cancelEdit() {
     
        $this->reset( 'editAbilityId');
    }

    public function placeholder() {
       return view('livewire.placeholder');
    }
 
    
    public function render()
    {


        $pageTitle='انشاء صلاحية';
        $title=$pageTitle;

         
        $moduleNames=CacheStatusModelServices::getData()->where('p_id_sub',1121);
        
        $abilities= Ability::with('moduleName')
        ->SearchName($this->search)
        ->SearchModuleId($this->searchModuleId)
        ->withoutGlobalScope('not-active')->orderBy($this->sortBy,$this->sortdir)->paginate( $this->perPage);
     
        return view('ability.ability-index',compact('abilities','moduleNames'))->layoutData(['title'=>$title,'pageTitle'=>$pageTitle]);
    }
}
 

 