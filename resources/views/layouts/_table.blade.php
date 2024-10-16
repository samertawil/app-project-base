<div>

    <div class="card-body" dir="rtl">
        <div class="table-responsive border-top userlist-table">
            <table class="table card-table table-striped table-vcenter text-nowrap mb-0" dir="rtl" id="mytable">
                <thead>
                    <tr>
                        <th class="wd-lg-5p"><span>#</span></th>
                        <th class="wd-lg-10p"><span>اسم المجموعة</span></th>
                        <th class="wd-lg-20p"><span> الصلاحية</span></th>
                        <th class="wd-lg-10p"><span>تاريخ الانشاء</span></th>
                        <th class="wd-lg-20p">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        @foreach ($roles as $key => $role)
                            <td style="text-align: right; !important">{{ $key + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ implode(',', $role->abilities) }}</td>
                            <td>{{ myDateStyle1($role->created_at) }}</td>

                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="las la-pen"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>



{{-- 
<td @class([
    'd-flex',
    'text-danger' => $user->user_activation == 0,
    'text-success' => $user->user_activation == 1,
])>
    <div @class([
        'bg-danger dot-label ml-2' => $user->user_activation == 0,
        'bg-success dot-label ml-2' => $user->user_activation == 1,
    ])></div>

    {{ $user->user_activation == 1 ? 'فعال' : 'غير فعال' }}

</td> --}}