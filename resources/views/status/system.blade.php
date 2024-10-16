<div>
    <div id="collapse-system" class="collapse show" aria-labelledby="heading-system">
        <p class="card-header"> </p>


        <div>


            <form wire:submit="systemStore">
                <div class="d-flex border h-0 align-items-center p-2 ">

                    <x-input name="system_name" wire:model="system_name" label="yes"
                        title="اسماء الانظمة الرئيسية المشغولة بهذا النظام"></x-input>
                    <x-input name="description" wire:model="description" label="yes"
                        title="شرح بسيط عن النظام"></x-input>

                </div>

                <div class="d-flex justify-content-start" dir="ltr">
                    <x-button type="submit"></x-button>
                    <x-button type="reset" name="مسح" class="bg-secondary"></x-button>
                </div>


            </form>

        </div>



        <div class="container">
            <table class="table  my-5">
                <thead>
                    <th>#</th>
                    <th>{{ __('mytrans.system_name') }}</th>
                    <th>حالة النظام</th>
                    <th>{{ __('mytrans.description') }}</th>
                </thead>
                <tbody>

                    @foreach ($systems_data as $system_data)
                        <tr>
                            <td>{{ $system_data->id }}</td>
                            <td>{{ $system_data->system_name }}</td>
                            <td @class ([
                                'text-success' => ($system_data->active = 1),
                                'text-danger' => ($system_data->active = 0),
                            ])>
                                {{ $system_data->active = 1 ? 'فعال' : 'غير فعال' }}</td>
                            <td>{{ $system_data->description }}</td>

                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>