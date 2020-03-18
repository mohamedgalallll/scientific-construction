@extends('site.layout.index')
@section('content')
    <!--        content -->
    <section class="content">
        <div class="container">
            <div class="course-desc-page">
                <div class="row">
                    <div class="col-12 ">
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
                            <div class="col-4 ">
                                <p class="mb-2 h5 pt-2">العلامات</p>
                            </div>

                            <div class="col-8 ">
                                <div class="float-md-left ">
                                    <div class="row">
                                        <form class="form-inline my-lg-0">
                                            <div class="col">
                                                <input class="form-control  form-control-sm title-search " type="search" placeholder="العنوان" aria-label="Search" >

                                            </div>
                                            <div class="col">
                                                <button class="btn form-control  form-control-sm btn-outline-success add-btn   my-sm-0 font-12 " type="submit">بحث</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="course-content">
                            <div class="card-course-desc">
                                <div class="card mb-3">
                                    <div class="no-gutters">
                                        <div class="card-body">
                                            <p>
                                                نسبة اجتياز المتن
                                            </p>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-4">
                                                        <p>0%</p>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <p>50%</p>
                                                    </div>
                                                    <div class="col-4 text-left">
                                                        <p>100%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-fasl">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-2 pl-0 border-l " >
                                        <div class="head-content text-center">
                                            <h6>الفصول</h6>
                                        </div>
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active pt-3" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <div>
                                                    <p class="h6">الفصل الاول</p>
                                                </div>
                                                <div class="font-12 text-decoration ">
                                                    اختيار الفصل
                                                </div>
                                            </a>
                                            <a class="nav-link pt-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <div>
                                                    <p class="h6">الفصل الثاني </p>
                                                </div>
                                                <div class="font-12 text-decoration ">
                                                    اختيار الفصل
                                                </div>
                                            </a>
                                            <a class="nav-link pt-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"> <div>
                                                    <p class="h6">الفصل الثالث</p>
                                                </div>
                                                <div class="font-12 text-decoration ">
                                                    اختيار الفصل
                                                </div>
                                            </a>
                                            <a class="nav-link pt-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"> <div>
                                                    <p class="h6">الفصل الرابع</p>
                                                </div>
                                                <div class="font-12 text-decoration ">
                                                    اختيار الفصل
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-9 col-lg-10 pr-0 " >
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="row">
                                                    <div class="col-12 col-lg-5 pl-lg-0 border-l-1" >
                                                        <div class="head-content">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h6>خدمات المتن  </h6>
                                                                </div>
                                                                <div class="col-7 font-icon">
                                                                    <span ><i class="fas fa-play-circle"></i> </span>
                                                                    <span title="تحميل الملف صوتي" ><i class="fas fa-download"></i></span>
                                                                    <span><i class="fas fa-file-word"></i></span>
                                                                    <span><i class="fas fa-file-pdf"></i></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="p-4 color-gray">
                                                            <p class="color-ayah">إِذَا جَاءَ نَصْرُ اللَّهِ وَالْفَتْحُ (1)</p>
                                                            <p>وقال النسائي : أخبرنا محمد بن إسماعيل بن إبراهيم ، أخبرنا جعفر ، عن أبي العميس ( ح ) وأخبرنا محمد بن سليمان ، حدثنا جعفر بن عون ، حدثنا أبو العميس ، عن عبد المجيد بن سهيل عن عبيد الله بن عبد الله بن عتبة قال : قال لي ابن عباس : يا ابن عتبة ، أتعلم آخر سورة من القرآن نزلت ؟ قلت : نعم ، " <span class="color-ayah">إذا جاء نصر الله والفتح</span> " قال : صدقت</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-7  pr-0">
                                                        <div class="head-content">
                                                            <div class="row">
                                                                <div class=" col-4 col-lg-6 col-xl-3">
                                                                    <h6 class="m-sm">خدمات الشرح </h6>
                                                                </div>
                                                                <div class="col-8 col-lg-6 col-xl-5 font-icon">
                                                                    <span ><i class="fas fa-play-circle"></i> </span>
                                                                    <span title="تحميل الملف صوتي"><i class="fas fa-download"></i></span>
                                                                    <span><i class="fas fa-file-word"></i></span>
                                                                    <span><i class="fas fa-file-pdf"></i></span>
                                                                    <span><i class="fas fa-print"></i></span>
                                                                </div>
                                                                <div class="col-12 col-lg-12 col-xl-4">
                                                                    <a href="" class="bg-green m-0 py-1 font-12">منتدى النقاش </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-4 color-gray">
                                                            <p>وقال الحافظ البيهقي : أخبرنا علي بن أحمد بن عبدان ،
                                                                أخبرنا أحمد بن عبيد الصفار ، حدثنا الأسفاطي ، حدثنا سعيد بن سليمان ، حدثنا عباد بن العوام ،
                                                                عن هلال بن خباب ، عن عكرمة ، عن ابن عباس قال : لما نزلت : "
                                                                <span class="span-color-gre"> إذا جاء نصر الله والفتح " دعا رسول الله         فاطمة وقال : " إنه قد نعيت إلي نفسي " ، فبكت ثم ضحكت ، وقالت : أخبرني أنه نعيت إليه نفسه فبكيت ، ثم قال : " اصبري فإنك أول أهلي لحاقا بي " فضحكت</span> <br>
                                                                وقد رواه النسائي - كما سيأتي - بدون ذكر فاطمة .
                                                            </p>
                                                        </div>
                                                        <div class="p-4 color-gray">
                                                            <p>
                                                                قال البخاري : حدثنا موسى بن إسماعيل ، حدثنا أبو عوانة ، عن أبي بشر ، عن سعيد بن جبير ، عن ابن عباس قال : كان عمر يدخلني مع أشياخ بدر ، فكأن بعضهم وجد في نفسه ، فقال : لم يدخل هذا معنا ولنا أبناء مثله ؟ فقال عمر : إنه ممن قد علمتم فدعاهم ذات يوم فأدخله معهم ، فما رؤيت أنه دعاني فيهم يومئذ إلا ليريهم ، فقال : ما تقولون في قول الله عز وجل : ( إذا جاء نصر الله والفتح ) ؟ فقال بعضهم : أمرنا أن نحمد الله ونستغفره إذا نصرنا وفتح علينا
                                                            </p>
                                                        </div>
                                                        <div class="p-4 text-center pagi-page my-3">
                                                            <span>
                                                                <i class="far fa-arrow-alt-circle-right"></i>
                                                            </span><span>11 <span> /</span> <span>3</span></span> <span><i class="far fa-arrow-alt-circle-left"></i> </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-content row">
                                    <div class="col-lg-4 border-l-1 py-3 border-sm-0">
                                        <a href="{{url('course/description/contact')}}" class="btn-link">
                                            <div class="row">
                                                <div class="col-3  col-lg-3 ">
                                                    <img src="{{url('design/site/images/nabolsy.png')}}" alt="" width="56px">
                                                </div>
                                                <div class="col-9  col-lg-9">

                                                        <span class="font-12">
                                                            تواصل مع المعلم
                                                        </span>
                                                        <p class="font-10 ">
                                                            الدكتور محمد راتب النبالسى
                                                        </p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row" style="height: 100%;">
                                            <div class="col-6 col-md-3 border-l py-4 text-center ">
                                                <a href="{{url('course/description/questioned')}}" class="btn-link">
                                                    <p class="position-relative">تساؤلات <span class="num-circl">1</span> </p>
                                                </a>

                                            </div>
                                            <div class="col-6 col-md-2 border-l py-4 text-center">
                                                <a class="btn-link" href="{{url('course/description/summingUp')}}">
                                                    <p>تلخيص</p>
                                                </a>

                                            </div>
                                            <div class="col-6 col-md-2 border-l py-4 text-center">
                                                <a class="btn-link" href="{{url('course/description/benefits')}}">
                                                    <p>فؤائد</p>
                                                </a>

                                            </div>
                                            <div class="col-6 col-md-2 border-l py-4 text-center">
                                                <a class="btn-link" href="">
                                                    <p>تقييم</p>
                                                </a>

                                            </div>
                                            <div class="col-6 col-md-2 py-4 text-center">
                                                <a class="btn-link" href="{{url('course/description/videos')}}">
                                                    <p>عرض الشرائح</p>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{url('course/description/ques-book')}}" class="bg-green py-1 font-12">مسائل الكتاب </a>
                                <a href="{{url('course/description/signs')}}" class="bg-green py-1 font-12">العلامات </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
