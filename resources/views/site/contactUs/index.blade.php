@extends('site.layout.index')
@section('content')
    <!--        content -->
    <!--        start profile-info-->
    <!--        content -->
    <!--        start teacher-page-->
    <section class="content">
        <div class="container">
            <div class="teacher-page">
                <div class="row">
                    <div class="col-6 col-lg-9">
                        <div class="head-teacher">
                            <div class="inlineBlock coursesImg position-relative">
                                <img src="{{url('design/images/Group 1594@2x.png')}}" alt="">
                                <i class="fas fa-phone-alt icon-info"></i>
                            </div>
                            <div class="inlineBlock">
                                <p class="mb-2 font-weight-bold"> تواصل معنا </p>
                                <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                            </div>
                            <div>
                                <p class="text-muted mb-4">
                                    الأكاديمية الإسلامية المفتوحة مؤسسة خيرية مصرحة من وزارة الشؤون الإسلامية والدعوة والإشاد بترخيص رقم (٤/١) وتهدف إلى ايصال العلم الشرعي لكافة المسلمين حول العالم ورفع الجهل عنهم ونبذ التطرف والعنف وذلك من خلال استخدام أحدث الأساليب التربوية والتقنية.
                                </p>
                            </div>
                            <div>

                                <div class="Available-courses">
                                    <div class="row my-4">
                                        <div class="col-lg-6  border-l">
                                            <h6>روابط السوشيال مديا</h6>
                                            <div class="contact-social my-5">
                                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>روابط التطبيق</h6>
                                            <div class="download mt-5">
                                                <a href="">
                                                    <img class="mb-2" src="{{url('design/site/images/app.png')}}" alt="">
                                                </a>
                                                <a href="">
                                                    <img src="{{url('design/site/images/play.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-lg-6  border-l">
                                            <h6>البريد الالكترونى</h6>
                                            <div>
                                                <p>mohamedgalaraslan@gmail.com</p>
                                                <p>mohamedgalaraslan@gmail.com</p>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <h6>ارقام الاتصال</h6>
                                            <div class="download ">
                                                <p>01026019105</p>
                                                <p>01026019105</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="teacher-detalis">
                                            <div class="details-user">
                                                <div class="font-14 ">
                                                    <p class="">نموذج التواصل</p>
                                                </div>
                                                <div class="mt-4">
                                                    <form>
                                                        <div class="form-group ">
                                                            <div class="">
                                                                <input type="text" class="form-control" placeholder="الاسم الكامل">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="">
                                                                <input type="number" class="form-control" placeholder="رقم الجوال">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="">
                                                                <input type="text" class="form-control" placeholder="عنوان الرساله">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="">
                                                                <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="الرسالة"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-4 ">
                                                            <div class="text-lg-left">
                                                                <button type="submit" class="btn text-white">تسجيل</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="teacher-detalis">
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
