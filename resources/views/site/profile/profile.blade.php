@extends('site.layout.index')
@section('content')
    <!--        content -->
    <!--        start profile-page-->
    <section class="content">
        <div class="container">
            <div class="profile-page">
                <div class="row">
                    <div class="col-6 col-lg-9">
                        <div class="head-profile">
                            <div class="inlineBlock coursesImg position-relative">
                                <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                <i class="fas fa-user icon-info"></i>
                            </div>
                            <div class="inlineBlock">
                                <p class="mb-2"> الملف الشخصي </p>
                                <p class="text-muted font-14"></p>
                            </div>
                        </div>
                        <div class="form-profile">
                            <form method="POST" id="editProfileForm" action="{{ url()->current()}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <p class="text-muted">الاشتراك {{$user->created_at->toDateString()}}</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="text-center img-profile">
                                            <div class="position-relative">

                                                <label>
                                                    <input type="radio" name="gender"
                                                           {{$user->gender == 1 ? 'checked' : ''}}  value="1" hidden>
                                                    <img class="circle-gender rounded-circle"
                                                         src="{{url('design/site/images/Mask.png')}}"
                                                         width="100%">
                                                </label>


                                                <label>
                                                    <input type="radio" name="gender"
                                                           {{$user->gender == 0 ? 'checked' : ''}} value="0" hidden>
                                                    <img class="circle-gender rounded-circle"
                                                         src="{{url('design/site/images/Mask Group 1.png')}}"
                                                         width="100%">
                                                </label>

                                            </div>
                                            <input type="file" id="img-profile">
                                            <div>
                                                <p>جنس العضو </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <a href="#" class="card-link result-btn font-12 font-weight-bold"
                                           data-toggle="modal" data-target="#exampleModal2">تعديل كلمه المرور </a>
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="form-user font-14 mt-5">
                                    <div class="row ">
                                        <div class="col-12 col-lg-12">
                                            <div class="col-12 col-lg-10 p-0">
                                                <div class="form-group">
                                                    <label for="name">الاسم</label>
                                                    <input type="text" name="name" id="name" required autofocus
                                                           class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                           value="{{ $user->name }}" required autocomplete="name"
                                                           autofocus
                                                           placeholder="الاسم الكامل">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">

                                            <div class="form-group">
                                                <label for="phone">رقم الجوال</label>
                                                <input type="number" name="phone" id="phone"
                                                       class="form-control form-control-sm @error('phone') is-invalid @enderror"
                                                       placeholder="رقم الجوال"
                                                       required autocomplete="phone"
                                                       value="{{ $user->phone }}"
                                                >
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="country_id">الدولة</label>
                                                <select
                                                    class="form-control form-control-sm @error('country_id') is-invalid @enderror"
                                                    id="country_id" name="country_id">
                                                    <option value="">قم بأختيار الدوله</option>
                                                    @foreach(\App\Model\Country::all() as $country)
                                                        <option
                                                            {{$user->country_id == $country->id ? 'selected' : '' }} value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('country_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="email">البريد الالكترونى</label>
                                                <input type="email" name="email"
                                                       class="form-control form-control-sm  @error('email') is-invalid @enderror"
                                                       value="{{ $user->email }}" required autocomplete="email"
                                                       placeholder="البريد الالكترونى">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="city_id">المدينه</label>
                                                <select
                                                    class="form-control form-control-sm @error('city_id') is-invalid @enderror"
                                                    id="city_id" name="city_id">
                                                    <option>قم بأختيار المدينه</option>
                                                    @foreach(\App\Model\State::where('country_id',$user->country_id)->get() as $city)
                                                        <option
                                                            {{$user->city_id == $city->id ? 'selected' : '' }} value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('city_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div>

                                    <button type="submit" class="btn btn-green">
                                        تعديل بياناتي
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        @include('site.components.authCard.authCardLogin')
                    </div>
                </div>
            </div>
        </div>
        @include('site.components.modal.modalPassword')
    </section>
@stop
@section('main_js')
    <script>
        $('#changePasswordForm').validate({
            rules: {
                old_password: {
                    required: true,
                    minlength: 8,
                },
                password: {
                    required: true,
                    minlength: 8,
                },
                password_confirmation: {
                    equalTo: "#password"
                },

            },
            messages: {
                old_password: {
                    required: 'من فضلك قم بأدخل الرقم السري القديم',
                    minlength: 'يجب ألا يقل طول كلمة المرور عن 8 أحرف'
                }, password: {
                    required: 'من فضلك قم بأدخل الرقم السري الجديد',
                    minlength: 'يجب ألا يقل طول كلمة المرور عن 8 أحرف'
                }, password_confirmation: {
                    equalTo: 'الرقم السري غير متطابق',
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        $('#editProfileForm').validate({
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

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    </script>
@stop













