<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="notranslate">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>تعيين كلمة المرور</title>
</head>

<body>

    @include('layouts._alert-session')

@php
    $data=URL::current();
    $data2=explode('/',$data);
    $idcFromUrl=($data2[(count($data2))-1]);
@endphp

    <div class="d-flex mt-4" style="height: 600px;">
        <div class="container m-auto">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">اعادة تعيين كلمة المرور</div>

                        <div class="card-body">
                            <form action="{{ route('change.password.submit',$citizen->idc) }}" method="POST">
                                @csrf


                                <div class="row mb-3">
                                    <label for="idc"
                                        class="col-md-4 col-form-label text-md-end">{{ __('mytrans.idc') }}</label>

                                    <div class="col-md-6">
                                        <input id="idc" type="number"
                                            class="form-control @error('idc') is-invalid @enderror"   name="idc"
                                           
                                            value="{{ old('idc',$citizen->idc) }}" disabled   >
                                     
                                        @error('idc')
                                            <span class="invalid-feedback" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <p></p>
                                </div>

                             
                              
{{-- 
                                  <div class="row mb-3">
                                    <label for="birthday"
                                        class="col-md-4 col-form-label text-md-end">{{ __('mytrans.birthday') }}</label>

                                    <div class="col-md-6">
                                        <input id="birthday" type="date" class="form-control @error('birthday') is-invalid
                                            
                                        @enderror" name="birthday"
                                            value="{{ old('birthday') }}" autocomplete="birthday">

                                            @error('birthday')
                                            <span class="invalid-feedback" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="row mb-4 align-items-center">
                                    <label for="birthday"
                                        class="mt-4 col-md-4 col-form-label text-md-end required">{{ __('mytrans.birthday') }}

                                    </label>

                                    <div class="col-4 col-md-2 text-center">
                                        <label for="" class="mb-2">{{ __('mytrans.year') }}</label>
                                        <select name="year" id=""
                                            class="form-select @error('year') is-invalid @enderror">
                                            <option value=""></option>
                                            @for ($i = 2008; $i >= 1900; $i--)
                                                <option value="{{ $i }}" @selected(old('year') == $i)>
                                                    {{ $i }}</option>
                                            @endfor

                                        </select>


                                    </div>



                                    <div class="col-4 col-md-2 text-center">
                                        <label for="" class="mb-2">{{ __('mytrans.month') }}</label>
                                        <select name="month" id=""
                                            class="form-select @error('month') is-invalid @enderror">
                                            <option value=""></option>
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i < 10 ? '0' . $i : $i }}"
                                                    @selected(old('month') == $i)>
                                                    {{ $i < 10 ? '0' . $i : $i }}</option>
                                            @endfor

                                        </select>

                                        @error('month')
                                            <span class="invalid-feedback" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4 col-md-2 text-center">
                                        <label for="" class="mb-2">{{ __('mytrans.day') }}</label>
                                        <select name="day" id=""
                                            class="form-select @error('day') is-invalid @enderror">
                                            <option value=""></option>
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i < 10 ? '0' . $i : $i }}"
                                                    @selected(old('day') == $i)>
                                                    {{ $i < 10 ? '0' . $i : $i }}</option>
                                            @endfor

                                        </select>
                                        @error('day')
                                            <span class="invalid-feedback" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="birthday"
                                        class=" @error('birthday') is-invalid
                                            
                                    @enderror">
                                    @error('birthday')
                                        <span class="invalid-feedback  text-lg-center " role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
<div class="text-center mb-4   ">
    <input type="hidden" name="t1" class="@error('answer_alert') is-invalid @enderror">
    @error('answer_alert')
    <span class="invalid-feedback" role="alert">
        <small>{{ $message }}</small>
    </span>
@enderror
</div>
                               

                                @if ($citizen->q1)
                                <div class="row mb-3">

                                    <label for="q1" class="col-md-4 col-form-label text-md-end">السؤال
                                        الاول</label>

                                    <div class="col-md-3">
                                        <p id="q1_p" type="text" class="form-control border-0">
                                                {{$citizen->q1}}؟
                                        </p>

                                    </div>

                                    <div class="col-md-3">
                                        <input name="answer_q1" type="text" value="{{old('answer_q1')}}"   @class([
                                           'form-control',
                                           'is-invalid' =>$errors->has('answer_q1')
                                        ]) >
                                        <small class="text-muted"> مثال: 2012</small>
                                          @include('layouts._show-error',['field_name'=>'answer_q1'])
                                    </div>
                                  
                                </div>
                                @endif

                              

                               @if ($citizen->q2)
                               <div class="row mb-3">

                                <label for="q2" class="col-md-4 col-form-label text-md-end">السؤال
                                    الثاني</label>

                                <div class="col-md-3">
                                    <p id="q2_p" type="text" class="form-control border-0">
                                     {{  $citizen->q2  }}؟
                                    </p>

                                </div>

                                <div class="col-md-3">
                                    <input name="answer_q2" value="{{old('answer_q2')}}"   @class([
                                        'form-control',
                                        'is-invalid' =>$errors->has('answer_q2')
                                     ]) >
                                       <small class="text-muted"> مثال: 1984</small>
                                       @include('layouts._show-error',['field_name'=>'answer_q2'])
                                </div>

                            </div>
                               @endif

                               

                               
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">كلمة المرور
                                        الجديدة</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end"> تأكيد
                                        كلمة المرور </label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>



                              
                                    <div class="text-end">
                <button type="submit" class="btn btn-primary">
                                             __('mytrans.renewPassword')
                                        </button>
                                    </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

</body>

</html>
