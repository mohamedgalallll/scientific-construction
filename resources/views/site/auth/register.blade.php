@extends('site.layout.index')
@section('main_css')
@stop
@section('main_js')
    <script>
        $('#registerForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 4,
                },
                email: {
                    required: true,
                    email: true,

                },
                phone: {
                    required: true,
                    number: true,
                    minlength: 10,
                },
                country_id: {
                    required: true,
                    number: true,
                    minlength: 1,
                    maxlength: 3,
                },
                city_id: {
                    required: true,
                    number: true,
                    minlength: 1,
                    maxlength: 3,
                }, gender: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 8,
                },
                password_confirmation: {
                    equalTo: "#password"
                },
                terms: {
                    required: true,
                }

            },
            messages: {
                name: {
                    required: 'من فضلك قم بأدخل البريد الالكتروني',
                    email: 'الاسم لا يجب ان يقل عن 4 احرف'
                },
                email: {
                    required: 'من فضلك قم بأدخل البريد الالكتروني',
                    email: 'من فضلك قم بأدخل بريد الكتروني صالح'
                },
                phone: {
                    required: 'من فضلك قم بأدخل رقم الجوال',
                    number: 'من فضلك قم بأدخل رقم جوال صالح',
                    minlength: 'رقم الجوال لا يجب ان يقل عن 10 ارقام'
                },
                country_id: {
                    required: 'من فضلك قم بأختيار الدوله',
                    number: 'من فضلك قم بأختيار الدوله',
                },
                gender: {
                    required: 'من فضلك قم بأختيار الجنس',
                },
                city_id: {
                    required: 'من فضلك قم بأختيار المدينه',
                    number: 'من فضلك قم بأختيار المدينه',
                },
                password: {
                    required: 'من فضلك قم بأدخل الرقم السري',
                    minlength: 'يجب ألا يقل طول كلمة المرور عن 8 أحرف'
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    </script>
@stop
@section('content')
    <section class="content py-4">
        <div class="container">
            <div class="signup margin-auth">
                <div class="row">
                    <div class="col-0   col-lg-2 col-xl-2"></div>
                    <div class="col-12  col-lg-8 col-xl-8">
                        <div class="gredint">
                        </div>
                        <div class="gredint2">
                        </div>
                        <div class="gredint3">
                        </div>
                        <div class="signup-user">
                            <div class="row">
                                <div class="col-6">
                                    <div class="font-14">
                                        <p class="">نموذج التسجيل</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="font-14 text-left">
                                            <a href="{{route('login')}}" class="text-white font-10">لديك حساب بالفعل؟ ادخل من هنا</a>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" id="registerForm" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12  col-md-8">
                                        <div class="col-12 ">
                                            <div class="text-lg-center img-profile ">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <h6 class="font-14">
                                                            اختار الجنس بالضغط علي الصوره
                                                        </h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>
                                                            <input type="radio" name="gender" checked value="1" hidden>
                                                            <img class="circle-gender rounded-circle"
                                                                 src="{{url('design/site/images/Mask.png')}}"
                                                                 width="100%">
                                                        </label>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>
                                                            <input type="radio" name="gender" value="0" hidden>
                                                            <img class="circle-gender rounded-circle"
                                                                 src="{{url('design/site/images/Mask Group 1.png')}}"
                                                                 width="100%">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="font-14 text-left reg-with">
                                            <div>
                                                <div class="mb-3">
                                                    <a href="" class="btn-link">
                                                <span class="facebook-style-auth ">
                                                    <i class="fab fa-facebook-f"></i>
                                                </span>
                                                        <span class="text-primary">تسجيل ب فيس</span>
                                                    </a>
                                                </div>
                                                <div class="mb-3">
                                                    <a href="" class="btn-link">
                                                <span class="twitter-style-auth">
                                                    <i class="fab fa-twitter"></i>
                                                </span>
                                                        <span class="text-info">تسجيل ب تويتر</span>
                                                    </a>
                                                </div>

                                                <div class="mb-3">
                                                    <a href="" class="btn-link">
                                                <span class="google-style-auth">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </span>
                                                        <span class="text-danger">تسجيل ب جوجل</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">

                                    <div class="row">
                                        <div class="form-group  col-12 col-lg-12 ">
                                            <div class="">
                                                <input type="text" name="name" required autofocus
                                                       class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                       value="{{ old('name') }}" required autocomplete="name" autofocus
                                                       placeholder="الاسم الكامل">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group  col-12 col-lg-6">
                                            <select
                                                class="form-control form-control-sm @error('country_id') is-invalid @enderror"
                                                id="country_id" name="country_id">
                                                <option value="">قم بأختيار الدوله</option>
                                                @foreach(\App\Model\Country::all() as $country)
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('country_id')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group  col-12 col-lg-6">
                                            <select
                                                class="form-control form-control-sm @error('city_id') is-invalid @enderror"
                                                id="city_id" name="city_id">
                                                <option>قم بأختيار المدينه</option>
                                            </select>
                                            @error('city_id')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group  col-12 col-lg-6">
                                            <div class="">
                                                <input type="email" name="email"
                                                       class="form-control form-control-sm  @error('email') is-invalid @enderror"
                                                       value="{{ old('email') }}" required autocomplete="email"
                                                       placeholder="البريد الالكترونى">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group  col-12 col-lg-6">
                                            <div class="">
                                                <input type="number" name="phone"
                                                       class="form-control form-control-sm @error('phone') is-invalid @enderror"
                                                       placeholder="رقم الجوال"
                                                       required autocomplete="phone"
                                                       value="{{ old('phone') }}"
                                                >
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group  col-12 col-lg-6">
                                            <div class="">
                                                <input type="password"
                                                       class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                       name="password" required autocomplete="new-password" id="password"
                                                       placeholder="كلمة المرور">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group  col-12 col-lg-6">
                                            <div class="">
                                                <input type="password" id="password-confirm"
                                                       name="password_confirmation" required autocomplete="new-password"
                                                       class="form-control form-control-sm"
                                                       placeholder="تأكيد كلمة المرور">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="custom-control custom-checkbox mt-2">
                                                <input type="checkbox" class="custom-control-input" name="terms" value="1"
                                                       required id="customControlInline">
                                                <label class="custom-control-label font-12" for="customControlInline">الموافقه
                                                    على الشروط والاحكام</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="text-left">
                                                <div class="">
                                                    <button type="submit" class="btn ">تسجيل</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-0  col-lg-2 col-xl-2"></div>
                </div>

            </div>
        </div>
    </section>

@endsection
