<div>


    <x-slot:crumb>
        <x-breadcrumb></x-breadcrumb>
    </x-slot:crumb>


    <div class="row  m-auto">
        <div class="col-lg-12">

            <div class="card custom-card">

                <div class="card-body">
                    <section class="container my-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a data-toggle="collapse" href="#collapse-region" aria-expanded="true"
                                    aria-controls="collapse-region" id="heading-region" class="d-block ">
                                    <i class="fa fa-chevron-down pull-right "></i>
                                    تكوين المحافظات
                                </a>
                            </div>
                            <div class="text-center mr-2">
                                <button class="btn reload"><i class="ti-reload text-warning"></i></button>
                            </div>
                        </div>
                        <livewire:AddressModule.RegionClass></livewire:AddressModule.RegionClass>


                    </section>

                </div>


                <div class="card-body">
                    <section class="container my-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a data-toggle="collapse" href="#collapse-city" aria-expanded="true"
                                    aria-controls="collapse-city" id="heading-city" class="d-block ">
                                    <i class="fa fa-chevron-down pull-right "></i>
                                    تكوين المدن
                                </a>
                            </div>
                            <div class="text-center mr-2">
                                <button class="btn reload"><i class="ti-reload text-warning"></i></button>
                            </div>
                        </div>
                        <livewire:AddressModule.CityClass></livewire:AddressModule.CityClass>


                    </section>

                </div>



                <div class="card-body">
                    <section class="container my-2 ">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a data-toggle="collapse" href="#collapse-neighbourhood" aria-expanded="true"
                                    aria-controls="collapse-neighbourhood" id="heading-neighbourhood" class="d-block ">
                                    <i class="fa fa-chevron-down pull-right "></i>
                                    تكوين الاحياء
                                </a>
                            </div>
                            <div class="text-center mr-2">
                                <button class="btn reload"><i class="ti-reload text-warning"></i></button>
                            </div>
                        </div>


                        <livewire:AddressModule.NeighbourhoodClass></livewire:AddressModule.NeighbourhoodClass>

                    </section>

                </div>


                <div class="card-body">
                    <section class="container my-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a data-toggle="collapse" href="#collapse-location" aria-expanded="true"
                                    aria-controls="collapse-location" id="heading-location" class="d-block ">
                                    <i class="fa fa-chevron-down pull-right "></i>
                                    تكوين المعالم
                                </a>
                            </div>
                            <div class="text-center mr-2">
                                <button class="btn reload"><i class="ti-reload text-warning"></i></button>
                            </div>
                        </div>
                        <livewire:AddressModule.locationClass></livewire:AddressModule.locationClass>


                    </section>

                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/my-js/jquery.min.js') }}"></script>
    <script>
        $('.reload').on('click', function() {
            location.reload();
        })
    </script>
</div>
