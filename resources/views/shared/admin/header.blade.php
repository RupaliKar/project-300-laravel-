<div class="header_right">
    <ul>
        <li><a href="#">{{ Auth::user()->name }}</a></li>
        <li><a href="#"><img src="{{asset('public/admin_asset/images/user.jpg')}}" alt="" /><i class="fas fa-arrow-down"></i>
            </a>
            <ul>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
    </ul>
</div>