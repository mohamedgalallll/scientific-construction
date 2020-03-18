@extends('site.layout.index')
@section('content')
        <section class="content">
            <div class="container">
                <div class="teacher-page">
                    <div class="row">
                        <div class="col-6 col-lg-9">
                            <div class="head-teacher">
                                <div class="inlineBlock coursesImg position-relative">
                                    <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                    <i class="fas fa-comments  icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2 font-weight-bold"> الدعم الفني </p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                                <div>
                                    <p class="text-muted mb-4">
                                        الأكاديمية الإسلامية المفتوحة مؤسسة خيرية مصرحة من وزارة الشؤون الإسلامية والدعوة والإشاد بترخيص رقم (٤/١) وتهدف إلى ايصال العلم الشرعي لكافة المسلمين حول العالم ورفع الجهل عنهم ونبذ التطرف والعنف وذلك من خلال استخدام أحدث الأساليب التربوية والتقنية.
                                    </p>
                                </div>
                                <div class="mt-5">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="teacher-detalis ">
                                                <div class="details-user">
                                                    <div class="font-14 ">
                                                        <p class="">تذكره جديده</p>
                                                    </div>
                                                    <div class="mt-4">
                                                        @auth
                                                            <form>
                                                                <div class="">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <input type="text" class="form-control" placeholder="عنوان">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="">
                                                            <textarea class="form-control" name="" id="" cols="30" rows="5"
                                                                      placeholder="التفصيل"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-4 ">
                                                                    <div class="form-group mt-4 ">
                                                                        <div class="text-lg-left">
                                                                            <button type="submit" class="btn ">ارسال</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        @endauth
                                                        @guest
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="form-group col-lg-6">
                                                                            <div class="">
                                                                                <input type="text" class="form-control" placeholder="الاسم ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <div class="">
                                                                                <input type="email" class="form-control" placeholder="البريد الالكترونى">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <div class="">
                                                                                <input type="number" class="form-control" placeholder="الجوال">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <div class="">
                                                                                <input type="text" class="form-control" placeholder="عنوان">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="">
                                                                            <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="التفصيل"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mt-4 ">
                                                                        <div class="text-lg-left">
                                                                            <button type="submit" class="btn ">ارسال</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                        @endguest
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="teacher-detalis ">
                                @auth
                                    @include('site.components.authCard.authCardLogin')
                                @endauth
                                @guest
                                    @include('site.components.authCard.authCard')
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop
