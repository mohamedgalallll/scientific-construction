@extends('site.layout.index')
@section('main_js')
    <script>
        $('#loginForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 8,
                }
            },
            messages: {
                email: {
                    required:'من فضلك قم بأدخل البريد الالكتروني',
                    email:'من فضلك قم بأدخل بريد الكتروني صالح'
                },
                password: {
                    required:'من فضلك قم بأدخل الرقم السري',
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
    <!--        start login-->
    <section class="content py-4">
        <div class="container">
            <div class="signup margin-auth">
                <div class="row">
                    <div class="col-0  col-lg-2 col-xl-3"></div>
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="gredintlogin"></div>
                        <div class="gredint2login"></div>
                        <div class="gredint3login"></div>
                        <div class="signup-user ">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="font-14 mb-5">
                                        <p class="">تسجيل الدخول</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="font-14 mb-5 text-md-left">
                                        <a href="" class="btn-link ">
                                            <a href="{{ route('register') }}" class="text-white font-10">ليس لديك حساب ؟
                                                سجل من هنا</a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="font-14 reg-with">
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-4 col-xl-4">
                                                <a href="" class="btn-link px-2">
                                                <span class="facebook-style-auth  px-1">
                                                    <i class="fab fa-facebook-f"></i>
                                                </span>
                                                    <span class="text-primary">تسجيل ب فيس</span>
                                                </a>
                                            </div>
                                            <div class="mb-3 col-12 col-md-4 col-xl-4">
                                                <a href="" class="btn-link px-2">
                                                <span class="twitter-style-auth">
                                                    <i class="fab fa-twitter"></i>
                                                </span>
                                                    <span class="text-info">تسجيل ب تويتر</span>
                                                </a>
                                            </div>
                                            <div class="mb-3 col-12 col-md-4 col-xl-4">
                                                <a href="" class="btn-link px-2">
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
                                <form method="POST" id="loginForm" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12 ">
                                            <div class="">
                                                <input type="email"
                                                       name="email"
                                                       class="form-control form-control-sm  @error('email') is-invalid @enderror"
                                                       placeholder="البريد الالكترونى"
                                                       value="{{ old('email') }}" required autocomplete="email"
                                                       autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group  col-12 ">
                                            <div class="">
                                                <input type="password"
                                                       class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                       placeholder="كلمة المرور"
                                                       name="password" required autocomplete="current-password"
                                                >
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="custom-control custom-checkbox mt-2">
                                                <input type="checkbox" class="custom-control-input" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label font-12" for="remember">تذكرنى
                                                    في المرة القادمة</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-sm-right text-lg-left ">
                                            <a href="{{ route('password.request') }}" class=" text-white font-12">
                                                تذكر كلمة المرور
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-lg-6  mt-2">
                                            <a href="" class="btn-link">
                                                <a href="{{ route('register') }}" class="text-white font-10">ليس لديك
                                                    حساب ؟ سجل من هنا</a>
                                            </a>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="text-sm-right text-lg-left">
                                                <div class="">
                                                    <button type="submit" class="btn ">دخول</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-0 col-lg-2 col-xl-3"></div>
                </div>

            </div>
        </div>
    </section>

@endsection
