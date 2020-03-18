@extends('site.layout.index')
@section('content')
        <!--        content -->
        <!--        start courses-slideshow-page-->
        <section class="content">
            <div class="container">
                <div class="course-desc-page">
                    <div class="row">
                        <div class="col-7 col-lg-9">
                            <div class="head-profile">
                                <div class="inlineBlock coursesImg position-relative">
                                    <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                    <i class="fas fa-video icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2 h5 font-weight-bolder"> الدورات و المتون - عقيده-عقيده - كتاب التوحيد - الشيخ صالح الشيخ</p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-5">
                                    <p class="mb-2 h6 font-weight-bolder">عرض الشرائح - الفصل الاول</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">

                                    <video    width="100%" id="video-js" class="slideshowVideo video-js"  controls data-setup='{}'>
                                        <source src="{{url('design/site/images/alekhlas.mp4')}}" type="video/mp4">
                                    </video>
                                    <div class="links-videos">
                                        <div class="row" >
                                            <div class="col-12 col-lg-7 mb-3">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6  mb-3 ">
                                                        <a href="" class="bg-green">الفديو السابق</a>
                                                    </div>
                                                    <div class="col-12 col-lg-6 mb-3 margin-t">
                                                        <a href="" class="bg-brown ">الفديو التالى</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 text-lg-left ">
                                                <a href="" class="bg-blue ">اسئله الفديو</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-2 h6 font-weight-bolder mb-4">فديوهات الدورة</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="owl-carousel owl-theme owl-carouselvideo">
                                                <div class="item">
                                                    <div class="">
                                                        <video controls width="100%" class="slideshowVideo">
                                                            <source src="{{url('design/site/images/alekhlas.mp4')}}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <video controls width="100%" class="slideshowVideo">
                                                            <source src="{{url('design/site/images/alekhlas.mp4')}}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <video controls width="100%" class="slideshowVideo">
                                                            <source src="{{url('design/site/images/alekhlas.mp4')}}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-lg-3">
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
@yield('page_js')
@include('site.layout.scripts')
@include('site.layout.scripts.videos.index')
@stop
