 @props([
     'name' => '',
     'type' => 'checkbox',
     'id' =>$name,
     'labelclass' => '',
     'description_field'=>'',
     'label'=>'',
     'labelname'=>'',
     
 ])




 <div class="row mb-1">
     <div class="col-md-6 ">
         <div class="form-check ">
             <input name="{{ $name }}" type="checkbox" id="{{ $id }}" {{ old($name) ? 'checked' : '' }}
                 {{ $attributes->class(['form-check-input ', 'is-invalid' => $errors->has($name)]) }}>
             <small class="text-muted">{{ $description_field }}</small>

             @include('layouts._show-error', ['field_name' => $name])


             @if ($label)
                 <label for="{{ $id }}"
                     @class(["form-check-label   $labelclass "])>{{ $labelname ? $labelname : __("mytrans.$name") }}</label>
             @endif



         </div>
     </div>
 </div>
