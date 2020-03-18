@extends('site.layout.index')
@section('content')
{{-- content  --}}
<!--start courses-->
        <section class="content">
            <div class="container">
                <div class="courses-page">
                    <div class="row">
                        <div class="col-12">
                            <div class="head-courses">
                                <div class="inlineBlock coursesImg position-relative">
                                    <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                    <i class="fas fa-video icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2">الدورات و المتون</p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @include('site.courses.aside')
                        <div class="col-8 col-md-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                @include('site.courses.tabs.availableCourses',[
                                'id'=>'v-pills-home'
                                ])
                                @include('site.courses.tabs.registeredCourses',[
                                'id'=>'v-pills-profile'
                                ])
                                @include('site.courses.tabs.finishedCourses',[
                                'id'=>'v-pills-messages'
                                ])
                                @include('site.courses.tabs.achievementReport',[
                                'id'=>'v-pills-settings'
                                ])
                                <div class="float-left page-num" width="100%">
                                        <select class="custom-select"  >
                                            <option> الصفحات / 10</option>
                                        </select>
                                    </div>
                                    <div class="float-left" width="100%">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">....</a></li>
                                                <li class="page-item"><a class="page-link" href="#">30</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
@stop
