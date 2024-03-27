@extends('admin.app')
@section('content')

{{-- @section('content') --}}

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


    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" /> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

    <br>

    <div class="right_col" role="main" style="min-height: 836px;">


            <br>


            <div id="exTab1" class="col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs flex-row">

                    <li class="nav-item active">
                        <a data-toggle="tab" href="#tr" aria-expanded="false">TR Malldia</a>

                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <li class="nav-item"><a data-toggle="tab" href="#eu" aria-expanded="true">EU
                            Malldia</a>


                    </li>

                </ul>

            </div>


            <div class="tab-content">




                <div id="tr" class="tab-pane fade">
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Tanımlı Kotalar</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table class="table table-hover" style="overflow-x:auto;">
                                        <thead>
                                            <tr>
                                                <th>Bölgeler</th>
                                                <th>Kota Tanımı</th>
                                                <th>Düzenle</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($kampanyaKotalars as $key => $kampanya )

                                            <tr>

                                                <td>{{$kampanya->region}}</td>
                                                <td>{{$kampanya->quota_price}}</td>
                                                <td><a href='#' class='btn  edit1' data-id='{{ $kampanya->id }}'
                                                        data-region='{{ $kampanya->region }}'
                                                        data-quota_price='{{ $kampanya->quota_price }}'> <i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                </td>
                                            </tr>


                                            @endforeach

                                        </tbody>
                                    </table>
                                    {!! $kampanyaKotalars->links() !!}
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editmodal1" tabindex="-1" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Edit </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                                @endif
                                            <form action="{{url('update_kampanya')}}" id="editForm1">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" id="memids" name="id">
                                                <div class="mb-3">
                                                    <label for="region">Bölgeler</label>
                                                    <input type="text" name="region" id="region1" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="quota_price">Kota Tanımı</label>
                                                    <input type="text" name="quota_price" id="quota_price1"
                                                        class="form-control">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Update</button>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3 class="text-center">Kota Grafiği</h3>
                            <label>TR Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>

                            <label>EU Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>

                            <label>USA Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>

                            <label>Asya Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="eu" class="tab-pane fade active in">
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Tanımlı Kotalar</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table class="table table-hover" style="overflow-x:auto;">
                                        <thead>
                                            <tr>
                                                <th>Bölgeler</th>
                                                <th>Kota Tanımı</th>
                                                <th>Düzenle</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kampanyaKotalars as $key => $kampanya )

                                            <tr>

                                                <td>{{$kampanya->region}}</td>
                                                <td>{{$kampanya->quota_price}}</td>

                                                <td><a href='#' class=' edit' data-id='{{ $kampanya->id }}'
                                                        data-region='{{ $kampanya->region }}'
                                                        data-quota_price='{{ $kampanya->quota_price }}'> <i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                </td>

                                            </tr>


                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $kampanyaKotalars->links() !!}
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Edit </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        @if(session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                            @endif
                                        <div class="modal-body">

                                            <form action="{{url('update_kampanya')}}" id="editForm">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" id="memid" name="id">
                                                <div class="mb-3">
                                                    <label for="region">Bölgeler</label>
                                                    <input type="text" name="region" id="region" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="quota_price">Kota Tanımı</label>
                                                    <input type="text" name="quota_price" id="quota_price"
                                                        class="form-control">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Update</button>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <script type="text/javascript">
                                $(document).ready(function(){

                                                    $.ajaxSetup({
                                                        headers: {
                                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                        }
                                                    });

                                                    showMember();


                                                    $(document).on('click', '.edit', function(event){
                                                        event.preventDefault();
                                                        var id = $(this).data('id');
                                                        var region = $(this).data('region');
                                                        var quota_price = $(this).data('quota_price');
                                                        $('#editmodal').modal('show');
                                                        $('#region').val(region);
                                                        $('#quota_price').val(quota_price);
                                                        $('#memid').val(id);
                                                    });

                                                    $(document).on('click', '.edit1', function(event){
                                                    event.preventDefault();
                                                    var id = $(this).data('id');
                                                    var region = $(this).data('region');
                                                    var quota_price = $(this).data('quota_price');
                                                    $('#editmodal1').modal('show');
                                                    $('#region1').val(region);
                                                    $('#quota_price1').val(quota_price);
                                                    $('#memids').val(id);
                                                    });



                                                    $('#editForm').on('submit', function(e){
                                                        e.preventDefault();
                                                        var form = $(this).serialize();
                                                        var url = $(this).attr('action');

                                                        $.post(url,form,function(data){
                                                            $('#editmodal').modal('hide');
                                                            showMember();
                                                            window.location.reload();

                                                        })
                                                    });



                                                    $('#editForm1').on('submit', function(e){
                                                        e.preventDefault();
                                                        var form = $(this).serialize();
                                                        var url = $(this).attr('action');

                                                        $.post(url,form,function(data){
                                                            $('#editmodal1').modal('hide');
                                                            showMember();
                                                            window.location.reload();

                                                        })
                                                    });




                                                });

                                                function showMember(){
                                                    $.get("{{ URL::to('show') }}", function(data){
                                                        $('#memberBody').empty().html(data);
                                                    })
                                                }

                            </script>

                        </div>
                        <div class="col-sm-8">
                            <h3 class="text-center">Kota Grafiği</h3>
                            <label>TR Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>

                            <label>EU Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>

                            <label>USA Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>

                            <label>Asya Kota</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 70%">
                                    70%
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

    </div>



</body>

</html>
@endsection
