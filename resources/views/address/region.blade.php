 <div id="collapse-region" class="collapse show" aria-labelledby="heading-region">
     <p class="card-header"> </p>


     <div>


         <form wire:submit="store">

             <div class="d-flex border h-0 align-items-center p-2 ">

                 <x-input name="region_name" wire:model="region_name" label="yes"></x-input>


             </div>

             <x-saveClearbuttons></x-saveClearbuttons>

         </form>

     </div>



     <div class="table-responsive ">
         <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
             <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable w-md-50  "
                 id="example2" role="grid" aria-describedby="example2_info">
                 <thead>
                     <th class="">#</th>
                     <th class="">{{ __('mytrans.region_name') }}</th>
                     <th>{{ __('mytrans.actions') }}</th>

                 </thead>
                 <tbody>

                     @foreach ($regions as $key => $region)
                         <tr>
                             <td class="smallTd">{{ $key + 1 }}</td>
                             @if ($regionId === $region->region_id)
                                 <td> <x-input wire:model='regionName' name='regionName' divWidth="8"></x-input></td>
                             @else
                                 <td class="smallTd">{{ $region->region_name }}</td>
                             @endif

                             
                                <td class="d-flex  justify-content-center smallTd">
                                    @if (!($regionId === $region->region_id))
                                 <x-actions edit wire:click.prevent='edit({{ $region->region_id }})'></x-actions>
                                 <x-actions del wire:click.prevent='destroy({{ $region->region_id }})'></x-actions>
                                 @else
                                 <x-actions make wire:loading.attr='disabled'
                                     wire:click.prevent='update'></x-actions>
                                 <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                             @endif
                             </td>
                         </tr>
                     @endforeach



                 </tbody>
             </table>
         </div>
     </div>
