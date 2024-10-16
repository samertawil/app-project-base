<div>

    @props([
        'route' => '#',
        'label' => '',
        'divlclass'=>'',
        'name'=>'',
        'iclass'=>''
    ])

    
        {{-- <div class="btn-group">
            <a href="{{ $route }}" 
            {{ $attributes->class(['btn btn-md bg-info text-white']) }}>
                {{ $label }}</a>
        </div> --}}


         
<div @class(['text-left   ', $divlclass])> 

    <a  href={{$route}}
        {{$attributes->class(['btn btn-sm btn-info',
             ]) }}  >{{$name}}
             @if($iclass)
              <i class="las la-trash"></i>
              @endif
    </a>

</div>
    
</div>



 