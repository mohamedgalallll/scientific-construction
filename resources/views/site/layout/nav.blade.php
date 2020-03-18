 <!-- Navbar -->
 <header id="navbar" class=" {{url()->current() == url('/') ? 'bg-light nav-tabs-color' : 'bg-nav-site nav-site-color'}}">
    <div class="container">
        <div class="row">
            <!-- right Navbar -->
            <div class="col-12 col-md-7 col-lg-9  m-md">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{url()->current() == url('/') ? url('design/site/images/Layer1.png') : url('design/site/images/logo-2.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">الرئيسيه<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/courses')}}">الدورات</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{url('/instructor')}}">هيئه التدريس</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">اختبار المستوى</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/support')}}">الدعم الفني</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/proposals')}}">مقترحاتي</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contactUs')}}">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- left Navbar -->
              <!-- left Navbar -->
              <div class="col-12 col-md-4 col-lg-3 text-left pt-md-3">
                @auth
                <!-- Notificaiton -->
                <div class="dropdown">
                    <div class="badge-top-container" id="dropdownNotification" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class=" {{url()->current() == url('/') ? 'bg-notfication' : 'text-white'}}  mt-2">
                            <i class="fas fa-bell"></i>
                        </span>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu rtl-ps-none dropdown-menu-right notification-dropdown "
                        aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-details flex-grow-1 text-right">
                                <p class="m-0 d-flex align-items-center">
                                    <span>اشعار جديد</span>
                                    <span class=" badge-pill  ml-1 mr-1">جديد</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">منذ 10 ثواني</span>
                                </p>
                                <p class="text-small text-muted m-0">محتوى الاشعار</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-details flex-grow-1 text-right">
                                <p class="m-0 d-flex align-items-center">
                                    <span>اشعار جديد</span>
                                    <span class=" badge-pill badge-primary ml-1 mr-1">جديد</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">منذ 10 ثواني</span>
                                </p>
                                <p class="text-small text-muted m-0">محتوى الاشعار</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-details flex-grow-1 text-right">
                                <p class="m-0 d-flex align-items-center">
                                    <span>اشعار جديد</span>
                                    <span class=" badge-pill  badge-primary ml-1 mr-1">جديد</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">منذ 10 ثواني</span>
                                </p>
                                <p class="text-small text-muted m-0">محتوى الاشعار</p>
                            </div>
                        </div>
                        <div class="notification-details p-2">
                            <p class="m-0 text-center">
                                <a href="{{url('/notifications')}}"><span class="bg-notification"> المزيد ... </span></a>
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Notifications End -->
                <div class="dropdown profileDropdown float-left float-lg-none ">
                    <button class="btn {{url()->current() == url('/') ? ' btn-link-tabs' : ' btn-link'}} " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-chevron-down {{url()->current() == url('/') ? 'text-dark' : 'text-white'}}"></i>
                        <span class="{{url()->current() == url('/') ? 'text-dark' : 'text-white'}}">{{auth()->user()->name}}</span>
                        <img src="{{url('design/site/images')}}{{auth()->user()->gender == 1 ? '/Mask.png' : '/Mask Group 1.png'}}" alt="">

                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{url('/profile')}}"><span class="pl-1"><i class="fas fa-id-card"></i></span> الملف الشخصي </a>
                        <a class="dropdown-item" href="{{url('/profile-info')}}"><span class="pl-1"><i class="fas fa-user"></i></span> معلوماتي </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="pl-1"><i class="fas fa-sign-out-alt"></i></span> نسجيل الخروج </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endauth
                @guest
                <div class="col-12 col-md-4 col-lg-3 text-left pt-md-1">
                    <div>
                        <a href="{{route('register')}}" class="btn-link-auth">
                            تسجيل
                        </a>
                    </div>
                </div>
                @endguest


            </div>
        </div>
    </div>
</header>
