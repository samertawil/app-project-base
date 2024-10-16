<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="samer website with livewire">
    <title>{{ $title ?? 'Page Title' }}</title>

    @include('layouts.head')

    @stack('css')

</head>

<body class="main-body app sidebar-mini">

    <div id="global-loader">
        <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

    @include('layouts.main-sidebar')

    <div class="main-content app-content">
        @include('layouts.main-header')

        <div class="container-fluid">

            {{ $crumb ?? '' }}

            <div class="card">
                <div
                    class="card-header tx-medium bd-0 tx-white bg-gray-800 ">

                    {{ $pageTitle ?? '' }}

                    <p class="tx-12 tx-gray-500 mb-2">{{ $pagedesc ?? '' }} <a
                            href="{{ $pageUrl ?? '#' }}">{{ $pageHelp ?? '' }}</a>
                       
                </div>
        
                <div class="card-body ">
               

                    {{ $slot ?? '' }}


                </div>
            </div>



        </div>
    </div>
    @include('layouts.sidebar')
    @include('layouts.models')
    @include('layouts.footer')
    @include('layouts.footer-scripts')

 
    
    @stack('js')
   
</body>

</html>
