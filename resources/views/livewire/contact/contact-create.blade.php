<div>


    <x-slot:crumb>

        <x-breadcrumb></x-breadcrumb>

    </x-slot:crumb>
    @push('css')
        <style>
            input {
                margin-top: 1rem;
            }

            input::file-selector-button {
                font-weight: bold;
                color: dodgerblue;
                padding: 0.5em;
                border: thin solid grey;
                border-radius: 3px;
            }

            .main-img-user1 {
                position: absolute;
                bottom: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 32px;
                height: 32px;
                background-color: #737f9e;
                color: #fff;
                font-size: 18px;
                line-height: .9;
                box-shadow: 0 0 0 2px #fff;
                border-radius: 100%;
                cursor: pointer;
            }
        </style>
    @endpush

 

      

        
            <form wire:submit='store'>
                <div class="">
                    <a class="main-header-arrow" href="" id="ChatBodyHide"><i
                            class="icon ion-md-arrow-back"></i></a>


                    <section id="topTitle-image">


                        <div class="main-content-body main-content-body-contacts card custom-card">
                            <div class="main-contact-info-header pt-3">
                                <div class="media">
                                    <div class="main-img-user ">

                                        @if ($contactImage)
                                            <img src="{{ $contactImage->temporaryUrl() }}"
                                                class="form-control @error('contactImage')
                                        is-invalid
                                        @enderror">
                                            @include('layouts._show-error', [
                                                'field_name' => 'contactImage',
                                            ])
                                        @else
                                            <img alt="avatar" src="{{ $image1 }}"
                                                class="form-control  @error('contactImage')
                                        is-invalid
                                        @enderror"
                                                style="background-color: #e1e5ef">
                                        @endif

                                        <label for="imageUpload" class="main-img-user1">

                                            <i class="fe fe-camera"></i></label>
                                        <input wire:model='contactImage' name="contactImage" type="file"
                                            id="imageUpload" accept="image/*" style="display: none">


                                    </div>


                                    <div wire:loading wire:target='contactImage' id="global-loader_custome">
                                        <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img"
                                            alt="Loader">

                                    </div>



                                    <div class="media-body mr-2 ">
                                        <x-input wire:model='full_name'  wire:change="chkExists($event.target.value,'full_name')"  name="full_name" divWidth="8" marginBottom="1"
                                            class="error-message text-primary custom-border-bottom-dotted mb-1  "
                                            placeholder="الاسم كامل"
                                            style="font-weight:700 !important;font-size: 14px;"></x-input>

                                      
                                        <div class="d-flex justify-content-between align-items-center">


                                            <x-input wire:model='short_description' name="short_description"
                                                divWidth="8" class="custom-border-bottom-dotted"
                                                placeholder="وصف مختصر"></x-input>


                                            <nav class="contact-info text-left">

                                                <x-actions class="contact-icon border tx-inverse" edit></x-actions>
                                                <x-actions del></x-actions>
                                            </nav>
                                        </div>


                                    </div>
                                </div>


                            </div>

                    </section>

                    <section id="completeName-contactsNumber">


                        <div>

                            <div class="row mt-3 justify-content-start align-items-center pr-4">

                                <x-select class="custom-border-bottom-dotted " wire:model='contact_type'
                                    wire:change="contactType" name="contact_type" :options="$statuses->where('p_id_sub', 1235)->pluck('status_name', 'id')"
                                    ChoseTitle="نوع جهة الاتصال" marginBottom="0" divWidth="3"></x-select>



                                @if ($ContactTypeToshow == 1236)
                                    <x-input wire:model='fname' name="fname" divWidth="2"
                                        class="custom-border-bottom-dotted"
                                        placeholder="{{ __('mytrans.fname') }}"></x-input>

                                    <x-input wire:model='sname' name="sname" divWidth="2"
                                        class="custom-border-bottom-dotted"
                                        placeholder="{{ __('mytrans.sname') }}"></x-input>


                                    <x-input wire:model='tname' name="tname" divWidth="2"
                                        class="custom-border-bottom-dotted"
                                        placeholder="{{ __('mytrans.tname') }}"></x-input>

                                    <x-input wire:model='lname' name="lname" divWidth="2"
                                        class="custom-border-bottom-dotted"
                                        placeholder="{{ __('mytrans.lname') }}"></x-input>


                                    <x-input wire:model='nick_name' name="nick_name" divWidth="3"
                                        class="custom-border-bottom-dotted"
                                        placeholder="{{ __('mytrans.nick_name') }}"></x-input>
                                @elseif (in_array($ContactTypeToshow, ['1237', '1238', '1239']))
                                    <x-input wire:model='responsible' name="responsible" divWidth="3"
                                        class="custom-border-bottom-dotted"
                                        placeholder="{{ __('mytrans.responsible') }}"></x-input>
                                @endif

                                <x-input wire:model='identity_number' name="identity_number" divWidth="3"
                                    class="custom-border-bottom-dotted"
                                    placeholder="{{ __('mytrans.identity_number') }}"></x-input>
                            </div>

                        </div>


                        <div class="main-contact-info-body p-4 ">

                            <div class="media-list pb-0">
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <x-input wire:model='personal_phone_primary'   wire:change="chkExists($event.target.value,'personal_phone_primary')"  name="personal_phone_primary"
                                                divWidth="6" label class="custom-border-bottom-dotted mt-0 pt-0"
                                                labelclass="pb-0"></x-input>

                                               
                                        </div>
                                        <div>
                                            <x-input wire:model='personal_phone_secondary'
                                                name="personal_phone_secondary" divWidth="6" label
                                                class="custom-border-bottom-dotted mt-0 pt-0"
                                                labelclass="pb-0"></x-input>

                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="media-body">
                                        <div>
                                            <x-input wire:model='work_phone_primary' name="work_phone_primary"
                                                divWidth="6" label class="custom-border-bottom-dotted mt-0 pt-0"
                                                labelclass="pb-0"></x-input>

                                        </div>
                                        <div>
                                            <x-input wire:model='work_phone_secondary' name="work_phone_secondary"
                                                divWidth="6" label class="custom-border-bottom-dotted mt-0 pt-0"
                                                labelclass="pb-0"></x-input>

                                        </div>
                                    </div>
                                </div>

                            </div>

                    </section>

                    <hr>

                    <section id="attributes">
                        <div class="pr-3" name="properties" id="properties">

                            @foreach ($attributeValue as $index => $question)
                                <div class=" row align-items-center">

                                    <Select @class(['form-control  w-25'])
                                        wire:model='attributeColumn.{{ $index }}'>
                                        <option value="">اختار اعمدة</option>

                                        @foreach ($all_templates ?? [] as $template1)
                                            <option value="{{ $template1->status_name }}">
                                                {{ $template1->status_name }}
                                            </option>
                                        @endforeach
                                    </Select>


                                    <x-input wire:model="attributeValue.{{ $index }}"
                                        name="attributeValue{{ $index }}" divWidth="4"></x-input>

                                    <x-actions mins
                                        wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                                </div>
                            @endforeach

                        </div>



                        <x-actions plus wire:click.prevent='addQuestion'></x-actions>

                        <x-tag-a name="اضافة اعمدة جديدة"  route="{{route('status')}}" target="_blank"></x-tag-a>

                    </section>


                    <hr>

                    <section id="address">
                        <div class="media">
                            <div class="media-body">
                                <div>


<x-button type='button' class="btn-light-info"  data-target="#CreateAddressModal" data-toggle="modal"   name="اضافة عنوان"></x-button>



<x-modal idName="CreateAddressModal" width="xl" title='اضافة عنوان' >

    <livewire:AddressesModule.AddressForm :statuses="$statuses" lazy>
    </livewire:AddressesModule.AddressForm>

</x-modal>


                                </div>
                            </div>
                        </div>
                    </section>

                </div>



                <div>

                    <x-textarea wire:model='description' name="description" label labelname="وصف" divWidth="12"
                        rows="2" divclass="text-muted"></x-textarea>
                    <x-textarea wire:model='note' name="note" label divWidth="12" rows="2"
                        divclass="text-muted"></x-textarea>
                </div>

                <x-saveClearbuttons></x-saveClearbuttons>
            </form>

    
   


     
    @push('js')

        <script>
            window.addEventListener('alert', (event) => {
                let data = event.detail;
               
                Swal.fire({
                    title: data.title,
                    text: data.text,
                    icon: data.type,
                    confirmButtonText:  data.confirmButtonText
                })
            });
        </script>



    @endpush

 
     

</div>
 
 



