<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'required' => 'حقل :attribute مطلوب',
    'unique' => 'الحقل :attribute مكرر لنفس القيمة المدخلة.',
    'numeric' => 'الحقل :attribute يجب ان يكون ارقام.',
    'image' => 'حقل :attribute يجب ان يكون من نوع صورة .',
    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'الحقل :attribute لا يمكن ان يكون اقل من تاريخ 7/10/2023 .',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'ascii' => 'The :attribute must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'الحقل :attribute لا يمكن ان يكون اعلى من تاريخ اليوم ',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'decimal' => 'The :attribute must have :decimal decimal places.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],

    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lowercase' => 'The :attribute must be lowercase.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'حقل :attribute يجب ان لا تتجاوز قيمته :max kilobytes.',
        'numeric' => 'الحقل :attribute يجب ان لا تتجاوز قيمته :max kilobytes.',
        'string' => 'عدد حروف الحقل :attribute يجب ان لا تتجاوز :max حرف.',
    ],
    'max_digits' => 'عدد (حروف/ارقام) حقل :attribute لا يجب ان تتجاوز :max (حروف/ارقام.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'عدد ارقام الحقل :attribute يجب ان تكون على الاقل :min.',
        'string' => 'عدد حروف حقل :attribute يجب ان تكون على الاقل :min حروف.',
    ],
    'min_digits' => 'عدد حروف/ارقام الحقل :attribute يجب ان تكون على الاقل :min حرف/رقم.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',

    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',

    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'حقل :attribute وحقل :other غير متطابقين.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',

    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute must be uppercase.',
    'url' => 'The :attribute must be a valid URL.',
    'ulid' => 'The :attribute must be a valid ULID.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'idc' => 'رقم الهوية',
        'password' => 'كلمة المرور',
        'mobile' => 'الهاتف الخليوي',
        'birthday' => 'تاريخ الميلاد ',
        'address_specific' => 'استكمال العنوان',
        'address_type' => 'طبيعة العنوان',
        'area_id' => 'المنطقة',
        'city_id' => 'المدينة',
        'neighbourhood_id' => 'الحي',
        'region_id' => 'المحافظة',
        'current_address_status' => 'الحالة الحالية للسكن',
        'mobile1' => 'الهاتف الخليوي',
        'mobile2' => 'الهاتف الخليوي',
        'damage_type' => 'نوع الضرر',
        'damage_specific' => 'طبيعة الضرر',
        'answer_q1' => 'اجابة السؤال الاول',
        'answer_q2' => 'اجابة السؤال الثاني',
        'living_type' => 'التواجد بالمبنى ',
        'missing_date' => 'تاريخ الفقد',
        'building_type' => 'نوع المبنى',
        'building_name' => 'اسم المبنى',
        'damage_date' => 'تاريخ الضرر',
        'places_id' => 'اسم المبنى',
        'owner_idc' => 'رقم هوية المالك',
        'unit_damage_date' => 'تاريخ تضرر الوحدة',
        'beneficiary_idc' => 'رقم هوية المستفيد',
        'damage_size' => 'حجم الضرر',
        'unit_type' => 'المقيم في الوحدة السكنية',
        'citizen_type' => 'حالة المواطنة',
        'email' => 'البريد الالكتروني',
        'transport_category' => 'تصنيف الضرر',
        'regestration_idc' => ' هوية المالك',
        'transport_type' => 'نوع الضرر',
        'transport_no' => 'رقم المركبة/المنشاه',
        'attachments' => 'المرفقات',
        'gender' => 'الجنس',
        'marital_status' => 'الحالة الاجتماعية',
        'missing_full_name' => 'اسم المفقود',
        'missing_date' => 'تاريخ الفقد',
        'family_count_north' => 'عدد الافراد بالشمال',
        'family_count' => 'عدد افراد الاسرة',
        'part_id' => 'المنطقة الرئيسية',
        'area_id' => 'المنطقة الاصلية',
        'location_id' => 'المعلم',
        'location_name'=> 'المعلم',
        'benefits_status' => 'حالة الاعتماد',
        'reasons' => 'الاسباب',
        'revieved_idc' => 'هوية المستفيد',
        'organization_name' => 'مؤسسة التوزيع',
        'full_name'  => 'الاسم',
        'couple_idc'  => 'هوية الزوج/ة',

        'captcha' => 'كود التحقق',
        'mobile_primary'  => 'الهاتف الاساسي',
        'mobile_secondary' => 'الهاتف البديل',
        'issue_description' => 'التفصيل',
        'status_id' => 'الحالة',
        'replay' => 'الرد',
        'replay_date' => 'تاريخ الرد',
        'employee_name' => 'اسم الموظف',
        'gov_city_id' => 'المدينة',
        'gov_neighbourhood_id'  => 'الحي',
        'gov_location_id' => 'اقرب معلم',
        'gov_regions_id' => 'المحافظة',
        'year' => 'السنة',
        'month' => 'الشهر',
        'day' => 'اليوم',
        'ability_name'=>'اسم الصلاحية',
        'ability_description'=>'وصف الصلاحية',
        'url'=>'الرابط',
        'module_id'=>'اسم النظام',
        'activation'=>'تفعيل',
        'status_name'=>'الحالة',
        'page_name'=>'اسم الصفحة',
        'user_name'=>'اسم المستخدم',
        'passwordConfirmation'=>'تاكيد كلمة المرور',
        'abilities'=>'الصلاحيات',
        'actions'=>'الاجراءات',
        'need_to_change'=>'مطلوب تغير كلمة المرور',
        'currentPassword'=>'كلمة المرور الحالية',
        'region_name'=>'المحافظة',
        'regionName'=>'المحافظة',
        'region_id'=>'المحافظة',
        'city_name'=>'المدينة',
        'neighbourhood_name'=>'الحي',
        'neighbourhood_id'=>'الحي',
        'city_id'=>'المدينة',
        'fname'=>'الاسم الاول',
        'sname'=>'الاب',
        'tname'=>'الجد',
        'lname'=>'العائلة',
        'identity_number'=>'رقم التعريف',
        'nick_name'=>'اسم الشهرة',
        'responsible'=>'اسم الشخص المسؤل',
        'personal_phone_primary'=>'الهاتف الشخصي - اساسي',
        'personal_phone_secondary'=>'الهاتف الشخصي - ثانوي',
        'work_phone_primary'=>'هاتف العمل  - ثانوي',
        'work_phone_secondary'=>'هاتف العمل  - ثانوي',
        'note' => 'الملاحظات',
        'notes' => 'الملاحظات',
        'contact_image'=>'صورة الملف',
        'contactImage'=>'صورة الملف',
    ],

];
