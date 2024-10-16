 

    @include('layouts._alert-session')

    {{-- <form action="{{ route('registration.form') }}" method="get"> --}}
    <a  href="{{route('register')}}" wire:navigate  >
         
        @include('auth._chk-idc-form',['buttontitle'=>'البدء بعملية التسجيل'])

        
    </a>

 

 