<?php

namespace App\Livewire\StatusModule;


 
use App\Models\Status;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\SettingSystem;
use App\Http\Requests\StatusRequest;
use Illuminate\Support\Facades\Gate;
use App\Services\CacheStatusModelServices;




class  StatusClass extends Component
{
    use SortTrait;

      #[Url(history:true)]
      public $sortBy='created_at';

    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $status_name;
    public $p_id;
    public $p_id_sub;
    public $used_in_system_id;
    public $page_name;
    public $route_system_name;
    public $route_name;

    #[Url(history:true)]
    public $search = null;

    #[Url(history:true)]
    public $perPage = 10;

    #[Url(history:true)]
    public $PidSearch;

    #[Url(history:true)]
    public $SystemName;
    
    public $editStatusId;
    public $StatusName;
    public $statusPid;
    public $usedInSystem;



    public function store()
    {

       
        $this->validate(StatusRequest::rules($this->p_id_sub));

        status::create($this->all());

      
    }


    public function edit($id)
    {
        $this->editStatusId = $id;
        $data = Status::find($id);

        $this->StatusName = $data->status_name;
        $this->statusPid = $data->p_id_sub;
        $this->usedInSystem = $data->used_in_system_id;
    }

    public function update()
    {
        $data = Status::find($this->editStatusId);

        $data->update([
            'status_name' => $this->StatusName,
            'p_id_sub' => $this->statusPid,
            'used_in_system_id' => $this->usedInSystem,
        ]);

        $this->cancelEdit();
      

    }

    public function destroy($id)
    {
        Status::destroy($id);

      
    }


    public function cancelEdit()
    {

        $this->reset('editStatusId');
    }



    public function render()
    {
        if(Gate::denies('status.index')) {
            abort(403);
        }

        $pageTitle = 'ثوابت النظام';

        $statuses = Status::with(['systemname', 'status_p_id_sub', 'status_p_id'])
            ->select('status_name', 'id', 'p_id', 'p_id_sub', 'used_in_system_id')
            ->SearchName($this->search)
            ->SearchpId($this->PidSearch)
            ->SearchSystemName($this->SystemName)
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);



        $systems_data = SettingSystem::orderBy('created_at','desc')->get();

        $parents = CacheStatusModelServices::getData()->whereNull('p_id_sub');
      


        return view('status.status', compact('systems_data', 'pageTitle', 'statuses', 'parents'))
            ->layoutData(['title' => $pageTitle, 'pageTitle' => $pageTitle]);
    }
}
