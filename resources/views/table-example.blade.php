<div>


    <x-slot:crumb>
    
        <x-breadcrumb CurrentPageTitle="عرض المستخدمين" button name="اضافة مستخدم جديد" :route="" wire:navigate
            divlclass="ml-3" class="bg-primary"></x-breadcrumb>

    </x-slot:crumb>

    @push('css')
    @endpush



    {{--   
                <div> <label for="hs-search-box-with-loading-1" class="ti-form-label">Search</label> <div class="relative"> <input type="text" id="hs-search-box-with-loading-1" name="hs-search-box-with-loading-1" class="ti-form-input rounded-sm ltr:pl-11 rtl:pr-11 focus:z-10" placeholder="Input search"> <div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4"> <div class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-primary rounded-full" role="status" aria-label="loading"> <span class="sr-only">Loading...</span> </div> </div> </div> </div> --}}

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

        {{-- :options="config('myConstants')['userType']" --}}
        <div class="col-sm-12 col-md-2">
            <x-select  divWidth="12" ChoseTitle="نوع المستخدم" wire:model.live="searchUsertype"
                ChoseTitle='الكل'></x-select>
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
                        <th><span>#</span></th>
                 
                        <x-table-th wire:click="setSortBy('user_name')" name="user_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('name')" name="name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} labelname="صاحب الحساب"></x-table-th>

                        <x-table-th wire:click="setSortBy('user_type')" name="user_type" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} labelname="نوع الحساب"></x-table-th>


                        <x-table-th wire:click="setSortBy('user_activation')" name="user_activation"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} labelname="التفعيل"></x-table-th>


                        <th><span>الجوال</span></th>


                        <x-table-th wire:click="setSortBy('created_at')" name="created_at" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <th>الاجراءات</th>
                    </tr>
                </thead>
                <tbody>

                  

                    {{-- @foreach ($users as $key => $user) --}}
                        <td>{{ $key + 1 }}
                           
                        </td>
                        <td>{{ $user->user_name }}</td>
                        @if ($editUserId === $user->id)
                            <td>
                                <input wire:model='editName' placeholder="..." class="form-control bg-white">
                            </td>
                        @else
                            <td>{{ $user->name }}</td>
                        @endif


                        <td> {{ $user->user_type }} </td>


                        @if ($editUserId === $user->id)
                            <td>
                                <select wire:model="editActiovation" name="ac" id=""
                                    class="form-control bg-white">

                                    <option value="1">فعال</option>
                                    <option value="0">غير فعال</option>
                                </select>
                            </td>
                        @else
                            <td @class([
                                'd-flex',
                                'text-danger' => $user->user_activation == 0,
                                'text-success' => $user->user_activation == 1,
                            ])>

                                <div @class([
                                    'bg-danger dot-label ml-2' => $user->user_activation == 0,
                                    'bg-success dot-label ml-2' => $user->user_activation == 1,
                                ])></div>
                                {{ $user->user_activation == 1 ? 'فعال' : 'غير فعال' }}
                            </td>
                        @endif


                     
                     
                            @if ($editUserId === $user->id)
                        <td>
                            <input wire:model='editMobile' placeholder="..." class="form-control bg-white">
                        </td>
                    @else
                    <td>
                        {{ $user->mobile }}</td>
                    </td>
                      
                    @endif


                    <td>{{ myDateStyle1($user->created_at) }}</td>

 
                    <td class=" ">
                        @if (!($editUserId === $user->id))
                            <x-actions edit wire:loading.attr='disabled'
                                wire:click='edit({{ $user->id }})'></x-actions>

                            <x-actions del wire:loading.attr='disabled'
                                onclick="confirm('هل انت متأكد من عملية المسح؟') ?  '' : event.stopImmediatePropagation() "
                                wire:click='destroy({{ $user->id }})'></x-actions>
                        @else
                         
                            <x-actions make wire:loading.attr='disabled' wire:click='update'></x-actions>
                            <x-actions cancel wire:click='cancelEdit'></x-actions>
                       
                           
                        @endif

                    </td>

                    </tr>
                    {{-- @endforeach --}}
                   
                </tbody>
            </table>
            {{ $users->links() }}
        </div>

    </div>



    @push('js')

    @endpush

</div>
