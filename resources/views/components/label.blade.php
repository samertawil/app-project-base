@props([
 'req'=>'',
 'id'=>'',
 'labelclass'=>'',
 'labelname'=>'',
 'name'=>'',

])

@if ($label)
<label for="{{ $id }}" @class(["col-form-label   $labelclass "])>{{$labelname?$labelname: __("mytrans.$name") }}
    @if($req)
    <span class="text-danger">*</span>
    @endif
</label>
@endif