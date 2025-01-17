     <div class="d-flex mt-4">

         <div class="container m-auto">
             <div class="row justify-content-center">
                 <div class="col-md-10">
                     <div class="card">

                         @if (!Auth::check())
                             <div class="card-header">تسجيل حساب جديد</div>
                         @endif

                         <div class="card-body">

                             <form wire:submit='register'>

                                 <x-input wire:model.live='user_name' name="user_name" label="yes" dir="ltr"
                                     divlclass='col-lg-12'></x-input>

                                 <x-input wire:model='name' name="name" label="yes"
                                     divlclass='col-lg-12'></x-input>


                                 <x-input wire:model='mobile' name="mobile" label="yes" divlclass='col-lg-12'
                                     dir="ltr"></x-input>


                                 {{-- <x-select-parts-date></x-select-parts-date> --}}


                                 <x-input wire:model='password' type="password" name="password" label="yes"
                                     autocomplete="new-password" divlclass='col-lg-12'></x-input>

                                 <x-input wire:model='passwordConfirmation' name="passwordConfirmation"
                                     id="password_confirmation" type="password" label="yes"
                                     autocomplete="new-password" divlclass='col-lg-12'></x-input>


                                 <x-button :name="__('mytrans.register_new_account')" class="bg-primary text-white"
                                     divlclass="d-grid gap-2"></x-button>

                                 @if (!Auth::check())
                                     <x-cancel-back :route="route('login')" wire:navigate></x-cancel-back>
                                 @endif
                                 
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
