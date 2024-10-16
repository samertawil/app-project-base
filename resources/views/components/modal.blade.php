<div>

    @props([
     'idName'=>'', 
     'title'  =>'',
     'width'=>'lg',
     'modalType'=>null,
    ])


    <div wire:ignore.self  class="modal fade" id="{{$idName}}" >
        <div class="modal-dialog modal-{{$width}} {{$modalType}} " role="document" >
            <div class="modal-content modal-content-demo  " >
                <div class="modal-header">
                    <h6 class="modal-title text-dark">{{$title}}</h6><button aria-label="Close"
                        class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                             
    {{ $slot}}
                   </div>
                <div class="modal-footer">
                                        <button class="btn ripple btn-secondary" data-dismiss="modal"
                        type="button">اغلاق</button>
                </div>
            </div>
        </div>
    </div>

 
    @push('js')
        <script>
         
          var modalId=  $('.modal').attr('id');
         
            window.addEventListener('closeModel', event => {
                $(`#${modalId}`).modal('hide');
            })
        </script>
    @endpush

</div>

