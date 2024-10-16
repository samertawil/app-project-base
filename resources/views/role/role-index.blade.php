<div>

    <x-slot:crumb>
        <x-breadcrumb button :route="route('role.create')" name="انشاء مجموعة جديدة"></x-breadcrumb>
    </x-slot:crumb>

 

    <div wire:offline>
        <div class="alert" role="alert" style="background-color: #fefe5c;">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>تحذير!</strong> انت الان خارج نطاق الانترنت.
        </div>
    </div>



    <div class="row justify-content-between align-items-center">
        <div class="col-sm-12 col-md-2">
            <div> <span class="ml-1">السطور</span> <label><select wire:model.live='perPage'
                        class="custom-select custom-select-sm form-control form-control-sm">

                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select></label></div>
        </div>

        <div class="col-sm-12 col-md-3">
            <x-input type="search" name="search" placeholder="بحث" divWidth="12" wire:model.live='search'></x-input>
        </div>

    </div>



    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th>#</th>

                        <x-table-th wire:click="setSortBy('name')" name="name" sortBy={{ $sortBy }} 
                            sortdir={{ $sortdir }} labelname="المجموعة" style="width:150px;"></x-table-th>


                        <th class="text-center">{{ __('mytrans.abilities') }}</th>
 



                        <th >{{ __('mytrans.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="align-items-cente">


                    <tr>
                        @foreach ($roles as $key => $role)
                            <td style="text-align: right; !important">{{ $key + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td style="line-height: 32px;">{{ implode(',', $role->abilities_description) }}</td>
                       

                            <td class="d-flex align-items-center justify-content-center">

                                <x-actions preview data-target="#roleGroupPreview{{ $role->id }}"
                                    data-toggle="modal"></x-actions>

                                <x-actions edit :route="route('role.edit', $role->id)"></x-actions>

                               
                                <x-modal idName="roleGroupPreview{{ $role->id }}" modalType="modal-dialog-scrollable"  :title="$role->name">
                                    تاريخ الاضافة :{{myDateStyle1($role->created_at)}} </br>
                                </br>
                                    @foreach ($role->abilities as $abilities)
                                        <li class="m-1">{{ $abilities }}</li>
                                    @endforeach
                                 <div class="dropdown-divider m-0"></div>
                                    @foreach ($role->abilities_description as $abilities_description)
                                    <li class="m-1">{{ $abilities_description }}</li>
                                @endforeach

                                </x-modal>
                      

                                <x-actions del wire:click="destroy({{ $role->id }})"></x-actions>



                            </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $roles->links() }}

        </div>

    </div>




</div>


</div>
