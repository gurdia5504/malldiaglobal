@extends('admin.app')
{{-- @section('content') --}}

@section('content')
<html lang="tr" class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cüzdan</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">





    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}



    {{--
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    --}}
    {{--
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    --}}
    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

        .wrapper {
            display: flex;
            position: relative;
            display: flex;
            padding: 0 35px;
            align-items: center;
            justify-content: center;
            background: #fff;
            box-sizing: border-box;
        }

        .wrapper i {
            top: 50%;
            height: 44px;
            width: 44px;
            color: #343f4f;
            cursor: pointer;
            font-size: 1.15rem;
            position: absolute;
            text-align: center;
            line-height: 44px;
            background: #fff;
            border-radius: 50%;
            transform: translateY(-50%);
            transition: transform 0.1s linear;
        }

        .wrapper i:active {
            transform: translateY(-50%) scale(0.9);
        }

        .wrapper i:hover {
            background: #f2f2f2;
        }

        .wrapper i:first-child {
            left: -22px;
            display: none;
        }

        .wrapper i:last-child {
            right: -22px;
        }

        .wrapper .carousel {
            font-size: 0px;
            cursor: pointer;
            overflow: hidden;
            white-space: nowrap;
            scroll-behavior: smooth;
        }

        .carousel.dragging {
            cursor: grab;
            scroll-behavior: auto;
        }

        .carousel.dragging img {
            pointer-events: none;
        }

        .carousel img {
            height: 100px;
            width: 100px !important;
            object-fit: cover;
            user-select: none;
            margin-left: 14px;
            width: calc(80% / 3);
        }

        .carousel img:first-child {
            margin-left: 0px;
        }

        @media screen and (max-width: 900px) {
            .carousel img {
                width: calc(80% / 2);
            }
        }

        @media screen and (max-width: 550px) {
            .carousel img {
                width: 100%;
            }
        }

        .price-card {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .price-card h3 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .price-card .price {
            font-size: 36px;
            font-weight: bold;
            color: #007bff;
        }

        .price-card ul {
            list-style: none;
            padding: 0;
        }

        .price-card li {
            margin-bottom: 10px;
        }

        .price-card .btn {
            margin-top: 5px;
            cursor: auto;
        }

        .bg {
            background: #fff
        }

        .progress-bar {
            color: white;

        }

        .progressbar {
            color: #007bff
        }

        .icon {
            font-size: 50px;
            padding: -15%;
            margin: 0%;
            color: #bec2cb
        }

        .count {
            font-size: 30px;
            color: #5e6267;
            font-weight: bold;


        }

        .bg {
            background: #fff
        }


        .l .h {
            height: 100px;
            width: 100px !important;

        }

        .progress {
            color: #007bff
        }
    </style>
</head>

<body>

    <h2>Havuz Gelirleri</h2>

    <!-- page content -->
    <div class="right_col" role="main" style="min-height: 1158px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                        <div class="tile-stats bg">
                            <div class="d-flex justify-content-between align-items-center "
                                style="padding: 0 !important">
                                <div class="count p-2">5.000 TL</div>
                                <div class="d-flex justify-content-between">
                                    <div class="icon col">
                                        <i class="fa-solid fa-turkish-lira-sign"></i>
                                    </div>
                                </div>

                            </div>

                            <h3 class="p-2" style="font-size: 19px !important">
                                TR Havuz Cüzdan Geliri
                            </h3>
                            <div class="progress" style="margin: 14px">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    %40
                                </div>

                            </div>
                            <br>
                        </div>
                    </div>



                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                        <div class="tile-stats bg">
                            <div class="d-flex justify-content-between align-items-center "
                                style="padding: 0 !important">
                                <div class="count p-2">5.000 €</div>
                                <div class="d-flex justify-content-between">
                                    <div class="icon col">
                                        <i class="fa-solid fa-euro-sign"></i>
                                    </div>
                                </div>


                            </div>
                            <h3 class="p-2" style="font-size: 19px !important">
                                EU Havuz Cüzdan Geliri
                            </h3>
                            <div class="progress" style="margin: 14px">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    %40
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats bg">
                            <div class="d-flex justify-content-between align-items-center "
                                style="padding: 0 !important">
                                <div class="count p-2">5.000 $</div>
                                <div class="d-flex justify-content-between">
                                    <div class="icon col">
                                        <i class="fa-sharp fa-regular fa-dollar-sign"></i>
                                    </div>
                                </div>

                            </div>
                            <h3 class="p-2" style="font-size: 19px !important">
                                USA Havuz Cüzdan Geliri
                            </h3>
                            <div class="progress" style="margin: 14px">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    %40
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats bg">
                            <div class="d-flex justify-content-between align-items-center "
                                style="padding: 0 !important">
                                <div class="count p-2">5.000 $</div>
                                <div class="d-flex justify-content-between">
                                    <div class="icon col">
                                        <i class="fa-sharp fa-regular fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>
                            <h3 class="p-2" style="font-size: 19px !important">
                                Asya Havuz Cüzdan Geliri
                            </h3>
                            <div class="progress" style="margin: 14px">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    %40
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div>
           <form action="{{ route('havuzGelirleris.filter') }}" method="GET">
            <div class="row">
                <div class="col-md-2">
                    <input style="border-radius: 5px" name="vendor" value="{{ $vendor ?? '' }}" type="text" class="form-control"
                        placeholder="Cüzdan Satıcısı">
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select style="border-radius: 5px" class="form-control" onchange="window.location.href=this.value;">
                            <option hidden="">Seçiniz</option>

                            <option value="{{ route('havuzGelirleris.individual') }}">Bireysel</option>
                            <option value="{{ route('havuzGelirleris.corporate') }}">Kurumsal</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <input style="border-radius: 5px" name="country" value="{{ $country ?? '' }}" type="text"
                        class="form-control" placeholder="Ülke ID">
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select style="border-radius: 5px" class="form-control" onchange="window.location.href=this.value;">
                            <option hidden="">Durum</option>
                            <option value="{{ route('havuzGelirleris.actifUser') }}">Aktif</option>
                            <option value="{{ route('havuzGelirleris.passifUser') }}">Pasif</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <button style="border-radius: 5px" class="form-control">
                        Ara
                    </button>
                </div>
            </div>
        </form>
            </div>
            <br>


            <script>
                $(document).ready(function() {
        // Get the active tab link
        var activeTab = $('.nav-tabs .active');

        // Get the URL for the active tab content
        var activeTabUrl = activeTab.attr('data-url');

        // Fetch the content for the active tab via AJAX
        $.get(activeTabUrl, function(data) {
          $('#' + activeTab.attr('href').slice(1)).html(data);
        });

        // Listen for the click event on each tab link
        $('.nav-tabs a').on('click', function(event) {
          // Prevent the default link behavior
          event.preventDefault();

          // Get the URL for the selected tab content
          var tabUrl = $(this).attr('data-url');

          // Fetch the content for the selected tab via AJAX
          $.get(tabUrl, function(data) {
            // Update the tab content with the fetched data
            $('#' + $(event.target).attr('href').slice(1)).html(data);

            // Activate the selected tab
            $('.nav-tabs a').removeClass('active');
            $(event.target).addClass('active');
          });
        });
      });
            </script>


            <div id="exTab1" class="col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs flex-row">
                    <li class="nav-item ">
                        <a class="vav-link {{request()->is('havuzGelirleris') ? 'active' : null}}"
                            href="{{ url('havuzGelirleris') }}" data-toggle="havuzGelirleris">Tümü Havuz
                        </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;


                    <li class="nav-item ">
                        <a class="vav-link {{request()->is('havuzGelirleris-tr_havuz') ? 'active' : null}}"
                            href="{{ url('havuzGelirleris-tr_havuz') }}" data-toggle="havuzGelirleris">TR
                            Havuz</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;

                    <li class="nav-item ">
                        <a class="vav-link {{request()->is('havuzGelirleris-ue_havuz') ? 'active' : null}}"
                            href="{{ url('havuzGelirleris-ue_havuz') }}" data-toggle="havuzGelirleris">UE
                            Havuz</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;

                    <li class="nav-item ">
                        <a class="vav-link {{request()->is('havuzGelirleris-usa_havuz') ? 'active' : null}}"
                            href="{{ url('havuzGelirleris-usa_havuz') }}" data-toggle="havuzGelirleris">USA
                            Havuz</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;

                    <li class="nav-item ">
                        <a class="vav-link {{request()->is('havuzGelirleris-asya_havuz') ? 'active' : null}}"
                            href="{{ url('havuzGelirleris-asya_havuz') }}" data-toggle="havuzGelirleris">ASYA
                            Havuz</a>
                    </li>
                </ul>

                <div class="tab-content clearfix">

                    <div class="tab-pane {{request()->is('havuzGelirleris') ? 'active' : null}}"
                        id="{{ url('havuzGelirleris') }}">
                        <br>
                        <div class="x_content">
                            <table id="malldia_tr" class="table table-striped table-bordered dt-responsive"
                               style="overflow-x:auto;">
                                <thead>

                                    <tr>
                                        <th>Sipariş Tarihi</th>
                                        <th>Ürün Bilgisi</th>
                                        <th>Bölge ID</th>
                                        <th>Ülke ID</th>
                                        <th scope="col" width="25%">Satıcı</th>
                                        <th>Satıcı ID</th>
                                        <th>Döviz Kur</th>
                                        <th>Şirket Payı</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($havuzGelirleris as $key => $walletOrderList )

                                    <tr>
                                        <td>{{$walletOrderList->date_order}}</td>
                                        <td>
                                            {{$walletOrderList->product_name}}
                                        </td>
                                        <td>{{$walletOrderList->region}}</td>
                                        <td>{{$walletOrderList->country}}</td>
                                        <td>{{$walletOrderList->user->last_name}} {{$walletOrderList->user->first_name}}
                                        </td>
                                        <td>{{$walletOrderList->user->phone}}</td>
                                        <td>{{$walletOrderList->user->currency}}</td>
                                        <td>{{$walletOrderList->pool_pay}}</td>
                                    </tr>




                                    @endforeach

                                    <!-- Add more data rows as needed -->
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">




                                {!! $havuzGelirleris->links() !!}



                            </div>
                        </div>
                    </div>

                    <div class="tab-pane {{request()->is('havuzGelirleris-tr_havuz') ? 'active' : null}}"
                        id="{{ url('havuzGelirleris-tr_havuz') }}">
                        <br>
                        <div class="x_content">
                            <table id="malldia_tr" class="table table-striped table-bordered dt-responsive"
                            style="overflow-x:auto;">
                                <thead>

                                    <tr>
                                        <th>Sipariş Tarihi</th>
                                        <th>Ürün Bilgisi</th>
                                        <th>Bölge ID</th>
                                        <th>Ülke ID</th>
                                        <th>Satıcı</th>
                                        <th>Satıcı ID</th>
                                        <th>Döviz Kur</th>
                                        <th>Şirket Payı</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($havuzGelirleris as $key => $walletOrderList )

                                    <tr>
                                        <td>{{$walletOrderList->date_order}}</td>
                                        <td>
                                            {{$walletOrderList->product_name}}
                                        </td>
                                        <td>{{$walletOrderList->region}}</td>
                                        <td>{{$walletOrderList->country}}</td>
                                        <td>{{$walletOrderList->user->last_name}} {{$walletOrderList->user->first_name}}
                                        </td>
                                        <td>{{$walletOrderList->user->phone}}</td>
                                        <td>{{$walletOrderList->user->currency}}</td>
                                        <td>68,45</td>
                                    </tr>




                                    @endforeach

                                    <!-- Add more data rows as needed -->
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">




                                {!! $havuzGelirleris->links() !!}



                            </div>
                        </div>
                    </div>
                    <div class="tab-pane {{request()->is('havuzGelirleris-ue_havuz') ? 'active' : null}}"
                        id="{{ url('havuzGelirleris-ue_havuz') }}">
                        <br>
                        <table id="malldia_eu" class="table table-striped table-bordered dt-responsive"
                          style="overflow-x:auto;">
                            <thead>
                                <tr>
                                    <th>Sipariş Tarihi</th>
                                    <th>Ürün Bilgisi</th>
                                    <th>Bölge ID</th>
                                    <th>Ülke ID</th>
                                    <th>Satıcı</th>
                                    <th>Satıcı ID</th>
                                    <th>Döviz Kur</th>
                                    <th>Şirket Payı</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($havuzGelirleris as $key => $walletOrderList )
                                <tr>
                                    <td>{{$walletOrderList->date_order}}</td>
                                    <td>
                                        {{$walletOrderList->product_name}}
                                    </td>
                                    <td>{{$walletOrderList->region}}</td>
                                    <td>{{$walletOrderList->country}}</td>
                                    <td>{{$walletOrderList->user->last_name}} {{$walletOrderList->user->first_name}}
                                    </td>
                                    <td>{{$walletOrderList->user->phone}}</td>
                                    <td>{{$walletOrderList->user->currency}}</td>
                                    <td>68,45</td>
                                </tr>

                                @endforeach
                                <!-- Add more data rows as needed -->
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">




                            {!! $havuzGelirleris->links() !!}



                        </div>
                    </div>
                    <div class="tab-pane {{request()->is('havuzGelirleris-usa_havuz') ? 'active' : null}}"
                        id="{{ url('havuzGelirleris-usa_havuz') }}">
                        <br>
                        <table id="malldia_usa" class="table table-striped table-bordered dt-responsive"
                        style="overflow-x:auto;">
                            <thead>
                                <tr>
                                    <th>Sipariş Tarihi</th>
                                    <th>Ürün Bilgisi</th>
                                    <th>Bölge ID</th>
                                    <th>Ülke ID</th>
                                    <th>Satıcı</th>
                                    <th>Satıcı ID</th>
                                    <th>Döviz Kur</th>
                                    <th>Şirket Payı</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($havuzGelirleris as $key => $walletOrderList )
                                <tr>
                                    <td>{{$walletOrderList->date_order}}</td>
                                    <td>
                                        {{$walletOrderList->product_name}}
                                    </td>
                                    <td>{{$walletOrderList->region}}</td>
                                    <td>{{$walletOrderList->country}}</td>
                                    <td>{{$walletOrderList->user->last_name}} {{$walletOrderList->user->first_name}}
                                    </td>
                                    <td>{{$walletOrderList->user->phone}}</td>
                                    <td>{{$walletOrderList->user->currency}}</td>
                                    <td>68,45</td>
                                </tr>

                                @endforeach
                                <!-- Add more data rows as needed -->
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">




                            {!! $havuzGelirleris->links() !!}



                        </div>
                    </div>
                    <div class="tab-pane {{request()->is('havuzGelirleris-asya_havuz') ? 'active' : null}}"
                        id="{{ url('havuzGelirleris-asya_havuz') }}">
                        <br>
                        <table id="malldia_asia" class="table table-striped table-bordered dt-responsive"
                        style="overflow-x:auto;">
                            <thead>
                                <tr>
                                    <th>Sipariş Tarihi</th>
                                    <th>Ürün Bilgisi</th>
                                    <th>Bölge ID</th>
                                    <th>Ülke ID</th>
                                    <th>Satıcı</th>
                                    <th>Satıcı ID</th>
                                    <th>Döviz Kur</th>
                                    <th>Şirket Payı</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($havuzGelirleris as $key => $walletOrderList )
                                <tr>
                                    <td>{{$walletOrderList->date_order}}</td>
                                    <td>
                                        {{$walletOrderList->product_name}}
                                    </td>
                                    <td>{{$walletOrderList->region}}</td>
                                    <td>{{$walletOrderList->country}}</td>
                                    <td>{{$walletOrderList->user->last_name}} {{$walletOrderList->user->first_name}}
                                    </td>
                                    <td>{{$walletOrderList->user->phone}}</td>
                                    <td>{{$walletOrderList->user->currency}}</td>
                                    <td>68,45</td>
                                </tr>

                                @endforeach
                                <!-- Add more data rows as needed -->
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">




                            {!! $havuzGelirleris->links() !!}



                        </div>
                    </div>



                </div>
            </div>

            <script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
            </scrip>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
            </script>
            </script>
            <style>
                body {
                    padding: 20px;

                }

                #exTab1 .tab-content {
                    border: #007bff padding: 15px 15px;
                }



                /* remove border radius for the tab */

                #exTab1 .nav-pills>li>a {
                    border-radius: 0;
                }
            </style>

            <!-- Bootstrap core JavaScript
                ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->

            {{-- <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs" role="tablist">

                    <li class="active" role="presentation">
                        <a data-toggle="tab" href="#tr">TR Malldia</a>
                    </li>
                    <li role="presentation"><a data-toggle="tab" href="#eu">EU Malldia</a></li>
                    <li><a data-toggle="tab" href="#usa">USA Malldia</a></li>
                    <li><a data-toggle="tab" href="#asia">Asya Malldia</a></li>
                </ul> --}}

                {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active" role="presentation">
                        <button class="nav-link active" data-toggle="tab" data-target="#tr" type="button" role="tab"
                            aria-controls="tr">TR Malldia</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-toggle="tab" data-target="#eu" type="button" role="tab"
                            aria-controls="eu">EU Malldia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-toggle="tab" data-target="#usa" type="button" role="tab"
                            aria-controls="usa">USA Malldia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-toggle="tab" data-target="#asia" type="button" role="tab"
                            aria-controls="asia">Asya Malldia</button>
                    </li>


                </ul> --}}

                {{-- <div class="tab-content">
                    <div id="tr" class="tab-pane fade in active">
                        <br>
                        <div class="x_content">
                            <table id="malldia_tr" class="table table-striped table-bordered dt-responsive"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sipariş Tarihi</th>
                                        <th>Ürün Bilgisi</th>
                                        <th>Bölge ID</th>
                                        <th>Ülke ID</th>
                                        <th>Satıcı</th>
                                        <th>Satıcı ID</th>
                                        <th>Döviz Kur</th>
                                        <th>Şirket Payı</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20.05.2022</td>
                                        <td>
                                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                                            HBV000012 Barkod:345325325324444444444444444444
                                        </td>
                                        <td>Eu</td>
                                        <td>Pl48</td>
                                        <td>Elf Karanfil</td>
                                        <td>34324432</td>
                                        <td>$</td>
                                        <td>68,45</td>
                                    </tr>
                                    <!-- Add more data rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="eu" class="tab-pane fade">
                        <br>
                        <div class="x_content">
                            <table id="malldia_eu" class="table table-striped table-bordered dt-responsive"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sipariş Tarihi</th>
                                        <th>Ürün Bilgisi</th>
                                        <th>Bölge ID</th>
                                        <th>Ülke ID</th>
                                        <th>Satıcı</th>
                                        <th>Satıcı ID</th>
                                        <th>Döviz Kur</th>
                                        <th>Şirket Payı</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20.05.2022</td>
                                        <td>
                                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                                            HBV000012 Barkod:34532532532
                                        </td>
                                        <td>Eu</td>
                                        <td>Pl48</td>
                                        <td>Elf Karanfil</td>
                                        <td>34324432tttttttttttt</td>
                                        <td>$</td>
                                        <td>68,45</td>
                                    </tr>
                                    <!-- Add more data rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="usa" class="tab-pane fade">
                        <br>
                        <div class="x_content">
                            <table id="malldia_usa" class="table table-striped table-bordered dt-responsive"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sipariş Tarihi</th>
                                        <th>Ürün Bilgisi</th>
                                        <th>Bölge ID</th>
                                        <th>Ülke ID</th>
                                        <th>Satıcı</th>
                                        <th>Satıcı ID</th>
                                        <th>Döviz Kur</th>
                                        <th>Şirket Payı</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20.05.2022</td>
                                        <td>
                                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                                            HBV000012 Barkod:34532532532
                                        </td>
                                        <td>Eu</td>
                                        <td>Pl48</td>
                                        <td>Elf Karanfil</td>
                                        <td>34324432</td>
                                        <td>$</td>
                                        <td>68,45</td>
                                    </tr>
                                    <!-- Add more data rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="asia" class="tab-pane fade">
                        <br>
                        <div class="x_content">
                            <table id="malldia_asia" class="table table-striped table-bordered dt-responsive"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sipariş Tarihi</th>
                                        <th>Ürün Bilgisi</th>
                                        <th>Bölge ID</th>
                                        <th>Ülke ID</th>
                                        <th>Satıcı</th>
                                        <th>Satıcı ID</th>
                                        <th>Döviz Kur</th>
                                        <th>Şirket Payı</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20.05.2022</td>
                                        <td>
                                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                                            HBV000012 Barkod:34532532532
                                        </td>
                                        <td>Eu</td>
                                        <td>Pl48</td>
                                        <td>Elf Karanfil</td>
                                        <td>34324432</td>
                                        <td>$</td>
                                        <td>68,45</td>
                                    </tr>
                                    <!-- Add more data rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /page content -->




    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Flot -->
    <script>
        $(document).ready(function () {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7],
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9],
        ];
        $("#canvas_dahs").length &&
          $.plot($("#canvas_dahs"), [data1, data2], {
            series: {
              lines: {
                show: false,
                fill: true,
              },
              splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                fill: 0.4,
              },
              points: {
                radius: 0,
                show: true,
              },
              shadowSize: 2,
            },
            grid: {
              verticalLines: true,
              hoverable: true,
              clickable: true,
              tickColor: "#d5d5d5",
              borderWidth: 1,
              color: "#fff",
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
              tickColor: "rgba(51, 51, 51, 0.06)",
              mode: "time",
              tickSize: [1, "day"],
              //tickLength: 10,
              axisLabel: "Date",
              axisLabelUseCanvas: true,
              axisLabelFontSizePixels: 12,
              axisLabelFontFamily: "Verdana, Arial",
              axisLabelPadding: 10,
            },
            yaxis: {
              ticks: 8,
              tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false,
          });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
        $(document).ready(function () {
        $("#world-map-gdp").vectorMap({
          map: "world_en",
          backgroundColor: null,
          color: "#ffffff",
          hoverOpacity: 0.7,
          selectedColor: "#666666",
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ["#E6F2F0", "#149B7E"],
          normalizeFunction: "polynomial",
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
        $(document).ready(function () {
        var icons = new Skycons({
            color: "#73879C",
          }),
          list = [
            "clear-day",
            "clear-night",
            "partly-cloudy-day",
            "partly-cloudy-night",
            "cloudy",
            "rain",
            "sleet",
            "snow",
            "wind",
            "fog",
          ],
          i;

        for (i = list.length; i--; ) icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
        $(document).ready(function () {
        var options = {
          legend: false,
          responsive: false,
        };

        new Chart(document.getElementById("canvas1"), {
          type: "doughnut",
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: ["Symbian", "Blackberry", "Other", "Android", "IOS"],
            datasets: [
              {
                data: [15, 20, 30, 10, 30],
                backgroundColor: [
                  "#BDC3C7",
                  "#9B59B6",
                  "#E74C3C",
                  "#26B99A",
                  "#3498DB",
                ],
                hoverBackgroundColor: [
                  "#CFD4D8",
                  "#B370CF",
                  "#E95E4F",
                  "#36CAAB",
                  "#49A9EA",
                ],
              },
            ],
          },
          options: options,
        });
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script>
        $(document).ready(function () {
        var cb = function (start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $("#reportrange span").html(
            start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
          );
        };

        var optionSet1 = {
          startDate: moment().subtract(29, "days"),
          endDate: moment(),
          minDate: "01/01/2012",
          maxDate: "12/31/2015",
          dateLimit: {
            days: 60,
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            Today: [moment(), moment()],
            Yesterday: [
              moment().subtract(1, "days"),
              moment().subtract(1, "days"),
            ],
            "Last 7 Days": [moment().subtract(6, "days"), moment()],
            "Last 30 Days": [moment().subtract(29, "days"), moment()],
            "This Month": [moment().startOf("month"), moment().endOf("month")],
            "Last Month": [
              moment().subtract(1, "month").startOf("month"),
              moment().subtract(1, "month").endOf("month"),
            ],
          },
          opens: "left",
          buttonClasses: ["btn btn-default"],
          applyClass: "btn-small btn-primary",
          cancelClass: "btn-small",
          format: "MM/DD/YYYY",
          separator: " to ",
          locale: {
            applyLabel: "Submit",
            cancelLabel: "Clear",
            fromLabel: "From",
            toLabel: "To",
            customRangeLabel: "Custom",
            daysOfWeek: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            monthNames: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December",
            ],
            firstDay: 1,
          },
        };
        $("#reportrange span").html(
          moment().subtract(29, "days").format("MMMM D, YYYY") +
            " - " +
            moment().format("MMMM D, YYYY")
        );
        $("#reportrange").daterangepicker(optionSet1, cb);
        $("#reportrange").on("show.daterangepicker", function () {
          console.log("show event fired");
        });
        $("#reportrange").on("hide.daterangepicker", function () {
          console.log("hide event fired");
        });
        $("#reportrange").on("apply.daterangepicker", function (ev, picker) {
          console.log(
            "apply event fired, start/end dates are " +
              picker.startDate.format("MMMM D, YYYY") +
              " to " +
              picker.endDate.format("MMMM D, YYYY")
          );
        });
        $("#reportrange").on("cancel.daterangepicker", function (ev, picker) {
          console.log("cancel event fired");
        });
        $("#options1").click(function () {
          $("#reportrange").data("daterangepicker").setOptions(optionSet1, cb);
        });
        $("#options2").click(function () {
          $("#reportrange").data("daterangepicker").setOptions(optionSet2, cb);
        });
        $("#destroy").click(function () {
          $("#reportrange").data("daterangepicker").remove();
        });
      });
    </script>
    <script>
        const carousel = document.querySelector(".carousel"),
        firstImg = carousel.querySelectorAll("img")[0],
        arrowIcons = document.querySelectorAll(".wrapper i");

      let isDragStart = false,
        isDragging = false,
        prevPageX,
        prevScrollLeft,
        positionDiff;

      const showHideIcons = () => {
        // showing and hiding prev/next icon according to carousel scroll left value
        let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
        arrowIcons[0].style.display =
          carousel.scrollLeft == 0 ? "none" : "block";
        arrowIcons[1].style.display =
          carousel.scrollLeft == scrollWidth ? "none" : "block";
      };

      arrowIcons.forEach((icon) => {
        icon.addEventListener("click", () => {
          let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
          // if clicked icon is left, reduce width value from the carousel scroll left else add to it
          carousel.scrollLeft +=
            icon.id == "left" ? -firstImgWidth : firstImgWidth;
          setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
        });
      });

      const autoSlide = () => {
        // if there is no image left to scroll then return from here
        if (
          carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) >
            -1 ||
          carousel.scrollLeft <= 0
        )
          return;

        positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
        let firstImgWidth = firstImg.clientWidth + 14;
        // getting difference value that needs to add or reduce from carousel left to take middle img center
        let valDifference = firstImgWidth - positionDiff;

        if (carousel.scrollLeft > prevScrollLeft) {
          // if user is scrolling to the right
          return (carousel.scrollLeft +=
            positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff);
        }
        // if user is scrolling to the left
        carousel.scrollLeft -=
          positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
      };

      const dragStart = (e) => {
        // updatating global variables value on mouse down event
        isDragStart = true;
        prevPageX = e.pageX || e.touches[0].pageX;
        prevScrollLeft = carousel.scrollLeft;
      };

      const dragging = (e) => {
        // scrolling images/carousel to left according to mouse pointer
        if (!isDragStart) return;
        e.preventDefault();
        isDragging = true;
        carousel.classList.add("dragging");
        positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
        carousel.scrollLeft = prevScrollLeft - positionDiff;
        showHideIcons();
      };

      const dragStop = () => {
        isDragStart = false;
        carousel.classList.remove("dragging");

        if (!isDragging) return;
        isDragging = false;
        autoSlide();
      };

      carousel.addEventListener("mousedown", dragStart);
      carousel.addEventListener("touchstart", dragStart);

      document.addEventListener("mousemove", dragging);
      carousel.addEventListener("touchmove", dragging);

      document.addEventListener("mouseup", dragStop);
      carousel.addEventListener("touchend", dragStop);

	 //New scripts
    document.getElementById('logout-button').addEventListener('click', (data) => {

        window.location.href = 'https://localhost/cuzdan/login/logout.php';
    });

    </script>

    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->

    <!-- /gauge.js -->


    <div class="jqvmap-label" style="display: none;"></div>
</body>

</html>
@endsection
