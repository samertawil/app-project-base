 <div>


      <x-input name="roleName" placeholder="اسم المجموعة"  :value="$roles->name??''" wire:model="roleName"></x-input>

    <div class="card row p-3">
        <div class="col-6 border p-3">
            <div>

                @foreach ($abilities_module as $module)
                    <p class="  fw-bolder p-3 bg-secondary">{{ $module->modulename->status_name }}</p>
            </div>


            <div class="">
                @foreach ($abilities->where('module_id', $module->module_id) as $ability)
                
                    <div class="form-check m-3 ">
                        <input type="checkbox" id="{{ $ability->id }}" name="abilities[]" wire:model='abilitiesId'
                      
                            value="{{ $ability->ability_name }}" @class([
                                'form-check-input',
                                'is-invalid' => $errors->has('abilities'),
                            ])
                            {{ !is_null(old('abilities')) && in_array($ability->ability_name, old('abilities')) ? 'checked' : '' }}

                           
                             @checked((in_array($ability->ability_name, $roles->abilities?? [])))
                            >

                        <label for="{{ $ability->id }}" @class([
                            'form-check-label',
                            'mx-4',
                            'text-danger text-decoration-line-through' =>
                                $ability->activation == 'not active',
                        ])>
                            {{ $ability->ability_description }} </label>
                    </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>



 </div>