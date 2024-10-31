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

            .custom-border {
                border-bottom: 1px dashed #cccccc !important;
                border-top: none !important;
                border-right: none !important;
                border-left: none !important;

            }
        </style>
    @endpush

    <div class="row row-sm">
        <div class="col-sm-12 col-lg-5 col-xl-4">
            <div class="card custom-card">
                <div class="">
                    <div class="main-content-app main-content-contacts pt-0">
                        <div class="main-content-left main-content-left-contacts">
                            <nav class="nav main-nav-line main-nav-line-chat  pl-3">
                                <a class="nav-link active" data-toggle="tab" href="">All Contacts</a>
                                <a class="nav-link" data-toggle="tab" href="">Favorites</a>
                            </nav>
                            <div class="main-contacts-list ps ps--active-y" id="mainContactList">
                                <div class="main-contact-label">
                                    A
                                </div>


                                @foreach ($contacts as $contact)
                                    <div class="main-contact-item selected">
                                        <div class="main-img-user online">
                                            @if ($contact->attchments)
                                                @foreach ($contact->attchments as $pic)
                                                    <a href="{{ asset('storage/' . $pic) }}" target="_blank"><img
                                                            alt="avatar"src="{{ asset('storage/' . $pic) }}"> </a>
                                                @endforeach
                                            @else
                                                <img alt="avatar" src="http://127.0.0.1:8000/assets/img/faces/9.jpg">
                                            @endif

                                        </div>
                                        <div class="main-contact-body">
                                            <h6>{{ $contact->full_name }}</h6><span
                                                class="phone">{{ $contact->personal_phone_primary }}</span>
                                        </div>
                                        <a class="main-contact-star" href="">
                                            <i class="fe fe-star mr-1 text-warning"></i>
                                            <i class="fe fe-edit-2 mr-1"></i>
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                    </div>
                                @endforeach

                                <div class="main-contact-label">
                                    B
                                </div>

                                <div class="main-contact-item">
                                    <div class="main-avatar bg-danger">
                                        B
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Brateyley Cruz</h6><span>+1-234-567-890</span>
                                    </div>
                                    <a class="main-contact-star" href="">
                                        <i class="fe fe-star mr-1"></i>
                                        <i class="fe fe-edit-2 mr-1"></i>
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                </div>


                                <div class="main-contact-label">
                                    D
                                </div>
                                <div class="main-contact-item">
                                    <div class="main-img-user online"><img alt="avatar"
                                            src="http://127.0.0.1:8000/assets/img/faces/9.jpg"></div>
                                    <div class="main-contact-body">
                                        <h6>Darius Clayton</h6><span>+1-234-567-890</span>
                                    </div>
                                    <a class="main-contact-star" href="">
                                        <i class="fe fe-star mr-1"></i>
                                        <i class="fe fe-edit-2 mr-1"></i>
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                </div>

                                <div class="ps__rail-x" style="left: 0px; top: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 730px; right: 400px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 554px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-7 col-xl-8">
            <div class="">
                <a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>

                <form wire:submit='store'>

                    <div class="main-content-body main-content-body-contacts card custom-card">
                        <div class="main-contact-info-header pt-3">
                            <div class="media">
                                <div class="main-img-user ">

                                    @if ($contactImage)
                                        <img src="{{ $contactImage->temporaryUrl() }}"
                                            class="form-control @error('contactImage')
                                        is-invalid
                                        @enderror">
                                        @include('layouts._show-error', ['field_name' => 'contactImage'])
                                    @else
                                        <img alt="avatar" src="{{ $image1 }}"
                                            class="form-control  @error('contactImage')
                                        is-invalid
                                        @enderror"
                                            style="background-color: #e1e5ef">
                                    @endif

                                    <label for="imageUpload" class="main-img-user1">

                                        <i class="fe fe-camera"></i></label>
                                    <input wire:model='contactImage' name="contactImage" type="file" id="imageUpload"
                                        accept="image/*" style="display: none">


                                </div>


                                <div wire:loading wire:target='contactImage' id="global-loader_custome">
                                    <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img"
                                        alt="Loader">

                                </div>



                                <div class="media-body mr-2 ">
                                    <x-input wire:model='full_name' name="full_name" divWidth="8" marginBottom="1"
                                        class="text-primary custom-border mb-1 " placeholder="الاسم كامل"
                                        style="font-weight:700 !important;font-size: 18px;"></x-input>

                                    <div class="d-flex justify-content-between align-items-center">


                                        <x-input wire:model='short_description' name="short_description"
                                            divWidth="8" class="custom-border" placeholder="وصف مختصر"></x-input>


                                        <nav class="contact-info text-left">

                                            <x-actions class="contact-icon border tx-inverse" edit></x-actions>
                                            <x-actions del></x-actions>
                                        </nav>
                                    </div>


                                </div>
                            </div>


                        </div>


                        <div>

                            <div class="row mt-3 justify-content-start align-items-center pr-4">

                                <x-select class="custom-border " wire:model='contact_type' wire:change="contactType"
                                    name="contact_type" :options="$statuses->where('p_id_sub', 1235)->pluck('status_name', 'id')" ChoseTitle="نوع جهة الاتصال"
                                    marginBottom="0" divWidth="3"></x-select>



                                @if ($ContactTypeToshow == 1236)
                                    <x-input wire:model='fname' name="fname" divWidth="2" class="custom-border"
                                        placeholder="{{ __('mytrans.fname') }}"></x-input>

                                    <x-input wire:model='sname' name="sname" divWidth="2" class="custom-border"
                                        placeholder="{{ __('mytrans.sname') }}"></x-input>


                                    <x-input wire:model='tname' name="tname" divWidth="2" class="custom-border"
                                        placeholder="{{ __('mytrans.tname') }}"></x-input>

                                    <x-input wire:model='lname' name="lname" divWidth="2" class="custom-border"
                                        placeholder="{{ __('mytrans.lname') }}"></x-input>


                                    <x-input wire:model='nick_name' name="nick_name" divWidth="3"
                                        class="custom-border" placeholder="{{ __('mytrans.nick_name') }}"></x-input>
                                @elseif (in_array($ContactTypeToshow, ['1237', '1238', '1239']))
                                    <x-input wire:model='responsible' name="responsible" divWidth="3"
                                        class="custom-border"
                                        placeholder="{{ __('mytrans.responsible') }}"></x-input>
                                @endif

                                <x-input wire:model='identity_number' name="identity_number" divWidth="3"
                                    class="custom-border"
                                    placeholder="{{ __('mytrans.identity_number') }}"></x-input>
                            </div>

                        </div>


                      


                        <div class="main-contact-info-body p-4 ">

                            <div class="media-list pb-0">
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <x-input wire:model='personal_phone_primary' name="personal_phone_primary"
                                                divWidth="6" label class="custom-border mt-0 pt-0"
                                                labelclass="pb-0"></x-input>

                                        </div>
                                        <div>
                                            <x-input wire:model='personal_phone_secondary'
                                                name="personal_phone_secondary" divWidth="6" label
                                                class="custom-border mt-0 pt-0" labelclass="pb-0"></x-input>

                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="media-body">
                                        <div>
                                            <x-input wire:model='work_phone_primary' name="work_phone_primary"
                                                divWidth="6" label class="custom-border mt-0 pt-0"
                                                labelclass="pb-0"></x-input>

                                        </div>
                                        <div>
                                            <x-input wire:model='work_phone_secondary' name="work_phone_secondary"
                                                divWidth="6" label class="custom-border mt-0 pt-0"
                                                labelclass="pb-0"></x-input>

                                        </div>
                                    </div>
                                </div>



                                <hr>
                            
                                <div class="pr-3"  name="properties"  >

                                    @foreach ($questions as $index => $question)
                                        <div class=" row align-items-center">

                                            <Select class="form-control  w-25"
                                                wire:model='templates.{{ $index }}'>
                                                <option value="">اختار اعمدة</option>

                                                @foreach ($all_templates ?? [] as $template1)
                                                    <option value="{{ $template1->status_name }}">
                                                        {{ $template1->status_name }}
                                                    </option>
                                                @endforeach
                                            </Select>


                                            <x-input wire:model="questions.{{ $index }}"
                                                divWidth="4"></x-input>

                                            <x-actions mins
                                                wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                                        </div>
                                    @endforeach

                                </div>



                                <x-actions plus wire:click.prevent='addQuestion'></x-actions>

                            
                                <div wire:loading wire:target='contactImage' id="global-loader_custome">
                                    <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img"
                                        alt="Loader">

                                </div>


                                <hr>

                                <div class="media">
                                    <div class="media-body">
                                        <div>


                                            <x-select class="custom-border " wire:model='address_type'
                                                wire:change="contactType" name="address_type" :options="$statuses
                                                    ->where('p_id_sub', 1240)
                                                    ->pluck('status_name', 'id')"
                                                ChoseTitle="طبيعة العنوان" divWidth="3"></x-select>

                                            @include('layouts._address-form')

                                            <x-input wire:model='address_specific' name="address_specific"
                                                labelclass="pb-0 mt-3" divWidth="12"
                                                class=" custom-border pt-0 mt-0 pb-0 mb-0" label></x-input>

                                            <x-input wire:model='notes' name="notes" labelclass="pb-0 mt-3"
                                                divWidth="12" class=" custom-border pt-0 mt-0 pb-0 mb-0"
                                                label></x-input>
                                        </div>
                                    </div>
                                </div>



                            </div>






                            <div class="ps__rail-x" style="left: 0px; top: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 824px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>

                            <div>

                                <x-textarea wire:model='description' name="description" label labelname="وصف"
                                    divWidth="12" rows="2" divclass="text-muted"></x-textarea>
                                <x-textarea wire:model='note' name="note" label divWidth="12" rows="2"
                                    divclass="text-muted"></x-textarea>
                            </div>


                        </div>
                    </div>




            </div>
            <x-saveClearbuttons></x-saveClearbuttons>
            </form>
        </div>
    </div>

</div>



</div>
