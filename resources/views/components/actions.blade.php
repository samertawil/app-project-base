
@props([
    'warning'=>null,
    'edit'=>null,
    'del'=>null,
    'x1'=>null,
    'cancel'=>null,
    'make'=>null,
    'preview'=>null,
    'route'=>'#'

])

@if($warning)
<a href="#" class="btn btn-sm btn-warning " {{$attributes}}>
 
    <i class="fa fa-key o" aria-hidden="true"></i>

</a>
@endif

@if($edit)
<a href={{$route}} class="btn btn-lg text-info "   {{$attributes}}>
   
    <i class="ti-pencil-alt"></i>
   
</a>
@endif

@if($del)
<a href={{$route}} class="btn btn-lg text-danger "  onclick="confirm('هل انت متأكد من عملية المسح؟') ? '' : event.stopImmediatePropagation()"  {{$attributes}}>
     
    <i class="ti-trash"></i>
    
</a>
@endif

 

@if($cancel)
<a href="#" class="btn btn-lg text-warning" {{$attributes}}>
    <i class="ti-back-right"></i>
    
</a>
@endif

@if($make)
<a href="#" class="btn btn-lg text-success"  style="vertical-align:middle  !impoartant;"  {{$attributes}}>

    <i class="ti-save"></i>
</a>
@endif
 


@if($preview)
<a href="#" class="btn btn-lg text-primary "{{$attributes}}>
     
    <i class="ti-eye"></i>
    
</a>
@endif