@extends('site.layout.index')
@section('content')
        <!--        content -->
        <!--        start courses-Summarization-page-->
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
                                <div class="col-md-3 col-lg-5 mb-1">
                                    <p class="mb-2 h6 font-weight-bolder">فوائد</p>
                                </div>
                                <div class="col-md-4 col-lg-3 icon-ques">
                                    <div class="row">
                                        <div class="col-12 col-md-0 col-lg-2"></div>
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <a href=""><span class="bg-danger"><i class="fas fa-trash"></i></span></a>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <a href=""><span class="bg-primary"><i class="fas fa-file-word"></i></span></a>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-3 m-button">
                                            <a href=""><span class=" "><i class="fas fa-file-pdf"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-4">
                                    <div class="text-left">
                                        <a href="#" class="card-link add-btn font-12  " data-toggle="modal" data-target="#exampleModals">اضافه فائده جديدة</a>
                                    </div>
                                    <!-- Modal -->
                                    <div class="add-modal desc-6">
                                        <div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bg-light">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title font-14 text-dark" id="exampleModalLabel">اضافه فائده جديد</h5>
                                                        <button type="button" class=" back" data-dismiss="modal">
                                                            رجوع
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <form action="">
                                                           <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <form action="">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control " id="exampleInputPassword1"placeholder="عنوان">
                                                                        </div>
                                                                        <div id="summernote"></div>
                                                                    </form>
                                                                </div>
                                                           </div>
                                                       </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button " class="btn  ">حفظ </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-questions-info p-0">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-6 col-lg-8 col-xl-9">
                                                <div class="card-body row">
                                                    <div class="col-5 col-md-4 col-lg-2">
                                                        <span class="num-bg-blue">1</span>
                                                    </div>
                                                    <div class="col-7 col-md-8 col-lg-10">
                                                        <a href="{{url('course/description/chapterBenefits')}}" class="btn-link">
                                                            <p class="card-text"> <span class="font-weight-bolder px-lg-3">  فوائد  الفصل الاول </span></p>
                                                        </a>                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="card-body">
                                                    <a href="">
                                                        <span class="twitter-style">
                                                            <i class="fab fa-twitter"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="google-style">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="facebook-style">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class=" text-success px-1"><i class="fas fa-edit"></i></span>
                                                    </a>
                                                    <div class="custom-control custom-checkbox d-inline px-1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-questions-info p-0">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-6 col-lg-8 col-xl-9">
                                                <div class="card-body row">
                                                    <div class="col-5 col-md-4 col-lg-2">
                                                        <span class="num-bg-blue">2</span>
                                                    </div>
                                                    <div class="col-7 col-md-8 col-lg-10">
                                                        <a href="{{url('course/description/chapterBenefits')}}" class="btn-link">
                                                            <p class="card-text"> <span class="font-weight-bolder px-lg-3">  فوائد  الفصل الاول </span></p>
                                                        </a>                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="card-body">
                                                    <a href="">
                                                        <span class="twitter-style">
                                                            <i class="fab fa-twitter"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="google-style">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="facebook-style">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class=" text-success px-1"><i class="fas fa-edit"></i></span>
                                                    </a>
                                                    <div class="custom-control custom-checkbox d-inline px-1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-questions-info p-0">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-6 col-lg-8 col-xl-9">
                                                <div class="card-body row">
                                                    <div class="col-5 col-md-4 col-lg-2">
                                                        <span class="num-bg-blue">3</span>
                                                    </div>
                                                    <div class="col-7 col-md-8 col-lg-10">
                                                        <a href="{{url('course/description/chapterBenefits')}}" class="btn-link">
                                                            <p class="card-text"> <span class="font-weight-bolder px-lg-3">  فوائد  الفصل الاول </span></p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="card-body">
                                                    <a href="">
                                                        <span class="twitter-style">
                                                            <i class="fab fa-twitter"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="google-style">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="facebook-style">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class=" text-success px-1"><i class="fas fa-edit"></i></span>
                                                    </a>
                                                    <div class="custom-control custom-checkbox d-inline px-1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-questions-info p-0">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-6 col-lg-8 col-xl-9">
                                                <div class="card-body row">
                                                    <div class="col-5 col-md-4 col-lg-2">
                                                        <span class="num-bg-blue">4</span>
                                                    </div>
                                                    <div class="col-7 col-md-8 col-lg-10">
                                                        <a href="{{url('course/description/chapterBenefits')}}" class="btn-link">
                                                            <p class="card-text"> <span class="font-weight-bolder px-lg-3">  فوائد  الفصل الاول </span></p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="card-body">
                                                    <a href="">
                                                        <span class="twitter-style">
                                                            <i class="fab fa-twitter"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="google-style">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class="facebook-style">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                    </a>
                                                    <a href="">
                                                        <span class=" text-success px-1"><i class="fas fa-edit"></i></span>
                                                    </a>
                                                    <div class="custom-control custom-checkbox d-inline px-1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <div class="col-5 col-lg-3">
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
        </section>
        @yield('page_js')
        @include('site.layout.scripts')
        @include('site.layout.scripts.textEditor.index')
@stop

