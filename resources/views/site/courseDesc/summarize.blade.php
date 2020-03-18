
@extends('site.layout.index')
@section('content')
        <!--        content -->
        <!--        start courses-Summarization-page-->
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
                                <div class="col-12  col-lg-5">
                                    <p class="mb-2 h6 font-weight-bolder">تلخيص الفصل الاول</p>
                                </div>
                                <div class="col-12 col-lg-4 m-button">
                                    <div class="text-lg-left">
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
                                            <span class="facebook-style px-2">
                                                <i class="fab fa-facebook-f"></i>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 icon-ques-8 pt-1 ">
                                    <a href=""><span class="px-1"><i class="fas fa-file-word " style="font-size:20px"></i></span></a>
                                    <a href=""><span class="px-1"><i class="fas fa-file-pdf" style="font-size:20px"></i></span></a>
                                    <a href=""><span class=" text-success px-1"><i class="  fas fa-edit" style="font-size:20px"></i></span></a>
                                    <a href=""><span class="text-dark px-1"><i class="fas fa-trash" style="font-size:20px"></i></span></a>
                                </div>
                            </div>
                            <div>
                                <div class="card-questions-info p-0">
                                    <div class="card mb-3">
                                        <div class=" no-gutters">
                                            <div class="">
                                                <div class="card-body my-4">
                                                    <p class="card-text font-12 text-muted p-lg-3 "> هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي على الإنترنت.</p>
                                                </div>
                                                <div class="card-body my-4">
                                                    <p class="card-text font-12 text-muted p-lg-3"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
