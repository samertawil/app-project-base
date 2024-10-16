<div wire:poll.keep-alive.10s>

 

{{-- @include('layouts._error-form') --}}

    <x-input type="search" name="search" placeholder="بحث" wire:model.live='search'></x-input>

    <div class="card-body " dir="rtl">
        <div class="table-responsive border-top userlist-table">
            <table class="table card-table table-striped table-vcenter text-nowrap mb-0" dir="rtl" id="mytable">
                <thead>
                    <tr>
                        <th class="wd-lg-5p"><span>#</span></th>
                        <th class="wd-lg-20p"><span> الصلاحية</span></th>
                        <th class="wd-lg-20p"><span> اسم الصلاحية</span></th>
                        <th class="wd-lg-20p"><span>رابط</span></th>
                        <th class="wd-lg-10p"><span>التفعيل</span></th>
                        <th class="wd-lg-20p"><span>تابعة لنظام </span></th>
                        <th class="wd-lg-20p"><span>ملاحظات </span></th>
                        <th class="wd-lg-20p">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        @foreach ($abilities as $key => $ability)
                            <td wire:model="ability_id">{{ $ability->id }}</td>

                            @if ($editAbilityId === $ability->id)
                                <td>

                                    <x-input wire:model='editAbilityName' name='editAbilityName'
                                        divWidth="12"></x-input>
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
                                   
                                    <x-input wire:model='editAbilityUrl' name='editAbilityUrl'
                                    divWidth="12"></x-input>
                                </td>
                            @else
                                <td> {{ $ability->url }} </td>
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
                                    'd-flex',
                                    'text-success' => $ability->activation == 1,
                                    'text-danger' => $ability->activation == 0,
                                ])>
                                    <div @class([
                                        'bg-success dot-label ml-2' => $ability->activation == 1,
                                        'bg-danger dot-label ml-2' => $ability->activation == 0,
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


                            <td>{{ $ability->description }}</td>

                            @if (!($editAbilityId === $ability->id))
                                <td>
                                    <x-actions edit wire:click.prevent='edit({{ $ability->id }})'></x-actions>
                                    <x-actions del wire:click.prevent='destroy({{ $ability->id }})'></x-actions>
                                   
                                </td>
                            @else
                                <td>
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

   



<x-button wire:offline.attr='disabled'  data-target="#edit1"  data-toggle="modal" name="عرض الصلاحية"></x-button>

                                

<x-modal>

<livewire:ability.ability-create></livewire:ability.ability-create>


</x-modal>





</div>


 