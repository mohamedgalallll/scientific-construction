@extends('site.layout.index')
@section('content')
        <!--        content -->
        <!--        start courses-slideshow-page-->
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
                                <div class="col-6 col-md-6">
                                    <p class="mb-2 h5 ">العلامات</p>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="text-md-left">
                                        <a href="#" class="card-link add-btn font-12">طباعه</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="completion-reports mb-5 ">
                                        <div class="card mb-4" >
                                            <div class="row no-gutters" >
                                                <div class="col-12 col-md-2">
                                                    <div
                                                    class="fifth circle"
                                                    data-value="0.9"
                                                    data-size="60"
                                                    data-thickness="20"
                                                    data-animation-start-value="1.0"
                                                    data-fill="{
                                                      &quot;color&quot;: &quot;rgba(0, 0, 0, .3)&quot;,
                                                      &quot;image&quot;: &quot;http://i.imgur.com/pT0i89v.png&quot;
                                                    }"
                                                    data-reverse="true"
                                                  >
                                                  </div>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <div class="card-body">
                                                        <h5 class="card-title ">اسم الدوره يوضع هنا للدلاله عليه</h5>
                                                            <div class="row">
                                                                <div class="col-12 col-lg-2">
                                                                    <img src="{{url('design/site/images/nabolsy.png')}}" alt="" width="56px">
                                                                </div>
                                                                <div class="col-12  col-lg-6">
                                                                    <span class="font-12">
                                                                      الدكتور محمد راتب النبالسى
                                                                    </span>
                                                                    <p class="font-10 text-muted">
                                                                        أستاذ العقيدة والفقه
                                                                    </p>
                                                                </div>
                                                                <div class=" col-12 col-lg-4 mb-3">
                                                                    <a href="#" class="card-link result-btn font-12 ">نتيجه الاحتبار </a>
                                                                </div>
                                                            </div>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-3">
                                                                <div>
                                                                    <span class="font-12 text-muted">عدد الدروس</span>
                                                                    <p class="font-14">17 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-3">
                                                                <div>
                                                                    <span class="font-12 text-muted">تاريخ البداية</span>
                                                                    <p class="font-14">21 محرم 1440 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-3">
                                                                <div>
                                                                    <span class="font-12 text-muted">تاريخ البداية</span>
                                                                    <p class="font-14">21 محرم 1440 </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result-exam overflow-auto ">
                                        <table class="table ">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col">نوع الامتحان</th>
                                                <th scope="col">تاريخ الامتحان</th>
                                                <th scope="col">وقت اامتحان</th>
                                                <th scope="col">الدرجه</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">فصلى</th>
                                                <td> 30:07</td>
                                                <td>16 Nov 2019</td>
                                                <td>132</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">فصلى</th>
                                                <td>30:07</td>
                                                <td>16 Nov 2019</td>
                                                <td>132</td>
                                            </tr>
                                            <tr >
                                                <th scope="row">فصلى</th>
                                                <td>30:07</td>
                                                <td>16 Nov 2019</td>
                                                <td>132</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-lg-3">
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
