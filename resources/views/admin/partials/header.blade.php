<style>
    .app-header {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background-color: #ddd;
        z-index: 1030;
        padding-right: 15px;
    }


    .app-header__logo {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto;
        color: #fff;
        text-align: center;
        font-family: 'Niconne';
        padding: 0 15px;
     /*    width: 100%;
        height: 100%; */
        font-size: 26px;
        font-weight: 400;
        line-height: 50px;
    }

    @media (min-width: 768px) {
        .app-header__logo {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            display: block;
            width: 230px;
            background-color: white;
        }
    }

    .app-header__logo:focus,
    .app-header__logo:hover {
        text-decoration: none;
        color: #fff;
    }

    .bg-center{
        color: #000;
        align-self: center;

    }

    .app-sidebar__toggle {
    padding: 0 15px;
    font-family: fontAwesome;
    color: white;
    line-height: 2.4;
    -webkit-transition: background-color var(--white);
    -o-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;
    }

    @media (max-width: 767px) {
    .app-sidebar__toggle {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
    }
    }

    .app-sidebar__toggle:before {
    content: "\f0c9";
    font-size: 21px;
    }

    .app-sidebar__toggle:focus, .app-sidebar__toggle:hover {
    color: #fff;
   /*  background-color: #00600a; */
   background-color: #554f4f;
    text-decoration: none;
    }
</style>

<header class="app-header">
    <a class="app-header__logo "  href="{{ route('home.index') }}"><img src="/assets/images/logo.jpg" class=" img-fluid bg-center" style="width: 100px;" alt="Avatar">
        </a>

    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <div class="clearfix"></div>
    <ul class="app-nav">

        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i
                    class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <li class="app-notification__title">
                    You have 4 new notifications.
                </li>
                <div class="app-notification__content">
                    <li>
                        <a class="app-notification__item" href="javascript:;">
                            <span class="app-notification__icon">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </span>
                            <div>
                                <p class="app-notification__message">
                                    Mail server not working
                                </p>
                                <p class="app-notification__meta">5 min ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="app-notification__item" href="javascript:;">
                            <span class="app-notification__icon">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-success"></i>
                                    <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                                </span>
                            </span>
                            <div>
                                <p class="app-notification__message">
                                    Transaction complete
                                </p>
                                <p class="app-notification__meta">2 days ago</p>
                            </div>
                        </a>
                    </li>
                </div>
                <li class="app-notification__footer">
                    <a href="#">See all notifications.</a>
                </li>
            </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu" ><i
                   >
                @if(Auth::user())
                <img src="/assets/images/{{ Auth::user()->image_path }}" class="rounded-circle img-fluid" style="width: 40px;"
                    alt="Avatar"></i>

                @endif
            </a>

            <ul class="dropdown-menu settings-menu dropdown-menu-right">



                <li>
                    <a class="dropdown-item" href="{{ url('update_avatar')}}"><i class="fa fa-user fa-lg"></i> My Account</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.previousElementSibling.submit();">
                        <i class="fa fa-sign-out fa-lg"></i> Logout
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</header>
