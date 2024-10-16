 @props([
    'type' => 'text',
    'name',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label'=>'',
    'placeholder'=>'',
    'title'=>'',
    'labelclass'=>'',
    'cols'=>'10',
    'rows'=>'1',
    'divclass'=>'',
    'labelname'=>'',
    'id'=>'',
    'req'=>'',
    'divWidth'=>3,
 ])

 

 



 <div
  @class(["form-group mb-3 col-md-4 col-lg-$divWidth",$divclass])  >

  @if ($label)
  <label for="{{ $id }}" @class(["col-form-label   $labelclass "])>{{$labelname?$labelname: __("mytrans.$name") }}
      @if($req)
      <span class="text-danger">*</span>
      @endif
  </label>
  @endif


     <textarea
      name="{{ $name }}" 
      type="{{ $type }}"
       id="{{ $name }}" 
       cols="{{$cols}}"
        rows="{{$rows}}"
         {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>{{ old($name) }}</textarea>
             

     @include('layouts._show-error', ['field_name' => $name])

 </div>
