<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  href="{{asset('assets/my-css/bootstrap.rtl.css')}}" rel="stylesheet" >
        @include('layouts.head')
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <!-- Loader -->
            
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>


        {{ $slot??'' }}

       
        @include('layouts.footer-scripts')
       
    </body>
</html>
