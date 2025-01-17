<div>

    @props([
        'idName' => '',
        'title' => '',
        'width' => 'lg',
        'modalType' => null,
        'footerSave' => null,
        'ttr' => null,
        'name' => 'حفظ',
        'iclassName'=>'',
        'iclass'=>'',
    ])


    <div wire:ignore.self class="modal fade" id="{{ $idName }}">
        <div class="modal-dialog modal-{{ $width }} {{ $modalType }} " role="document">
            <div class="modal-content modal-content-demo  ">
                <div class="modal-header">
                    <h6 class="modal-title text-dark">{{ $title }}</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    {{ $slot }}
                </div>


                <div class="modal-footer d-flex justify-content-start" dir="ltr">


                
                    <div @class(['my-4 text-left mx-1 '])> 

                        <button type="submit" wire:loading.attr='disabled'
                            {{$attributes->class(['btn btn-md btn-info',
                                 ]) }}  >{{$name}}
                                   @if($iclass)
                                   <i class="{{$iclassName}}"></i>
                                   @endif
                        </button>
                    
                    </div>

                    <x-button type="button" name="اغلاق" class="bg-secondary" data-dismiss="modal"
                        wire:loading.attr='disabled'></x-button>

                    <div wire:loading>
                        <img src="{{ URL::asset('assets/img/loader.svg') }}" alt="Loader">
                    </div>
                </div>



                



            </div>
        </div>
    </div>


    @push('js')
        <script>
            var modalId = $('.modal').attr('id');

            window.addEventListener('closeModel', event => {
                $(`#${modalId}`).modal('hide');
            })
        </script>
    @endpush

</div>


{{-- <x-button class="btn-light-info"  data-target="#regionModal" data-toggle="modal"   name="ادارة المحافظات"></x-button> --}}




{{-- <x-modal idName="regionModal" width="xl" title='ادارة المحافظات'>

    <livewire:AddressesModule.RegionResource></livewire:AddressesModule.RegionResource> 

</x-modal> --}}
