<div>


 
    <x-slot:crumb>

        <x-breadcrumb CurrentPageTitle="عرض المستخدمين" :route="route('user.create')" wire:navigate divlclass="ml-3"
            class="bg-primary"></x-breadcrumb>

    </x-slot:crumb>


    @can('ability.create') 

    <form wire:submit='storeAbility'>
        <div class="row">



            <x-input type="text" name="ability_name" dir="ltr" autofocus label='yes' req
                description_field="ex: ModelName.functionName" wire:model="ability_name"></x-input>

            <x-input type="text" name="ability_description" label='yes' req description_field="مثال: انشاء مستخدم"
                wire:model="ability_description"></x-input>


            <x-select name="module_id" label='yes' wire:model="module_id" :options="$moduleNames->pluck('status_name', 'id')" />

            <x-input type="text" name="url" wire:model="url" label='yes' dir="ltr"></x-input>


            <x-radio type="radio" name="activation" label="yes" req value1="1" value2="0" divWidth=4
                wire:model="activation" value_title1="فعال" value_title2="غير فعال"></x-radio>


            <x-textarea type="text" name="description" label="yes" cols="20" rows="2" divWidth=6
                wire:model="description"></x-textarea>


        </div>

        <x-saveClearbuttons></x-saveClearbuttons>    

    </form>
    @endcan
    <p>يمكنك اضافة انظمة جديدة من خلال   <span><a href="{{route('status')}}" target="_blank">نظام الثوابت</a> </span></p>
    {{-- @livewire('ability.ability-index',['lazy'=>'true']) --}}

</div>
