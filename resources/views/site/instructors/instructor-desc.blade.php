@extends('site.layout.index')
@section('content')
    <!--        content -->
    <!--        start teacher-desc-->
    <section class="content">
        <div class="container">
            <div class="teacher-desc">
                <div class="row">
                    <div class="col-6 col-lg-9">
                            <div class="head-teacher">
                                <div class="inlineBlock coursesImg">
                                    <img class="rounded-circle" src="{{$instructor_desc->image}}" alt="">
                                </div>
                                <div class="inlineBlock">
                                    <h6 class="mb-2 font-weight-bolder">{{$instructor_desc->name}}</h6>
                                    <p class="text-muted">{{$instructor_desc->excerpt}}</p>
                                </div>
                                <div>
                                    <div class="text-muted mb-4"> 
                                        {!!$instructor_desc->about!!}
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <p>
                                        <h5 class="font-weight-bolder"> المتون المشارك فيها الدكتور</h4>
                                    </p>
                                </div>
                                <div class="category-book">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="" class="btn-link">
                                                <div class="book-link text-center">
                                                    التوحيد
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="" class="btn-link">
                                                <div class="book-link text-center">
                                                    السيره النبويه
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="" class="btn-link">
                                                <div class="book-link text-center">
                                                    الفقه والعقيده
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="" class="btn-link">
                                                <div class="book-link text-center">
                                                    التوحيد
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="" class="btn-link">
                                                <div class="book-link text-center">
                                                    الفقه والعقيده
                                                </div>
                                            </a>
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