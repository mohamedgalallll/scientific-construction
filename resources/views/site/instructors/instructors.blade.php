@extends('site.layout.index')
@section('content')
    <!--        content -->
    <!--        start teacher-page-->
    <section class="content">
        <div class="container">
            <div class="teacher-page">
                <div class="row">
                    <div class="col-6 col-lg-9">
                        <div class="head-teacher">
                            <div class="inlineBlock coursesImg position-relative">
                                <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                <i class="fas fa-user icon-info"></i>
                            </div>
                            <div class="inlineBlock">
                                <p class="mb-2">اعضاء هيئه التدريس </p>
                                <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                            </div>
                        </div>
                        <div class="teacher-content mt-5 mb-4">
                            <div class="row">
                                @foreach ($instructors as $instructor)
                                    <div class="col-12 col-lg-4">
                                        <a href="{{url()->current().'/'.$instructor->id}}" class="btn-link">
                                            <div class="text-center item-info">
                                                <div class="">
                                                    <img class="rounded-circle circle-img-instructor" src="{{$instructor->image}}" alt="" width="100%">
                                                </div>
                                                <p class="mb-0 font-weight-bolder word-wrap">{{$instructor->name}}</p>
                                                <div class="text-muted font-12">{!! $instructor->excerpt !!}</div>
                                                <div class="mt-2 font-14">
                                                    <span class="float-right">عدد السلاسل</span>
                                                    <span class="float-left">73</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
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
