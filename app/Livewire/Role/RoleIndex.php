<?php

namespace App\Livewire\Role;

 
use App\Models\Role;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class RoleIndex extends Component
{
    use SortTrait;

    use WithPagination;

    protected $paginationTheme ='bootstrap';

    #[Url('history:true')]
    public $search='';

    #[Url('history:true')]
    public $perPage=10;


    public function destroy($id) 
    {
        Role::destroy($id);
    
    }

    public function edit($id) 
    {
       
      $roles= Role::find($id);

    
       return redirect()->route('home') 
       ->with( ['roles' => $roles] );
 
    }


    public function render()
    {
  
 

        $title='عرض مجموعات الصلاحيات';

        $roles= Role::SearchName($this->search)->orderBy($this->sortBy,$this->sortdir)->paginate($this->perPage);

        return view('role.role-index',compact('roles')) 
        ->layoutData(['title' => $title, 'pageTitle'=>$title]);
    }
}
