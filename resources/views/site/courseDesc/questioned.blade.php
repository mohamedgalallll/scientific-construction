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
                                    <i class="fas fa-video icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2 h5 font-weight-bolder"> الدورات و المتون - عقيده-عقيده - كتاب التوحيد - الشيخ صالح الشيخ</p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3 col-lg-6">
                                    <p class="mb-2 h6 font-weight-bolder">تساؤلات</p>
                                </div>
                                <div class="col-md-4 col-lg-3 icon-ques">
                                    <div class="row ">
                                        <div class="col-12 col-md-0 col-lg-2"></div>
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <a href=""><span class="bg-danger"><i class="fas fa-trash"></i></span></a>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <a href=""><span class="bg-primary"><i class="fas fa-file-word"></i></span></a>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-3 m-button">
                                            <a href=""><span class=""><i class="fas fa-file-pdf"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5  col-lg-3">
                                    <div class="text-left">
                                        <a href="#" class="card-link add-btn font-12  " data-toggle="modal" data-target="#exampleModalq">اضافه سؤال جديد</a>
                                    </div>
                                    <!-- Modal -->
                                    <div class="add-modal">
                                        <div class="modal fade" id="exampleModalq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header ">
                                                        <h5 class="modal-title font-14" id="exampleModalLabel">اضف سؤال جديد </h5>
                                                        <button type="button" class=" back" data-dismiss="modal">
                                                            رجوع
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <form action="">
                                                           <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="السؤال"></textarea>
                                                                </div>
                                                           </div>
                                                       </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button " class="btn ">اضافه </button>
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
                                            <div class="col-md-8 col-lg-10">
                                                <div class="card-body">
                                                    <p class="card-text"> <span class="font-weight-bolder px-3"> السؤال : </span> ما هو تعريف الايمان وما شعبه و كيف نحقق الوصل البه ؟  </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-2">
                                                <div class="text-center">
                                                    <span class="text-muted font-12">29 ابريل 2019</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href=""><span class="px-2 text-success"><i class="fas fa-paper-plane"></i></span></a>
                                                    <a href=""><span class="px-2 text-primary"><i class="fas fa-edit"></i></span></a>
                                                    <div class="custom-control custom-checkbox d-inline">
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
                                            <div class="col-md-8 col-lg-10">
                                                <div class="card-body">
                                                    <p class="card-text"> <span class="font-weight-bolder px-3"> السؤال : </span> ما هو تعريف الايمان وما شعبه و كيف نحقق الوصل البه ؟  </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-2">
                                                <div class="text-center">
                                                    <span class="text-muted font-12">29 ابريل 2019</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href=""><span class="px-2 text-success"><i class="fas fa-paper-plane"></i></span></a>
                                                    <a href=""><span class="px-2 text-primary"><i class="fas fa-edit"></i></span></a>
                                                    <div class="custom-control custom-checkbox d-inline">
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
                                            <div class="col-md-8 col-lg-10">
                                                <div class="card-body">
                                                    <p class="card-text"> <span class="font-weight-bolder px-3"> السؤال : </span> ما هو تعريف الايمان وما شعبه و كيف نحقق الوصل البه ؟  </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-2">
                                                <div class="text-center">
                                                    <span class="text-muted font-12">29 ابريل 2019</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href=""><span class="px-2 text-success"><i class="fas fa-paper-plane"></i></span></a>
                                                    <a href=""><span class="px-2 text-primary"><i class="fas fa-edit"></i></span></a>
                                                    <div class="custom-control custom-checkbox d-inline">
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
                                            <div class="col-md-8 col-lg-10">
                                                <div class="card-body">
                                                    <p class="card-text"> <span class="font-weight-bolder px-3"> السؤال : </span> ما هو تعريف الايمان وما شعبه و كيف نحقق الوصل البه ؟  </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-2">
                                                <div class="text-center">
                                                    <span class="text-muted font-12">29 ابريل 2019</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href=""><span class="px-2 text-success"><i class="fas fa-paper-plane"></i></span></a>
                                                    <a href=""><span class="px-2 text-primary"><i class="fas fa-edit"></i></span></a>
                                                    <div class="custom-control custom-checkbox d-inline">
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
                        <div class="col-6 col-lg-3">
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
@stop
