<div>
 
    <x-slot:crumb>

        <x-breadcrumb CurrentPageTitle={{ $pageTitle }}></x-breadcrumb>

    </x-slot:crumb>

    @push('css')
        <style>
            td,
            th {
                text-align: right !important;
            }
        </style>
         {{-- <link rel="stylesheet" href="{{ asset('assets/my-css/select2.min.css') }}"> --}}
    @endpush



    <div class="row  m-auto">
        <div class="col-lg-12">
            <div class="card custom-card">

                <div class="card-body">

                    <section class="container my-2">

                        <a data-toggle="collapse" href="#collapse-system" aria-expanded="true"
                            aria-controls="collapse-system" id="heading-system" class="d-block ">
                            <i class="fa fa-chevron-down pull-right "></i>
                            تكوين نظام
                        </a>

 
                              <livewire:StatusModule.SystemClass></livewire:StatusModule.SystemClass>

 
                        <form wire:submit="store">

                          

                            <div class="mt-4"></div>
                            <a data-toggle="collapse" href="#collapse-status" aria-expanded="true"
                                aria-controls="collapse-status" id="heading-status" class="d-block ">
                                <i class="fa fa-chevron-down pull-right "></i>
                                ادخال ثابت جديد
                            </a>
                            <div id="collapse-status" class="collapse show" aria-labelledby="heading-status">
                                <p class="card-header"> </p>

                                <div class="container row justify-content-evenly align-items-center  p-3 "
                                    style="border : 1px solid #dee2e6 ;   ">



                                    <x-input name="status_name" wire:model="status_name" label="yes"></x-input>


                                    <x-select name="p_id" wire:model="p_id" label="yes" labelname="ثابت رئيسي"
                                        :options="$statuses->whereNull('p_id')->pluck('status_name', 'id')"></x-select>


                                    <x-select name="p_id_sub"  label="yes" labelname="ثابت فرعي"  wire:model='p_id_sub'
                                        :options="$parents->pluck('status_name', 'id')"   class="js-select2" jsSelect2 wireIgone></x-select>
                                        
                                         

                                    <x-select name="used_in_system_id" wire:model="used_in_system_id" label="yes"
                                        labelname="الثابت تابع لنظام" :options="$systems_data->pluck('system_name', 'id')"></x-select>


                                    <x-input name="description" wire:model="description" label="yes"></x-input>


                                    <x-input name="page_name" wire:model="page_name" label="yes"></x-input>


                                    <x-input name="route_system_name" wire:model="route_system_name" label="yes"
                                        labelname="الرابط الرئيسي"></x-input>


                                    <x-input name="route_name" wire:model="route_name" label="yes"
                                        labelname="رابط الصفحة"></x-input>

                                    <div id="scrollToHere"></div>
                                </div>
                                <div class="d-flex justify-content-start" dir="ltr">
                                    <x-button type="submit"></x-button>
                                    <x-button type="reset" name="مسح" class="bg-secondary"></x-button>
                                </div>

                        </form>
                </div>

                </section>

                <x-search-index-section>

                    <div class="col-sm-12 col-md-3"  >
                        <x-select id="id1" :options="$parents->pluck('status_name', 'id')" 
                            ChoseTitle="اختار التابع الفرعي"
                             divWidth="12"
                             class="js-select2" jsSelect2 wireIgone
                            wire:model.live='PidSearch' name="PidSearch"></x-select>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <x-select  name="SystemName" :options="$systems_data->pluck('system_name', 'id')" 
                            ChoseTitle="اختار النظام التابع "
                             divWidth="12"
                           
                            wire:model.live='SystemName'></x-select>
                    </div>

                </x-search-index-section>



                <div class="table-responsive" id="table">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable"
                            id="example2" role="grid" aria-describedby="example2_info">
                            <thead>
                                <th>#</th>

                                <x-table-th wire:click="setSortBy('status_name')" labelname='اسم الثابت'
                                    name="status_name" sortBy={{ $sortBy }}
                                    sortdir={{ $sortdir }}></x-table-th>

                                <x-table-th wire:click="setSortBy('p_id')" labelname='التابع الرئيسي ' name="p_id"
                                    sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                                <x-table-th wire:click="setSortBy('p_id_sub')" labelname='التابع الفرعي '
                                    name="p_id_sub" sortBy={{ $sortBy }}
                                    sortdir={{ $sortdir }}></x-table-th>

                                <x-table-th wire:click="setSortBy('used_in_system_id')" labelname='اسم النظام'
                                    name="used_in_system_id" sortBy={{ $sortBy }}
                                    sortdir={{ $sortdir }}></x-table-th>

                                <th>الاجراءات</th>
                            </thead>
                            <tbody>

                                @foreach ($statuses as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>

                                        @if ($editStatusId === $data->id)
                                            <td> <x-input wire:model='StatusName' name='StatusName'
                                                    divWidth="10"></x-input></td>
                                        @else
                                            <td>{{ $data->status_name }}</td>
                                        @endif


                                        <td>{{ $data->status_p_id->status_name ?? '//' }}</td>

                                        @if ($editStatusId === $data->id)
                                            <td>
                                                <x-select wire:model='statusPid' :options="$parents->pluck('status_name', 'id')"
                                                    divWidth="10"></x-select>

                                            </td>
                                        @else
                                            <td>{{ $data->status_p_id_sub->status_name ?? '//' }}</td>
                                        @endif

                                        @if ($editStatusId === $data->id)
                                            <td>
                                                <x-select wire:model='usedInSystem' :options="$systems_data->pluck('system_name', 'id')"
                                                    divWidth="10"></x-select>

                                            </td>
                                        @else
                                            <td>{{ $data->systemname->system_name ?? '' }}</td>
                                        @endif

                                        <td class="d-flex  justify-content-center">
                                            @if (!($editStatusId === $data->id))
                                                <x-actions edit
                                                    wire:click.prevent='edit({{ $data->id }})'></x-actions>
                                                <x-actions del
                                                    wire:click.prevent='destroy({{ $data->id }})'></x-actions>
                                            @else
                                                <x-actions make wire:loading.attr='disabled'
                                                    wire:click.prevent='update'></x-actions>
                                                <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{ $statuses->links(data: ['scrollTo' => '#scrollToHere']) }}

                    </div>

                </div>
@push('js')
{{-- 
 <script src="{{asset('assets/my-js/select2.min.js')}}"></script> 
<script>
    $('#js-example-basic-single').select2({
        placeholder: 'اختار',

    });

    $('#js-example-basic-single').on('change',function(event) {
        console.log(event.target.value)
    })

</script> --}}

 
@endpush
            </div>
