@props([
    'warning' => null,
    'edit' => null,
    'del' => null,
    'x1' => null,
    'cancel' => null,
    'make' => null,
    'preview' => null,
    'route' => '#',
    'plus' => null,
    'mins' => null,
])

<div wire:loading.class="disabledTagA">

    @if ($warning)
    
        <a href="#" class="btn btn-sm btn-warning " {{ $attributes }}>

            <i class="fa fa-key o" aria-hidden="true"></i>

        </a>
    @endif

    @if ($edit)
        <a href={{ $route }} @class(['btn btn-lg text-info ']) {{ $attributes }}>

            <i class="ti-pencil-alt"></i>

        </a>
    @endif

    @if ($del)
        <a href={{ $route }} class="btn btn-lg text-danger "
                wire:confirm='هل انت متأكد؟'
            {{ $attributes }}>

            <i class="ti-trash"></i>

        </a>
    @endif



    @if ($cancel)
        <a href="#" class="btn btn-lg text-warning" {{ $attributes }}>
            <i class="ti-back-right"></i>

        </a>
    @endif

    @if ($make)
        <a href="#" class="btn btn-lg text-success" style="vertical-align:middle  !impoartant;"
            {{ $attributes }}>

            <i class="ti-save"></i>
        </a>
    @endif



    @if ($preview)
        <a href="#" class="btn btn-lg text-primary "{{ $attributes }}>

            <i class="ti-eye"></i>

        </a>
    @endif


    @if ($plus)
        <a href="#" class="btn btn-lg text-primary " {{ $attributes }}>

            <i class="ti-plus"></i>

        </a>
    @endif


    @if ($mins)
        <a href="#" class="btn btn-lg  text-danger  " {{ $attributes }}>

            <i class="ti-minus"></i>

        </a>
    @endif

</div>
