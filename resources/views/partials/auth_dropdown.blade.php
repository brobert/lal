<li class="dropdown profile">
    @guest
    <a href="/login" class="" data-toggle="">
        <span class="meta">
            <span class="avatar"><img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" /></span>
            <span class="text hidden-xs hidden-sm pl5">Login</span>
        </span>
    </a>
    @endguest
    @auth
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        <span class="meta">
            <span class="avatar"><img src="{{$user->photo}}" alt="{{$user->name}}" class="img-circle" /></span>
            <span class="text hidden-xs hidden-sm pl5">{{$user->name}}</span>
        </span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <li><a href="{{route('page-profile.index')}}"><span class="icon"><i class="ico-user-plus2"></i></span> My Accounts</a></li>
        <li><a href="/page-faq"><span class="icon"><i class="ico-question"></i></span> Help</a></li>
        <li class="divider"></li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
    @endauth
</li>