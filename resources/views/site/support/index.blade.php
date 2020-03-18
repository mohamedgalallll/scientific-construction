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
                                    <i class="fas fa-comments  icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2 h5 font-weight-bolder"> الدعم الفنى</p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                            </div>
                           <div>
                                <div class="profile-content mt-5 mb-4">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <a href="{{url('/tickets')}}" class="btn-link">
                                                <div class="text-center item-info">
                                                    <div class="pb-3">
                                                        <img src="{{url('design/site/images/ticket-1.png')}}" alt="">
                                                    </div>
                                                    <p class="text-muted">التذاكر الخاصه بى</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <a href="{{url('/questions')}}" class="btn-link">
                                                <div class="text-center item-info">
                                                    <div class="pb-3">
                                                        <img src="{{url('design/site/images/question.png')}}" alt="">
                                                    </div>
                                                    <p class="text-muted">الاسئله الشائعه</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <a href="{{url('/tickets/create')}}" class="btn-link">
                                                <div class="text-center item-info">
                                                    <div class="pb-3">
                                                        <div class="bg-ticket">
                                                            <img class="mt-4" src="{{url('design/site/images/icon (3).png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <p class="text-muted">فتح تذكره جديده</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            @include('site.components.authCard.authCardLogin',[
                            'user'=>$user
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
@stop
