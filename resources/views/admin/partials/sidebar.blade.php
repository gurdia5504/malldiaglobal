<style>
    .app-sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding-top: 70px;
        width: 230px;
        overflow: auto;
        z-index: 10;
        background-color: #a31a72;
        -webkit-box-shadow: 0px 8px 17px rgba(197, 29, 29, 0.2);
        box-shadow: 0px 8px 17px rgba(145, 34, 34, 0.2);
        -webkit-transition: left 0.3s ease, width 0.3s ease;
        -o-transition: left 0.3s ease, width 0.3s ease;
        transition: left 0.3s ease, width 0.3s ease;
    }

    .app-menu {
        margin-bottom: 0;
        padding-bottom: 40px;
    }

    .app-menu__item {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 12px 15px;
        font-size: 1.08em;
        border-left: 3px solid transparent;
        -webkit-transition: border-left-color 0.3s ease, background-color 0.3s ease;
        -o-transition: border-left-color 0.3s ease, background-color 0.3s ease;
        transition: border-left-color 0.3s ease, background-color 0.3s ease;
        color: #fff;
    }

    .app-menu__item.active,
    .app-menu__item:hover,
    .app-menu__item:focus {
        background: #a31a72;
        border-left-color: #009688;
        text-decoration: none;
        color: #fff;
    }

    .app-menu__icon {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 25px;
    }

    .app-menu__label {
        white-space: nowrap;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
    }
</style>

<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Font Awesome Icons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    --}}
</head>


<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="col">
            @auth
            <p><img src="/assets/images/{{ Auth::user()->image_path }}" class="rounded-circle img-fluid"
                    style="width: 100px;" alt="Avatar"></p>

            @endauth
            @guest
            <img src="{{ asset('images/1.jpg') }}" alt="">
            @endguest

        </div>
@auth
<div class="col">
    <p class="app-sidebar__user-name"> {{ Auth::user()->last_name }}</p>
</div>
@endauth



    </div>

    <ul class="app-menu">


        <li>
            <a class="app-menu__item" href="{{ route('WalletSellers.index') }}"><i class="fa fa-archive"
                    style="font-size:26px"></i>
                &nbsp;&nbsp; <span class="app-menu__label">Cüzdan Satıcıları</span>
            </a>
        </li>

       {{--  <li>
            <a class="treeview-item" href="{{ route('users.index') }}"><i class="app-menu__icon fa fa-users"></i> All
                Users</a>
        </li>
 --}}
        <li>
            <a class="app-menu__item" href="{{ route('walletOrderLists.index') }}"> <i class="fa fa-shopping-cart"
                    aria-hidden="true" style="font-size:26px"></i>&nbsp;&nbsp;
                <span class="app-menu__label">Cüzdan Satıcıları Para Transfer İşlemleri</span>
            </a>
        </li>


        <li><a class="app-menu__item" href="{{ route('walletSellerMoneyTransferLists.index') }}"><i
                    class="fa fa-solid fa-table" style="font-size:26px"></i> &nbsp;&nbsp;<span
                    class="app-menu__label">Cüzdan Maliyet Tablosu</span>
            </a>
        </li>
        <li><a class="app-menu__item" href="{{ route('malldiaGelirleris.index') }}"><i
                    class="fa fa-solid fa-money-bill"></i>&nbsp;&nbsp; Malldia
                Gelirleri
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('saticiGelirleris.index') }}">
                <i class="fa fa-solid fa-money-bill"></i> &nbsp;&nbsp; Satıcı Gelirleri</a>
        </li>

        <li><a class="app-menu__item" href="{{ route('havuzGelirleris.index') }}">
                <i class="fa fa-solid fa-money-bill"></i> &nbsp;&nbsp; Havuz Gelirleri</a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('saticiDagitimOranlaris.index') }}"><i class="fa fa-solid fa-chart-line" aria-hidden="true"
                    style="font-size:20px"></i> &nbsp;&nbsp;<span class="app-menu__label"> Satıcı Dağıtım
                    Oranları </span>

            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('hakedislers.index') }}"><i class="fa fa-solid fa-file-invoice-dollar"></i> &nbsp;&nbsp;
                Hakedişler
            </a>
        </li>


        <li>
            <a class="app-menu__item" href="{{ route('paraTransferIslemleris.index') }}"> <i class="fa main_menu fa fa-solid fa-money-bill-transfer"
                    aria-hidden="true" style="font-size:20px"></i>&nbsp;&nbsp;
                <span class="app-menu__label">Para Transferleri İşlemleri</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('kampanyaKotalars.index') }}"><i class="fa fa-solid fa-bullhorn"></i> &nbsp;&nbsp;
                Kampanya &amp; Kotalar
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('cuzdanYoneticileris.index') }}"><i class="fa fa-solid fa-user-group"></i> &nbsp;&nbsp;
                Cüzdan Yöneticileri
            </a>
        </li>

        <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">API Service</span>
        </a>

    </ul>

    <div class="sidebar-footer .d-block">
        &nbsp;
        &nbsp;
        <a href="/cuzdan/arayuz/production/dashboard.php?page_content=cuzdan_ayarlar" data-toggle="tooltip"
            data-placement="top" title="" data-original-title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;&nbsp;&nbsp;

        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;&nbsp;&nbsp;
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;&nbsp;&nbsp;
        <a id="logout-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <style>
        .sidebar-footer {

            bottom: 0px;
            clear: both;
            display: block;
            padding: 5px 0 0 0;
            position: fixed;
            width: 230px;
            background: #d7d1d1;
        }
    </style>

</aside>


<!-- /menu footer buttons -->
