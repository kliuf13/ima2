<div class="main-nav">
    <ul>
        <li><a href="/">Home</a></li>
        {{--<li><a href="/enter">Enter</a></li>--}}
        <li><a href="/entries/create">Submit Entry</a></li>
        <li><a href="/entries">All Entries</a></li>
        <li><a href="/winners">Winners</a></li>

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="menu_right">
        <!-- Authentication Links -->
        @guest
            <li>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a href="/dashboard">Dashboard</a>
                    <hr>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

</div>