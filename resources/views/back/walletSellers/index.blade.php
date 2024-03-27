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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>



    <style>
        {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 20px;
            font-family: sans-serif;
        }


        table {
            display: block;
            max-width: -moz-fit-content;
            max-width: fit-content;
            margin: 0 auto;
            overflow-x: auto;
            white-space: nowrap;
        }

        .upload {
            width: 70px;
            position: relative;
            margin: auto;
        }

        .upload img {
            border-radius: 50%;
            border: 2px solid #eaeaea;
        }

        .upload .round {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #bb2782;
            width: 29px;
            height: 29px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
        }

        .upload .round input[type="file"] {
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }

        input[type="file"]::-webkit-file-upload-button {
            cursor: pointer;
        }

        .column {
            display: flex;
            column-gap: 15px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav .flex-start input {
            height: 40px;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 10px;
        }

        nav .flex-end input {
            height: 40px;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 10px;
        }

        .sc {
            height: 30px;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 5px;
        }

        .ab {
            background-color: #bb2782;
            border: none;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 6px;
        }

        .ab:hover {
            opacity: 0.7;
        }
    </style>

</head>

<body>
    <br>
    <div class="right_col" role="main" style="min-height: 836px;">
        <h2>Cüzdan Satıcıları</h2>
        <br>
        <form action="{{ route('walletSellers.filter') }}" method="GET">
            <nav>
                <div class="flex-start">
                    <input type="text" name="last_name" value="{{ $last_name ?? '' }}" placeholder="Last Name">

                    <input type="text" name="email" value="{{ $email ?? '' }}" placeholder="Email">
                </div>
                <div class="flex-end">
                    <input name="bank_name" value="{{ $bank_name ?? '' }}" type="text" placeholder="Banka">
                    <input name="address" value="{{ $address ?? '' }}" type="text" placeholder="Adres">
                    <button class="ab">Ara</button>
                </div>
            </nav>

        </form>

        <br>
        <div class="coloor " id="doublescrolls">
            <table {{-- class="table" --}} class="table table-striped table-bordered dt-responsive  "
                style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col" width="5%">ID</th>
                        <th>Profil</th>
                        <th>Adı Soyadı</th>
                        <th>Bölge ID</th>
                        <th>Ülke ID</th>
                        <th>TC/VKN</th>
                        <th>Mail &amp; Şifre</th>
                        <th>Adres &amp; İletişim</th>
                        <th>Üyelik Tarihi</th>
                        <th>Para birimi</th>
                        <th>Kota</th>
                        <th>Status</th>
                        <th>Banka Bilgileri</th>
                        <th scope="col" width="25%">Aktivasyon</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="color" style="width: 200px; white-space: nowrap; overflow-x: scroll;">
                    @if (!empty($users) && $users->count())
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $user->code }}</td>

                        <td>
                            <img src="{{ asset('assets/images/' . $user['image_path']) }}"
                                class="rounded-circle img-fluid" style="width: 100px;" alt="Avatar">
                        </td>

                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->region }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->tc_vkn }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->created_at }}</td>

                        {{-- @foreach ($user->seller_quotes as $quote)
                        <td> {{$quote->code}}</td>
                        @endforeach --}}

                        <td>{{ $user->seller_quotes->code }}</td>

                        <td>{{ $user->seller_quotes->quota_price }}</td>

                        <td>
                            <a href="user/{{ $user->id }}"
                                class="btn btn-sm btn-{{ $user->status ? 'success' : 'danger' }}">
                                {{ $user->status ? 'Aktif' : 'Pasif' }}
                            </a>
                        </td>
                        <td>{{ $user->bank_name }}</td>
                        <td data-label="Aktivasyons">



                            {{-- <select id='status' class="sc" style="width: 100px"
                                Onchange="document.location.href='user/{{$user->id}} & {{$user->status ? 'Aktif':'Pasif'}}' ">
                                <option>Onay Bekliyor</option>
                                <option value="1" {{$user->status == '1'?'selected':''}} >Aktif</option>
                                <option value="0" {{$user->status == '0'?'selected':''}}>Pasif</option>
                            </select> --}}

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs  btn-flat show_confirm" data-toggle="tooltip"
                                    title='Delete'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="20"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg></button>


                                <a href='#' class=' edit' data-id='{{ $user->id }}'
                                    data-first_name='{{ $user->first_name }}' data-last_name='{{ $user->last_name }}'
                                    data-email='{{ $user->email }}' data-address='{{ $user->address }}'> <i
                                        class="fa-solid fa-pen-to-square"></i></a>

                            </form>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="10">There are no data.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">

            {{ $users->links() }}
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="modal-body">
                    <form action="{{ url('updateinfo')}}" {{-- action="{{ url('update_address', auth()->id()) }}" --}}
                        id="editForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="memid" name="id" value=" {{$user->id}}">



                        <div class="mb-3">
                            <label>Ad</label>
                            <input name="first_name" id="first_name" class="form-control" type="text"
                                value="{{ $user->first_name }}" required />
                        </div>
                        <div class="mb-3">
                            <label>Soyad</label>
                            <input type="text" id="last_name" value="{{ $user->last_name }}" class="form-control" required
                                name="last_name" />
                        </div>

                        <div class="mb-3">
                            <label for="email">Mail</label>
                            <input type="text" name="email" id="email" value="{{ $user->email }}" class="form-control">
                        </div>



                        <div class="mb-3">
                            <label for="email">Address</label>
                            <input class="form-control" type="text" name="address" id="address"
                                value="{{ $user->address }}" class="form-control">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                showMember();


                $(document).on('click', '.edit', function(event) {
                    event.preventDefault();
                    var id = $(this).data('id');
                    var first_name = $(this).data('first_name');
                    var last_name = $(this).data('last_name');
                    var region = $(this).data('region');
                    var email = $(this).data('email');
                    var address = $(this).data('address');
                    $('#editmodal').modal('show');
                    $('#first_name').val(first_name);
                    $('#last_name').val(last_name);
                    // $('#region').val(region);
                    $('#email').val(email);
                    $('#address').val(address);
                    $('#memid').val(id);

                });


                $('#editForm').on('submit', function(e) {
                    e.preventDefault();
                    var form = $(this).serialize();
                    var url = $(this).attr('action');



                    $.post(url, form, function(data) {
                        $('#editmodal').modal('hide');


                        showMember();
                        window.location.reload();

                    })

                });

            });


            function showMember() {
                $.get("{{ URL::to('show') }}", function(data) {
                    $('#memberBody').empty().html(data);
                })
            }
    </script>


</body>

</html>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
</script>


@endsection
