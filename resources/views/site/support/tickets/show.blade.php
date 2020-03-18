@extends('site.layout.index')
@section('content')
        <!--        content -->
        <section class="content">
            <div class="container">
                <div class="course-desc-page">
                    <div class="row">
                        <div class="col-7 col-md-8 col-lg-9">
                            <div class="head-profile">
                                <div class="inlineBlock coursesImg position-relative">
                                    <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                    <i class="fas fa-headset icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2 h5 font-weight-bolder"> الدعم الفني - <span class="font-14 text-muted"> التذاكر الحاصه بي</span></p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                            </div>
                           <div>
                            <div class="card-alert">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-8  col-lg-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-8  col-lg-10">
                                                        <p class="">
                                                            اسم المقترح يوضع هنا للتوضيح
                                                        </p>
                                                        <p class=" font-14 text-muted">
                                                            <span class="px-2"><i class="fas fa-clock"></i></span> <span>منذ 30 دقيقه</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2  col-lg-2 align-self-center text-center">
                                            <span class="stat-ticket"> فعاله</span>
                                        </div>
                                        <div class="col-md-2 col-lg-1 col-12 align-self-center text-center">
                                            <div class="card-body text-lg-left">
                                                <a  href="javascript:void(0)" class="action-delete"><i class="fas fa-times-circle fa-2x text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-alert">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-8  col-lg-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-8  col-lg-10">
                                                        <p class="">
                                                        اسم المقترح يوضع هنا للتوضيح
                                                        </p>
                                                        <p class=" font-14 text-muted">
                                                            <span class="px-2"><i class="fas fa-clock"></i></span> <span>منذ 30 دقيقه</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2  col-lg-2 align-self-center text-center">
                                            <span class="stat-ticket"> فعاله</span>
                                        </div>
                                        <div class="col-md-2 col-lg-1 col-12 align-self-center text-center">
                                            <div class="card-body text-lg-left">
                                                <a  href="javascript:void(0)" class="action-delete"><i class="fas fa-times-circle fa-2x text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-alert">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-8  col-lg-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-8  col-lg-10">
                                                        <p class="">
                                                        اسم المقترح يوضع هنا للتوضيح
                                                        </p>
                                                        <p class=" font-14 text-muted">
                                                            <span class="px-2"><i class="fas fa-clock"></i></span> <span>منذ 30 دقيقه</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2  col-lg-2 align-self-center text-center">
                                            <span class="stat-ticket-ex"> منتهيه</span>
                                        </div>
                                        <div class="col-md-2 col-lg-1 col-12 align-self-center text-center">
                                            <div class="card-body text-lg-left">
                                                <a  href="javascript:void(0)" class="action-delete"><i class="fas fa-times-circle fa-2x text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           </div>
                        </div>
                        <div class="col-5 col-md-4 col-lg-3">
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
        @yield('page_js')
        @include('site.layout.scripts')
        @include('site.layout.scripts.support.support-9')
@stop
