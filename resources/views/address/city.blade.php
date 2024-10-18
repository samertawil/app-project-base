<div id="collapse-city" class="collapse show" aria-labelledby="heading-city">
    <p class="card-header"> </p>


    <div>


        <form wire:submit="store">

            <div class="d-flex border h-0 align-items-center p-2 ">

                <x-input name="city_name" wire:model="city_name" label="yes"></x-input>

                <x-select  :options="$regions->pluck('region_name', 'region_id')" name="region_id" wire:model="region_id"
                    label="yes"></x-select>


            </div>

            <x-saveClearbuttons></x-saveClearbuttons>

        </form>

    </div>

    <x-search-index-section>

        <x-select  :options="$regions->pluck('region_name', 'region_id')" name="regionIdSearch"
            wire:model.live="regionIdSearch"></x-select>

    </x-search-index-section>

    <div class="table-responsive ">
        <div id="cityTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable w-md-75 "
                id="cityTable" role="grid" aria-describedby="cityTable">
                <thead>
                    <th>#</th>
                    <th>{{ __('mytrans.city_name') }}</th>
                    <th>{{ __('mytrans.region_name') }}</th>
                    <th>{{ __('mytrans.actions') }}</th>
                </thead>
                <tbody>

                    @foreach ($cities as $key => $city)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            @if ($cityId == $city->city_id)
                                <td> <x-input wire:model='editCityName' name='city_name' divWidth='10'> </x-input>
                                </td>
                            @else
                                <td>{{ $city->city_name }}</td>
                            @endif

                            @if ($cityId == $city->city_id)
                                <td>
                                    <x-select :options="$regions->pluck('region_name', 'region_id')" name="region_id" wire:model="regionIdUpdate"
                                        divWidth='10'></x-select>
                                </td>
                            @else
                                <td>{{ $city->region_name }}</td>
                            @endif

                            <td class="d-flex  justify-content-center align-items-center">
                                @if (!($cityId == $city->city_id))
                                    <x-actions edit wire:click.prevent='edit({{ $city->city_id }})'></x-actions>
                                    <x-actions del wire:click.prevent='destroy({{ $city->city_id }})'></x-actions>
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
            {{ $cities->links(data: ['scrollTo' => '#collapse-city']) }}

        </div>

    </div>
</div>
