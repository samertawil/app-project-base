<div>
  
    
    <x-slot:crumb>
        <x-breadcrumb></x-breadcrumb>
    </x-slot:crumb>

    @push('css')
<style>
         .smallTd {
        padding: 0px 15px !important;
        line-height: 1.462;
      }

      .select2-selection--single {
        height: 40px !important;
        padding: 0.375rem 2px !important;  
        border: 1px solid #e1e5ef !important;  
      }

      .select2-selection--single .select2-selection__arrow{
        top: 8px !important;
      }
</style>
 
<link rel="stylesheet" href="{{ asset('assets/my-css/select2.min.css') }}">  
 
 
    @endpush

    <div class="row  m-auto">
        <div class="col-lg-12">

            <div class="card custom-card">

                <div class="card-body">
                    <section class="container my-2">

                        <a data-toggle="collapse" href="#collapse-region" aria-expanded="true"
                        aria-controls="collapse-region" id="heading-region" class="d-block ">
                        <i class="fa fa-chevron-down pull-right "></i>
                        تكوين المحافظات
                    </a>

                    <livewire:AddressModule.RegionClass></livewire:AddressModule.RegionClass>


                    </section>

                </div>

                
                <div class="card-body">
                    <section class="container my-2">

                        <a data-toggle="collapse" href="#collapse-city" aria-expanded="true"
                        aria-controls="collapse-city" id="heading-city" class="d-block ">
                        <i class="fa fa-chevron-down pull-right "></i>
                        تكوين المدن
                    </a>

                    <livewire:AddressModule.CityClass></livewire:AddressModule.CityClass>


                    </section>

                </div>


                <div class="card-body">
                    <section class="container my-2">

                        <a data-toggle="collapse" href="#collapse-neighbourhood" aria-expanded="true"
                        aria-controls="collapse-neighbourhood" id="heading-neighbourhood" class="d-block ">
                        <i class="fa fa-chevron-down pull-right "></i>
                        تكوين الاحياء
                    </a>

                    <livewire:AddressModule.NeighbourhoodClass></livewire:AddressModule.NeighbourhoodClass>


                    </section>

                </div>


                <div class="card-body">
                    <section class="container my-2">

                        <a data-toggle="collapse" href="#collapse-location" aria-expanded="true"
                        aria-controls="collapse-location" id="heading-location" class="d-block ">
                        <i class="fa fa-chevron-down pull-right "></i>
                        تكوين المعالم
                    </a>

                    <livewire:AddressModule.locationClass></livewire:AddressModule.locationClass>


                    </section>

                </div>

            </div>
        </div>
    </div>
  
</div>
