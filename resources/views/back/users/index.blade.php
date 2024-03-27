@extends('admin.app')
{{-- @section('content') --}}

@section('content')
<html>

<head>

    {{-- link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    --}}



    <title>Cüzdan Satıcıları</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> --}}
    <style>
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
</head>

<body>
    <form action="{{ route('users.filter') }}" method="GET">
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
    <br>
    <table class="table"  style="overflow-x:auto;">
        <thead>
            <tr>

                <th class="align-middle">Profil</th>
                <th class="align-middle">ID</th>
                <th class="align-middle">Adı Soyadı</th>
                <th class="align-middle">Bölge ID</th>
                <th class="align-middle">Ülke ID</th>
                <th class="align-middle">TC/VKN</th>
                <th class="align-middle">Mail &amp; Şifre</th>
                <th class="align-middle">Adres &amp; İletişim</th>
                <th class="align-middle">Üyelik Tarihi</th>
                <th class="align-middle">Para birimi</th>
                <th class="align-middle">Kota</th>
                <th class="align-middle">Status</th>
                <th class="align-middle">Banka Bilgileri</th>
                <th class="align-middle">Aktivasyon</th>
            </tr>
        </thead>
        <tbody>

            @foreach($users as $key => $user)
            <tr>
                {{-- <td>{{$user->id}}</td> --}}

                <td>
                    {{-- <img src="{{asset('assets/images/' .$user['image_path'])}}" class="rounded-circle img-fluid"
                        style="width: 60px;" alt="..."> --}}


                    <img src="{{asset('assets/images/' .$user['image_path'])}}" class="rounded-circle img-fluid"
                        style="width: 60px;" alt="Avatar" {{-- alt="" style="height:40px; width:40px;" --}}>

                </td>
                <td>{{$user->code}}</td>

                <td class="align-middle">{{$user->last_name}}</td>
                <td class="align-middle">{{$user->region}}</td>
                <td class="align-middle">{{$user->country}}</td>
                <td class="align-middle">{{$user->tc_vkn}}</td>
                <td class="align-middle">{{$user->email}}</td>
                <td class="align-middle">{{$user->address}}</td>
                <td class="align-middle">{{$user->created_at}}</td>

                <td class="align-middle">{{$user->seller_quotes->code}}</td>
                <td class="align-middle">{{$user->seller_quotes->quota_price}}</td>

                <td>
                    <a href="user/{{$user->id}}" class="btn btn-sm btn-{{$user->status ? 'success':'danger'}}">
                        {{$user->status ? 'Aktif':'Pasif'}}
                    </a>
                </td>
                <td>{{$user->bank_name}}</td>
                <td data-label="Aktivasyon">
                    <select id='status' class="sc" style="width: 100px"
                        Onchange="document.location.href='user/{{$user->id}} & {{$user->status ? 'Aktif':'Pasif'}}' ">
                        <option>Onay Bekliyor</option>
                        <option value="1" {{$user->status == '1'?'selected':''}} >Aktif</option>
                        <option value="0" {{$user->status == '0'?'selected':''}}>Pasif</option>
                    </select>

                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip"
                            title='Delete'>Delete</button>

                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


    <div class="d-flex justify-content-center">

        {{ $users->links('back.users.pagination') }}
        {{-- {{ $users->links('vendor.pagination.custom') }} --}}


        {{-- {!! $users->links() !!} --}}


    </div>
    <div class="d-flex justify-content-center">
        {{-- {{ $users->links() }} --}}
    </div>


</body>

</html>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 20px;
        font-family: sans-serif;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table td,
    .table th {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 16px;
    }

    .table th {
        background-color: #bb2782;
        color: #ffffff;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    /*responsive*/

    @media (max-width: 800px) {
        .table thead {
            display: none;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
        }

        .table td {
            text-align: right;
            padding-left: 50%;
            text-align: right;
            position: relative;
        }

        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
        }
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
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
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
