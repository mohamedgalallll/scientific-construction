@extends('site.layout.index')
@section('content')
    <!--        content -->
    <!--        start profile-info-->
    <section class="content mt-5">
        <div class="container">
            <div class="profile-info">
                <div class="row">
                    <div class="col-12">
                        <div class="card-profile-info">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-2">
                                        <div class="text-center p-4">
                                            <img class="circle-auth rounded-circle"
                                                 src="{{url('design/site/images/Mask.png')}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body text-center text-md-right">
                                            <h5 class="card-title">{{$user->name}}</h5>
                                            <p class="card-text font-12">{{$user->country_name}}</p>
                                            <p class="card-text font-12">
                                                الاشتراك {{$user->created_at->toDateString()}}   </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 align-self-center">
                                        <div class="text-center btn-inf mb-2">
                                            <a href="{{url('profile')}}" class="btn font-12" >معلوماتي</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-content mt-5 mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/MaskGroup3.png')}}" alt="">
                                    </div>
                                    <p>الدورات المتاحة</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{url('instructor')}}" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/Mask Group 10.png')}}" alt="">
                                    </div>
                                    <p>اعضاء هيئه التدرس</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/Mask Group 4.png')}}" alt="">
                                    </div>
                                    <p>الدورات المسجله</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/Mask Group 8.png')}}" alt="">
                                    </div>
                                    <p>دورات تم الانتهاء منها </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/Mask Group 5.png')}}" alt="">
                                    </div>
                                    <p>تقارير الانجاز</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/Mask Group 7.png')}}" alt="">
                                    </div>
                                    <p> الدعم الفني </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/Mask Group 6.png')}}" alt="">
                                    </div>
                                    <p>مقترحاتي </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{url('notifications')}}" class="btn-link">
                                <div class="text-center item-info">
                                    <div class="pb-3">
                                        <img src="{{url('design/site/images/Mask Group 9.png')}}" alt="">
                                    </div>
                                    <p>المنتديات </p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
