@extends('site.layout.index')
@section('content')
    <main class="">
        <div class="work">
            <div class="">
                <div class="homeDescription">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5">
                                <!-- rightHomeDesc -->
                                <div class="rightHomeDesc">
                                    <div class="">
                                        <a href=""><img class="image-desc" src="{{url('design/site/images/Layer 1@2x.png')}}" alt=""></a>
                                    </div>
                                    <p class=" mt-3 mb-2 header-desc">هذا النص الرئيسي للفتره</p>
                                    <p class="mb-4 desc-text">أبجد هوز حطي كلمن" جزء من نظام حساب الجمل الّذي عرفه العرب قديماً، وهذا
                                        الحساب يجعل لكل
                                        حرف من الحروف الأبجدية</p>
                                    <a href="#" class="join">انضم للبناء العلمي</a>
                                </div>
                            </div>
                            <!-- leftHomeDesc -->
                            <div class="col-lg-6">
                                <div class="leftHomeDesc">
                                    <!-- slider -->
                                    <div class="mySlider" id="mySlider">
                                        <ul>
                                            <li>
                                                <img src="{{url('design/site/images/mosque-hassan-2852007_1920@2x.png')}}">
                                            </li>
                                            <li>
                                                <img src="{{url('design/site/images/mosque-615415_1920@2x.png')}}">
                                            </li>
                                            <li>
                                                <img src="{{url('design/site/images/a.jpg')}}">
                                            </li>
                                            </li>
                                            <!-- <img src="images/africa4.jpeg" class="left">
                                          <img src="images/africa6.jpeg" class="right"> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- aboutUs -->
                <div class="aboutUs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aboutUsText p-0">
                                    <div class="inlineBlock aboutUsImg position-relative">
                                        <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                        <i class="fas fa-info icon-info"></i>
                                    </div>
                                    <div class="inlineBlock">
                                        <p class="mb-2">من نحن</p>
                                        <p>هناك حقيقه مثبته منذ زمن طويل</p>
                                    </div>
                                    <div>
                                        <p class="mb-5 p-text">وتشبه ترتيب حروف الهجاء قديماً في اللغة العربية، وقد أخذ هذا الترتيب من
                                            الترتيب
                                            السامي القديم في العربية، والكلمتين "ثخذ" و"ضظغ" تسمى من الروادف "التابعة"، وكانت
                                            تنقص عن الأحرف العربية بِسِتَّة حروف، قبل أن يجمعها "نصر بن عاصم" الذي يعد من علماء
                                            النحو البارزين في زمانه، و يقال أنه أول من وضع النقاط على الحروف في اللغة العربية
                                            بأمر من الحجاج بن يوسف</p>
                                        <a href="#" class="join">المزيد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="aboutUsVideo">
                                    <video controls>
                                        <source src="{{url('design/site/images/alekhlas.mp4')}}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- newOfSite -->
                <div class="newOfSite">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="aboutUsText">
                                    <div class="inlineBlock aboutUsImg position-relative">
                                        <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                        <i class="fas fa-satellite-dish icon-info"></i>
                                    </div>
                                    <div class="inlineBlock">
                                        <p class="mb-2">جديد الموقع</p>
                                        <p class="text-muted">هناك حقيقه مثبته منذ زمن طويل</p>
                                    </div>
                                </div>
                            </div>
                          <!-- carousel -->
                            <div class="col-12 col-lg-12">
                                <div class="owl-carousel owl-theme newOfSite-carousel">
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h5 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="owl-carousel owl-theme newOfSite-carousel">
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h6 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-2 imgPerson">
                                                        <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="h5 mb-1">عنوان المحتوي</p>
                                                        <p>هناك حقيقخ مثبته منذ زمن</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- courses -->
                <div class="courses">
                    <div class="container">
                        <div class="row">
                            <div class="aboutUsText col-8 mb-3 ">
                                <div class="inlineBlock aboutUsImg position-relative">
                                    <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                    <i class="fas fa-video icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2">الدورات المتاحه</p>
                                    <p class="text-muted">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                            </div>
                            <div class="col-4 text-left showAll">
                                <a href="" class="join">عرض الكل</a>
                            </div>
                        </div>

                                <!-- carousel -->
                        <div class="owl-carousel owl-theme newOfSite-carousel">
                            <div class="item">
                                <div class="cardNewOfSite">
                                    <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-2 imgPerson">
                                                <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                            </div>
                                            <div class="col-10">
                                                <p class="h6 mb-1">عنوان المحتوي</p>
                                                <p>هناك حقيقخ مثبته منذ زمن</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cardNewOfSite">
                                    <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-2 imgPerson">
                                                <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                            </div>
                                            <div class="col-10">
                                                <p class="h6 mb-1">عنوان المحتوي</p>
                                                <p>هناك حقيقخ مثبته منذ زمن</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cardNewOfSite">
                                    <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-2 imgPerson">
                                                <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                            </div>
                                            <div class="col-10">
                                                <p class="h6 mb-1">عنوان المحتوي</p>
                                                <p>هناك حقيقخ مثبته منذ زمن</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cardNewOfSite">
                                    <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-2 imgPerson">
                                                <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                            </div>
                                            <div class="col-10">
                                                <p class="h6 mb-1">عنوان المحتوي</p>
                                                <p>هناك حقيقخ مثبته منذ زمن</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cardNewOfSite">
                                    <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-2 imgPerson">
                                                <img src="{{url('design/site/images/a.jpg')}}" alt="s">
                                            </div>
                                            <div class="col-10">
                                                <p class="h5 mb-1">عنوان المحتوي</p>
                                                <p>هناك حقيقخ مثبته منذ زمن</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        </div>

                    </div>
                </div>

                <!-- service -->
                <div class="service">
                    <div class="row ml-0">
                        <div class="col-8 col-md-12 col-lg-7">
                            <div class="offerService">
                                <p class="h2 mb-4">الخدمه المقدمه</p>
                                <P>وتشبه ترتيب حروف الهجاء قديماً في اللغة العربية، وقد أخذ هذا الترتيب من الترتيب السامي القديم في
                                    العربية، والكلمتين "ثخذ" و"ضظغ" تسمى من الروادف "التابعة"، وكانت تنقص عن الأحرف</P>
                            </div>
                        </div>

                        <div class="col-4 align-self-center ">
                            <div class="serviceBackground ">
                                <!-- carousel -->
                                <div class="owl-carousel owl-theme service-carousel ">
                                    <div class="item">
                                        <div class="cardNewOfSite">
                                            <img src="{{url('design/site/images/mosque.jpg')}}" alt="aa">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1"></div>
                    </div>

                </div>

                <!-- techers -->
                <div class="teachers">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="aboutUsText col-8">
                                        <div class="inlineBlock aboutUsImg position-relative">
                                            <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">

                                            <i class="fas fa-user icon-info"></i>
                                        </div>
                                        <div class="inlineBlock">
                                            <p class="mb-2">من نحن</p>
                                            <p>هناك حقيقه مثبته منذ زمن طويل</p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-left showAll">
                                        <a href="" class="join">عرض الكل</a>
                                    </div>
                                </div>
                            </div>
                            @foreach ($instructors as $instructor)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <a href="{{url('instructor').'/'.$instructor->id}}" class="btn-link">
                                    <div class="techer">
                                        <img src="{{$instructor->image}}" alt="shiekh">
                                        <p class="mb-0">{{$instructor->name}}</p>
                                        <span class="text-muted">{!! $instructor->excerpt !!}</span>
                                        <div class="mt-2">
                                            <span class="float-right">عدد السلاسل</span>
                                            <span class="float-left">74</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
