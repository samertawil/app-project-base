


 
    <div class="d-flex mt-5" style="height: 600px; ">
     
        <div class="container  m-auto px-5  ">
           
            
            <div>

                <div class=" fw-bolder h4 text-dark d-flex justify-content-center align-items-center">
                    <div>
                        {{-- <div>
                            <strong class="mx-2"> المساعدات والإغاثة الإنسانية </strong>
                        </div> --}}
    
                        <div class="text-center pt-2">
                            <strong > النظام الاداري </strong>
                        </div>

                    </div>
                  


                </div>
            </div>


            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card ">

                        <div class="card-header "> <span> تسجيل الدخول </span>  <a  class="text-decoration-none" style="float: left;"
                             href="#">حول النظام؟</a>  </div>
                        @include('layouts._alert-session')
                        <div class="card-body">
                          
                            <form wire:submit="authenticate">
                            

                                 <x-input wire:model="user_name" name="user_name" label="yes" divlclass="col-lg-12" dir="ltr" required autofocus > </x-input>
 
                                  
                                <x-input wire:model="password"  type="password" name="password"  label="yes" divlclass="col-lg-12" dir="ltr" required  > </x-input>

                  
                                <x-checkbox wire:model='remember' name="remember" label="yes"></x-checkbox>
                              
                       
                               <x-button :name="__('auth.Login')" divlclass="d-grid gap-2" class="bg-primary text-white"></x-button>

                            </form>


                            <div class="d-md-flex justify-content-between">
                                <div class="mb-4" id="change_id">
                                    <a href="#"  id="btn1"
                                        class="text-decoration-none ">{{ __('mytrans.Forgot Your Password') }} ؟ </a>
                                </div>
                                <a href="{{route('register.create')}}" wire:navigate
                                    class="text-decoration-none">{{ __('mytrans.register_new_account') }}</a>
                            </div>
                            <div class="my-4">

                                <a href="#"
                                    class="text-decoration-none">{{ __('mytrans.get-help') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 