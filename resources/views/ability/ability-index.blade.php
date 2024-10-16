<div>


    <x-slot:crumb>

        <x-breadcrumb button data-target="#abilityCreateModel1" data-toggle="modal" name="انشاء الصلاحية">

        </x-breadcrumb>

    </x-slot:crumb>



    <x-modal idName="abilityCreateModel1" title="انشاء صلاحية">
        <livewire:ability.ability-create></livewire:ability.ability-create>
    </x-modal>



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


        <div class="col-sm-12 col-md-2">
            <x-select divWidth="12" ChoseTitle="اسم النظام" :options="$moduleNames->pluck('status_name', 'id')" wire:model.live="searchModuleId"
                ChoseTitle='جميع الانطمة'></x-select>
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

                        <x-table-th wire:click="setSortBy('ability_name')" name="ability_name"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('ability_description')" name="ability_description"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>





                        <x-table-th wire:click="setSortBy('activation')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} labelname="التفعيل"></x-table-th>





                        <x-table-th wire:click="setSortBy('module_id')" name="module_id" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>



                        <th class="text-center">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>



                    @foreach ($abilities as $key => $ability)
                        <td wire:model="ability_id">{{ $ability->id }}</td>


                        @if ($editAbilityId === $ability->id)
                            <td>

                                <x-input wire:model='editAbilityName' name='editAbilityName' divWidth="12"></x-input>
                            </td>
                        @else
                            <td>{{ $ability->ability_name }}</td>
                        @endif

                        @if ($editAbilityId === $ability->id)
                            <td>
                                <x-input wire:model='editAbilityDescription' name='editAbilityDescription'
                                    divWidth="12"></x-input>
                            </td>
                        @else
                            <td>{{ $ability->ability_description }}</td>
                        @endif



                        @if ($editAbilityId === $ability->id)
                            <td>

                                <select wire:model="editAbilityActivation" class="form-control bg-white">

                                    <option value="1">فعال</option>
                                    <option value="0">غير فعال</option>
                                </select>
                                <label for="">

                                </label>
                            </td>
                        @else
                            <td @class([
                                '',
                                'text-success' => $ability->activation == 1,
                                'text-danger' => $ability->activation == 0,
                            ])>
                                <div @class([
                                    'bg-success dot-label ' => $ability->activation == 1,
                                    'bg-danger dot-label ' => $ability->activation == 0,
                                ])></div>

                                {{ $ability->activation == 1 ? 'فعال' : 'غير فعال' }}
                            </td>
                        @endif

                        @if ($editAbilityId === $ability->id)
                            <td>
                                <x-select wire:model="editAbilityModuleId" divWidth="12" :options="$moduleNames->pluck('status_name', 'id')" />
                            </td>
                        @else
                            <td>{{ $ability->moduleName->status_name ?? '' }}</td>
                        @endif




                        @if (!($editAbilityId === $ability->id))
                            <td class="d-flex justify-content-center">
                                <x-actions preview data-target="#abilityPreview1" data-toggle="modal"></x-actions>
                                <x-actions edit wire:click.prevent='edit({{ $ability->id }})'></x-actions>
                                <x-actions del wire:click.prevent='destroy({{ $ability->id }})'></x-actions>

                                <x-modal idName="abilityPreview1">

                                    الرابط : {{ $ability->url }}</br>
                                    تاريخ الاضافة : {{ myDateStyle1($ability->created_at) }}

                                </x-modal>
                            </td>
                        @else
                            <td class="d-flex justify-content-center">
                                <x-actions preview data-target="#abilityPreview1" data-toggle="modal"></x-actions>

                                <x-modal idName="abilityPreview1">
                                    @if ($editAbilityId === $ability->id)
                                        <x-input wire:model='editAbilityUrl' label labelname="الرابط"
                                            name='editAbilityUrl' divWidth="12"></x-input>
                                    @endif
                                </x-modal>

                                <x-actions make wire:click.prevent='update'></x-actions>
                                <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>

                            </td>
                        @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $abilities->links() }}
        </div>

    </div>




    @push('js')
    @endpush

</div>
