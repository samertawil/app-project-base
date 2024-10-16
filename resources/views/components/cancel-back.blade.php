@props([
    'route'=>'',
    'name'=>'إلغاء وروجوع',
]) 

<div class="text-end">
    <a href="{{$route}}"  
    {{$attributes->class(['text-decoration-none text-end', ])}} >
   
     {{$name}} </a>
</div>