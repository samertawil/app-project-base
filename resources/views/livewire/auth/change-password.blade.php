<div>


    <div class="d-flex mt-4">

        <div class="container m-auto">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">


                        <div class="card-body">

                            <form wire:submit='resetPassword'>
                           
                                <x-input   name="user_name" label="yes" dir="ltr" :value="$this->userId??Auth::user()->user_name" disabled
                                    divlclass='col-lg-12'></x-input>


                                <x-input wire:model='currentPassword' type="password" name="currentPassword"
                                    label="yes" dir="ltr" autocomplete="new-password"
                                    divlclass='col-lg-12'></x-input>

                                <x-input wire:model='password' type="password" name="password" label="yes"
                                    dir="ltr" autocomplete="new-password" divlclass='col-lg-12'></x-input>

                                <x-input wire:model="passwordConfirmation" name="passwordConfirmation" dir="ltr"
                                    id="password_confirmation" type="password" label="yes"
                                    autocomplete="new-password" divlclass='col-lg-12'></x-input>


                                <x-button :name="__('mytrans.renewPassword')" class="bg-primary text-white"
                                    divlclass="d-grid gap-2"></x-button>


                                <x-cancel-back :route="route('login')" wire:navigate></x-cancel-back>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
