<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="samer website with livewire">
    <title>{{ $title ?? 'Page Title' }}</title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

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
                    class="mb-2 py-2 card-header d-flex justify-content-between align-items-center   tx-medium bd-0 tx-white bg-gray-800 ">

                    <div class=" w-50"> {{ $pageTitle ?? '' }}</div>

                    <div class="w-50" style="text-align: left">
                        <button class="btn reload"><i class="ti-reload text-warning"></i></button>
                    </div>
                  
                </div>

                {{-- <p class="tx-12 tx-gray-500 m-3 ">{{ $pagedesc ?? '' }} <a
                    href="{{ $pageUrl ?? '#' }}">{{ $pageHelp ?? '' }}</a> --}}


                <div class="card-body pt-0">


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
