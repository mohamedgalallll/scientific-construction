@extends('site.layout.index')
@section('content')
 <!--        start forget password-->
        <section class="content py-4">
            <div class="container">
                <div class="signup">
                    <div class="row">
                        <div class="col-0 col-md-3 col-lg-3"></div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="gredintforget">
                            </div>
                            <div class="gredint3forget">
                            </div>
                            <div class="signup-user margin-auth py-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="font-14 text-center">
                                            <p class="">تذكر كلمة المرور</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="font-14 text-center">
                                            <p class="text-white font-12">سوف يتم ارسال كود الى البريد الالكترونى الذى ستقمون بادخاله</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <form>
                                        <div class="row">

                                            <div class="form-group  col-12 ">
                                                <div class="">
                                                    <input type="email" class="form-control form-control-sm" placeholder="البريد الالكترونى">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-12 ">
                                                <div class="text-sm-right text-lg-left">
                                                    <div class="">
                                                        <button type="submit" class="btn font-12">ارسال الكود</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-0 col-md-3 col-lg-3"></div>
                    </div>

                </div>
            </div>
        </section>
@endsection
