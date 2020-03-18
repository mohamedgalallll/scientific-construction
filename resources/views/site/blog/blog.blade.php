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
                                <i class="fas fa-bold icon-info"></i>
                            </div>
                            <div class="inlineBlock">
                                <p class="mb-2 h5 font-weight-bolder color-tit">المنتديات</p>
                                <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="card-questions-info px-0">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-1 mb-2">
                                                        <img src="{{url('design/site/images/warning (2).png')}}" alt="">
                                                    </div>
                                                    <div class="col-lg-9 mb-2 pt-2">
                                                        <h6 class="mb-0">
                                                        برجاء استكمال بيانات ملفك الشخصى
                                                        </h6>
                                                    </div>
                                                    <div class="col-lg-2  pt-2">
                                                        <a href="" class="form-control form-control-sm btn-commint text-white text-center">تعديل بياناتي</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-content mt-5 mb-4">
                                <div class="row">
                                    @foreach ($blogPosts as $post)
                                        <div class="col-lg-6">
                                            <div class="item-info">
                                                <a href="{{url()->current().'/'.$post->id}}" class="btn-link">
                                                    <p class="font-weight-bold">{{$post->title}}</p>
                                                    <div class="text-muted font-12 word-wrap" >{{ $post->excerpt}}</div>
                                                </a>
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="mt-4">
                                                            <p class="text-right text-muted">
                                                                <i class="fas fa-calendar-alt px-2"></i>
                                                                <span class="font-12">{{$post->created_at->toDateString()}}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="mt-4 text-left">
                                                            <a href="" class="form-control form-control-sm bg-btn-book text-white text-center">كتاب التوحيد</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-5">
                                    <div class="float-left page-num">
                                        <select class="custom-select">
                                            <option> الصفحات / 10</option>
                                        </select>
                                    </div>
                                    <div class="float-left pl-3">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
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
                    <div class="col-6 col-lg-3">
                       @include('site.components.authCard.authCardLogin',[
                           'user'=> $user
                       ])
                    </div>
                </div>
            </div>
        </div>
</section>

@stop     