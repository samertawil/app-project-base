@props([
    'type' => '',
    'name' => '',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label' => '',
    'placeholder' => '',
    'title' => '',
    'labelclass' => '',
    'options' => [],
    'labelname' => '',
    'req' => '',
    'id' => '',
    'divWidth' => '3',
    'divlclass' => '',
    'ChoseTitle' => 'اختار',
    'divId'=>null,
 
])


<div @class(["form-group mb-3 col-md-4 col-lg-$divWidth", $divlclass]) data-url={{ $dataUrl }} id={{$divId}} >



    @if ($label)
        <label for="{{ $id }}" @class(["col-form-label   $labelclass "])>{{ $labelname ? $labelname : __("mytrans.$name") }}
            @if ($req)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif
    <div wire:ignore id="city_id1">
        <select  id="{{ $id }}" name="{{ $name }}" dir={{ $dir }}
            title="{{ $title }}"
            {{ $attributes->class(['form-control ', 'is-invalid' => $errors->has($name)]) }}>
            <option value="">{{ $ChoseTitle }}</option>

            @foreach ($options as $key => $value)
                <option value="{{ $key }}" @selected(old($name) ? old($name) == $key : '')>
                    {{ $value }} </option>
            @endforeach
        </select>
    </div>
    @include('layouts._show-error', ['field_name' => $name])


</div>
