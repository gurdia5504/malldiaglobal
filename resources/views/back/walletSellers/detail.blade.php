

@extends('admin.app')

@section('content')
<br>
<div class="card">
    <div class="card-body">
       
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Référence</th>
                    <th>Total</th>
                    <th>date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               @foreach($users as $key => $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->email }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div id="detail" class="modal-content">

        </div>
    </div>
</div>

@endsection

@push('scripts')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(() => {
    $('a').click(e => {
      let that = e.currentTarget;
      e.preventDefault();
      $.ajax({
        method: $(that).attr('method'),
        url: $(that).attr('href'),
        data: $(that).serialize()
      })
      .done((data) => {
        $('#detail').html(data);
        $('.modal').modal('show');
      })
      .fail((data) => {
        console.log(data);
      });
    });
  });

</script>

@endpush
