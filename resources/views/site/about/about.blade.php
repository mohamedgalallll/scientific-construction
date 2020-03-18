@extends('site.layout.index')
@section('content')
    <!--        content -->
    <!--        start courses-desc-page-->
    <section class="content">
        <div class="container">
            <div class="course-desc-page about-page">
                <div class="row">
                    <div class="col-6 col-lg-9">
                        <div class="head-profile">
                            <div class="inlineBlock coursesImg position-relative">
                                <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                <i class="fas fa-info icon-info"></i>
                            </div>
                            <div class="inlineBlock">
                                <p class="mb-2 h5 font-weight-bolder color-tit"> {{$about->name}}</p>
                                <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                            </div>
                            <div>
                                <p class="text-muted mb-4">
                                    {{$about->excerpt}}
                                </p>
                            </div>
                            <div class="mt-5">

                                <div class="text-muted mb-4">
                                    {!!$about->description!!}
                                </div>

                            </div>
                        </div>
                        <div class=" text-center words ">
                            <h4>كلمات في حق الموقع</h4>
                        </div>
                        <div class="profile-content mt-5 mb-4 ">
                            <div class="mt-5">
                                <div class="row">
                                    @foreach ($instructorWords as $word)
                                        <div class="col-lg-4 mt-4">
                                            <div class="position-relative mt-5">
                                                <div class="photo-card">
                                                    <img class="rounded-circle circle-img-about" src="{{$word->instructor_data->image}}" alt="">
                                                </div>
                                                <div class="text-center item-info py-5 px-4">
                                                    <h6 class="pt-4">{{$word->instructor_data->name}}</h6>
                                                    <p class="color-gray font-12">{{$word->instructor_data->excerpt}} </p>
                                                    <a href="#" class="card-link add-btn font-12" data-toggle="modal" data-target="#exampleModalq">اقراء الكلمات</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        @include('site.components.modal.modalAbout',[
                                            'word'=>$word
                                        ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5>إنجازات البناء التعليى</h5>
                        </div>
                        <div class="profile-content mt-5 mb-4">
                            <div class="row">
                                @foreach ($achievements as $achievement)
                                    <div class=" col-lg-4">
                                        <div class="text-center item-info p-4">
                                            <div class="pb-3">
                                                <img src="{{$achievement->image}}" class="img-fluid" alt="">
                                            </div>
                                            <h6 class="mb-0">{{$achievement->title}}</h6>
                                            <p class="text-muted font-14 px-4">{{$achievement->description}} </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="teacher-detalis">
                            @include('site.components.authCard.authCard')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
