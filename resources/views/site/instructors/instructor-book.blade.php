@extends('site.layout.index')
@section('content')
        <!--        content -->
        <!--        start teacher-book-->
        <section class="content">
            <div class="container">
                <div class="teacher-book">
                    <div class="row">
                        <div class="col-6 col-lg-9">
                            <div class="head-teacher">
                                <div class="inlineBlock coursesImg">
                                    <img src="{{url('design/site/images/ououso-2@2x.png')}}" alt="">
                                </div>
                                <div class="inlineBlock">
                                    <h5 class="mb-2 font-weight-bolder">معالى الدكتور عبدالرحمن العريفى</h5>
                                    <p class="text-muted  ">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                                <div class="float-lg-left float-sm-right">
                                    <h5 class="mb-2 font-weight-bolder ">كتاب التوحيد</h5>
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <p class="text-muted mb-4">
                                        الأكاديمية الإسلامية المفتوحة مؤسسة خيرية مصرحة من وزارة الشؤون الإسلامية والدعوة والإشاد بترخيص رقم (٤/١) وتهدف
                                        إلى
                                        ايصال العلم الشرعي لكافة المسلمين حول العالم ورفع الجهل عنهم ونبذ التطرف والعنف وذلك من خلال استخدام أحدث
                                        الأساليب
                                        التربوية والتقنية.
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <h5 class="font-weight-bolder"> كتاب التوحيد</h4>
                                    </p>
                                    <div class="Available-courses">
                                        <div class="row mb-4">
                                            <div class="col-12  col-lg-6 col-xl-4">
                                                <div class="card" style="width: 100%;">
                                                    <img src="{{url('design/site/images/white-painted-buildings-under-blue-sky-18.png')}}" class="card-img-top" alt="...">
                                                    <div class="card-body pt-0 ">
                                                        <h5 class="card-title">فقة الحديث النبوى</h5>
                                                        <p class="card-text text-muted font-12">الأكاديمية الإسلامية المفتوحة مؤسسة خيرية مصرحة من وزارة
                                                            الشؤون الإسلامية والدعوة والإشاد بترخيص</p>
                                                        <a href="#" class=" btn  card-link log-btn font-12 mb-1">دخول </a>
                                                        <a href="#" class=" btn card-link cancel-reg font-12 mb-1">الغاء التسجيل</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12  col-lg-6 col-xl-4">
                                                <div class="card" style="width:100%;">
                                                    <img src="{{url('design/site/images/asset-147.png')}}" class="card-img-top" alt="...">
                                                    <div class="card-body pt-0 pb-4">
                                                        <h5 class="card-title">فقة الحديث النبوى</h5>
                                                        <p class="card-text text-muted font-12">الأكاديمية الإسلامية المفتوحة مؤسسة خيرية مصرحة من وزارة
                                                            الشؤون الإسلامية والدعوة والإشاد بترخيص</p>
                                                        <a href="#" class="card-link register-btn form-control font-12">تسجيل </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12  col-lg-6 col-xl-4">
                                                <div class="card" style="width: 100%;">
                                                    <img src="{{url('design/site/images/asset-154.png')}}" class="card-img-top" alt="...">
                                                    <div class="card-body pt-0 pb-4">
                                                        <h5 class="card-title">فقة الحديث النبوى</h5>
                                                        <p class="card-text text-muted font-12">الأكاديمية الإسلامية المفتوحة مؤسسة خيرية مصرحة من وزارة
                                                            الشؤون الإسلامية والدعوة والإشاد بترخيص</p>
                                                        <a href="#" class="card-link register-btn font-12 form-control">تسجيل </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="teacher-detalis">
                                                <div class="details-user">
                                                    <div class="font-14 ">
                                                        <p class="">سجل معنا الان لتزداد المعرفه</p>
                                                    </div>
                                                    <div class="mt-4">
                                                        <form>
                                                            <div class="form-group ">
                                                                <div class="">
                                                                    <input type="email" class="form-control" placeholder="البريد الالكترونى">
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="">
                                                                    <input type="text" class="form-control" placeholder="عنوان الرساله">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group ">
                                                                <div class="">
                                                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-4 ">
                                                                <div class="">
                                                                    <button type="submit" class="btn ">ارسال</button>
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
                            @include('site.components.authCard.authCard')
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop
