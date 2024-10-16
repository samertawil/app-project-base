@props([
    'type' => '',
    'name' => 'حفظ',
    'divlclass'=>'',
    'iclass'=>'',
    '$iclassName'=>''
])


<div @class(['my-4 text-left mx-1 ', $divlclass])> 

    <button type="{{ $type }}"
        {{$attributes->class(['btn btn-md btn-info',
             ]) }}  >{{$name}}
               @if($iclass)
               <i class="{{$iclassName}}"></i>
               @endif
    </button>

</div>

{{-- wire:click.prevent="storeAbility" --}}
