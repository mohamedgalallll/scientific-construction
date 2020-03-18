
@extends('site.layout.index')
@section('content')
        <!--        content -->
        <!--        start courses-questions-page-->
        <section class="content">
            <div class="container">
                <div class="course-desc-page">
                    <div class="row">
                        <div class="col-6 col-lg-9">
                            <div class="head-profile">
                                <div class="inlineBlock coursesImg position-relative">
                                    <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                    <i class="fas fa-headset icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2 h5 font-weight-bolder">مقترحاتى</p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                                <div>
                                    <p class="text-muted mb-5">
                                        الأكاديمية الإسلامية المفتوحة مؤسسة خيرية مصرحة من وزارة الشؤون الإسلامية والدعوة والإشاد بترخيص رقم (٤/١) وتهدف
                                        إلى ايصال العلم الشرعي لكافة المسلمين حول العالم ورفع الجهل عنهم ونبذ التطرف والعنف وذلك من خلال استخدام أحدث
                                        الأساليب التربوية والتقنية.
                                    </p>
                                </div>
                            </div>
                           <div>
                                <div class="profile-content mt-5 mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{url('/proposals/show')}}" class="btn-link">
                                                <div class="text-center item-info">
                                                    <div class="pb-3">
                                                        <img src="{{url('design/site/images/files-and-folders.png')}}" alt="">
                                                    </div>
                                                    <p>المقترحات السابقه</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{url('/proposals/create')}}" class="btn-link">
                                                <div class="text-center item-info">
                                                    <div class="pb-3">
                                                        <img src="{{url('design/site/images/recommendation.png')}}" alt="">
                                                    </div>
                                                    <p>اقتراح جديد</p>
                                                </div>
                                            </a>
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


















