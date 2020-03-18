<li class="{{url()->current() == $url ? 'active' : ''}} nav-item">
    <a href="{{$url}}">
        <i class="{{$icon}}"></i>
        <span class="menu-title" data-i18n="{{$name}}">{{$name}}</span>
    </a>
</li>
