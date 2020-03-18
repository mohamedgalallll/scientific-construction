@extends('site.layout.index')
@section('content')
    <!--        content -->

    <section class="content">
        <div class="container">
            <div class="course-desc-page">
                <div class="row">
                    <div class="col-12 ">

                        <div class="head-qus">
                            <p class="mb-2 h6 font-weight-bolder"> اختبار تحديد المستوي العام </p>
                        </div>
                        <div>
                            <form action="">
                                <div class="card-questions-info">
                                    <div class="card mb-3">
                                        <div class="no-gutters">
                                            <div class="section-que">
                                                <div class="card-body my-4">
                                                    <p>من هو اول من القى السلام في الإسلام ؟</p>
                                                    <div class="row">
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline1"> أبو ذر الغفاري</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline2">عمر بن الخطاب</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline3">على بن أبى طالب</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 mt-lg-4  font-14">
                                                            <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline4">على بن أبى طالب</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-questions-info">
                                    <div class="card mb-3">
                                        <div class="no-gutters">
                                            <div class="section-que">
                                                <div class="card-body my-4">
                                                    <p>يجوز تأخير صلاة العشاء الى ما قبل اذان افجر ؟</p>
                                                    <div class="row">
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline11" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline11">لا</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline22" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline22">نعم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-questions-info">
                                    <div class="card mb-3">
                                        <div class="no-gutters">
                                            <div class="section-que">
                                                <div class="card-body my-4">
                                                    <p>من هو اول من القى السلام في الإسلام ؟</p>
                                                    <div class="row">
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline111" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline111"> أبو ذر الغفاري</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline222" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline2">عمر بن الخطاب</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 font-14">
                                                            <input type="radio" id="customRadioInline333" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline333">على بن أبى طالب</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline col-12 col-md-5 col-lg-3 mt-lg-4 font-14">
                                                            <input type="radio" id="customRadioInline444" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline444">على بن أبى طالب</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row px-5 final-result">
                                    <div class="col-6">
                                        <div class="pagi-page my-3">
                                        <span>
                                            <i class="far fa-arrow-alt-circle-right"></i>
                                        </span><span> 3<span> /</span> <span>11</span></span> <span><i class="far fa-arrow-alt-circle-left"></i> </span>
                                        </div>
                                    </div>
                                    <div class="col-6 text-lg-left my-3">
                                        <button type="button" class="btn bg-green  m-0 px-5 text-white" data-toggle="modal" data-target="#exampleModal23">تسليم الاجابه</button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="test-modal">
                                        <div class="modal fade" id="exampleModal23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header ">
                                                        <h5 class="modal-title font-14" id="exampleModalLabel">نتيجه اختبار تحديد امستوى</h5>
                                                        <button type="button" class=" back" data-dismiss="modal">
                                                            رجوع
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-center">
{{--                                                            <img src="{{url('design/site/images/Subtraction 1.png')}}" alt="">--}}
{{--                                                            <img src="{{url('design/site/images/Subtraction 1.png')}}" alt="">--}}
                                                            <img src="{{url('design/site/images/XMLID_1258_.png')}}" alt="">
{{--                                                            <img src="{{url('design/site/images/goal.png')}}" alt="">--}}
{{--                                                            <img src="{{url('design/site/images/success (2).png')}}" alt="">--}}
{{--                                                            <img src="{{url('design/site/images/monthly-reporting.png')}}" alt="">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <a href="" class="bg-brown text-white py-1  font-12"> الدوره المسجله </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6  ">--}}
{{--                                                                    <a  class="btn bg-green text-white py-1 font-12">اعاده الاجابه </a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <div class="my-4"> <h6 class=" font-14"> مستوى عام متوسط - ستحصل على المزيد من المعارف</h6></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
