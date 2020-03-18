<div
    class="main-menu menu-fixed menu-accordion menu-shadow  {{request()->cookie('theme_layout') == '' ? 'menu-light' : 'menu-dark'}}"
    data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('')}}">
                    <div class="brand-logo" style="background: url('{{$settings->main_logo}}') no-repeat;"></div>
                    <h2 class="brand-text mb-0 "> {{$settings->site_title}}</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @include('admin.components.navItems.singleitem', ['url' => url('admin/'),'name'=>trans('web.tabs'),'icon'=>'feather icon-tabs'])
            @if (auth()->User()->group_id->settings_show == 1)
                @include('admin.components.navItems.singleitem', ['url' => url('admin/settings'),'name'=>trans('web.settings'),'icon'=>'feather icon-settings'])
            @endif
            @if (auth()->User()->group_id->admins_show == 1 || auth()->User()->group_id->admin_groups_show == 1 ||auth()->User()->group_id->clients_show == 1 )
                <li class=" navigation-header"><span>{{trans('web.users')}}</span></li>
                @if (auth()->User()->group_id->clients_show == 1)
                    @include('admin.components.navItems.singleitem', ['url' => url('admin/clients'),'name'=>trans('web.clients'),'icon'=>'feather icon-users'])
                @endif
                @if (auth()->User()->group_id->admins_show == 1 || auth()->User()->group_id->admin_groups_show == 1)
                    @include('admin.components.navItems.multiitem', ['url' => 'javascript:void(0)','name'=>trans('web.admins'),'icon'=>'feather icon-user-check','items'=>[
                      [
                      'name'=>'List Admins',
                      'icon'=>'feather icon-circle',
                      'url'=>url('admin/admins'),
                      ],[
                      'name'=>'Admin Groups',
                      'icon'=>'feather icon-circle',
                      'url'=>url('admin/admin-groups'),
                      ],
                      ]])
                @endif
            @endif

            <li class=" navigation-header"><span>{{trans('web.departments')}}</span></li>
            @if (auth()->User()->group_id->categories_show == 1)
                @include('admin.components.navItems.singleitem', ['url' => url('admin/instructor'),'name'=>'المحاضرين','icon'=>'feather icon-users'])
            @endif

                @if (auth()->User()->group_id->admins_show == 1 || auth()->User()->group_id->admin_groups_show == 1)
                    @include('admin.components.navItems.multiitem', ['url' => 'javascript:void(0)','name'=>'ماذا عنا','icon'=>'feather icon-user-check','items'=>[
                      [
                      'name'=>'من نحن',
                      'icon'=>'feather icon-circle',
                      'url'=>url('admin/about'),
                      ],[
                      'name'=>'كلمات ف حق الموقع',
                      'icon'=>'feather icon-circle',
                      'url'=>url('admin/instructor-words'),
                      ],[
                      'name'=>'انجازات الموقع',
                      'icon'=>'feather icon-circle',
                      'url'=>url('admin/achievement-the-site'),
                      ],
                      ]])
                @endif

                @if (auth()->User()->group_id->categories_show == 1)
                @include('admin.components.navItems.singleitem', ['url' => url('admin/blog'),'name'=>'المنتدي','icon'=>'feather icon-users'])
            @endif
            @include('admin.components.navItems.singleitem', ['url' => url('admin/categories'),'name'=>trans('web.categories'),'icon'=>'feather icon-user-check'])

            @include('admin.components.navItems.singleitem', ['url' => url('admin/courses'),'name'=>'الكورسات','icon'=>'fa fa-laptop'])
            @if (auth()->User()->group_id->icons_show == 1)
                <li class=" navigation-header"><span>{{trans('web.uiElements')}}</span></li>
                @include('admin.components.navItems.multiitem', ['url' => 'javascript:void(0)','name'=>'Icons','icon'=>'feather icon-eye','items'=>[
                [
                'name'=>trans('web.featherIcons'),
                'icon'=>'feather icon-circle',
                'url'=>url('admin/icons-feather'),
                ],[
                'name'=>trans('web.fontAwesome'),
                'icon'=>'feather icon-circle',
                'url'=>url('admin/icons-font-awesome'),
                ],
                ]])
            @endif
        </ul>
    </div>
</div>
