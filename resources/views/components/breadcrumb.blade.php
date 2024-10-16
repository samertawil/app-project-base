

@props([
    'CurrentPageTitle'=>'',
    'button'=>'',
    'type' => '',
    'name' => 'حفظ',
    'divlclass'=>'',
    'route'=>null,
    'iclass'=>'',
 ])
 


<div class="  d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
    <div class="my-auto">
        {{-- <h5 class="page-title fs-21 mb-1 mr-3 ">{{$CurrentPageTitle}}</h5> --}}
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>


    @if($button)
 
 
<div @class(['text-left ml-1 pointer', $divlclass])> 

    <a   @if($route) href={{$route}} @endif
        {{$attributes->class(['btn btn-md bg-primary text-light',  
             ]) }} 
              >{{$name}}
   
    </a>

</div>

    @endif
   
</div>



 