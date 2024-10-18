<div id="collapse-neighbourhood" class="collapse show" aria-labelledby="heading-neighbourhood">
    <p class="card-header"> </p>

    <div>


        <form wire:submit="store">

            <div class="d-flex border h-0 align-items-center p-2 ">

                <x-input name="neighbourhood_name" wire:model="neighbourhood_name" label="yes"></x-input>

                <x-select name="city_id" class="js-select2" jsSelect2 wireIgone :options="$cities->pluck('city_name', 'city_id')" wire:model="city_id"
                    label="yes"></x-select>

            </div>

            <x-saveClearbuttons></x-saveClearbuttons>

        </form>

    </div>

 


    <x-search-index-section>

        <x-select class="js-select2" :options="$regions->pluck('region_name', 'id')" name="region_id" wire:model.live="regionIdSearch"></x-select>


        <x-select name="cityIdSearch" class="js-select2" jsSelect2 wireIgone :options="$cities->pluck('city_name', 'city_id')"
            wire:model.live="cityIdSearch"></x-select>

    </x-search-index-section>


    <div class="table-responsive ">
        <div id="cityTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="cityTable"
                role="grid" aria-describedby="neighbourhoodTable">

                <thead>
                    <th>#</th>
                    <x-table-th wire:click="setSortBy('neighbourhood_name')" name="neighbourhood_name"
                        sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('region_name')" name="region_name" sortBy={{ $sortBy }}
                        sortdir={{ $sortdir }}></x-table-th>

                    <x-table-th wire:click="setSortBy('city_name')" name="city_name" sortBy={{ $sortBy }}
                        sortdir={{ $sortdir }}></x-table-th>

                
                    <th>{{ __('mytrans.actions') }}</th>

                </thead>
                <tbody>

                    @foreach ($neighbourhoods as $key => $neighbourhood)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            @if ($editNeighbourhoodId === $neighbourhood->neighbourhood_id)
                                <td><x-input wire:model='editNeighbourhoodName' name='neighbourhood_name'
                                        divWidth='10'></x-input></td>
                            @else
                                <td>{{ $neighbourhood->neighbourhood_name }}</td>
                            @endif



                            @if ($editNeighbourhoodId === $neighbourhood->neighbourhood_id)
                                <td>
                                    <x-select :options="$regions->pluck('region_name', 'region_id')" name="region_id" wire:model="regionIdUpdate"
                                        divWidth='10'></x-select>
                                </td>
                            @else
                                <td>{{ $neighbourhood->region_name }}</td>
                            @endif


                            @if ($editNeighbourhoodId === $neighbourhood->neighbourhood_id)
                                <td>
                                    <x-select :options="$cities->pluck('city_name', 'city_id')" name="city_id" wire:model="cityIdUpdate"
                                        divWidth='10'></x-select>
                                </td>
                            @else
                                <td>{{ $neighbourhood->city_name }}</td>
                            @endif



                            <td class="d-flex  justify-content-center align-items-center">
                                @if (!($editNeighbourhoodId === $neighbourhood->neighbourhood_id))
                                    <x-actions edit
                                        wire:click.prevent='edit({{ $neighbourhood->neighbourhood_id }})'></x-actions>
                                    <x-actions del
                                        wire:click.prevent='destroy({{ $neighbourhood->neighbourhood_id }})'></x-actions>
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
            {{ $neighbourhoods->links(data: ['scrollTo' => '#collapse-neighbourhood']) }}
        </div>


    </div>
</div>