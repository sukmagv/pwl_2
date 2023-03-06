@extends('layouts.template')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">SELAMAT DATANG!!!</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        MY HOBBIES
        <table class="table">
          <tr>
            <th>no</th>
            <th>hobi</th>
            <th>alasan</th>
          </tr>

          @foreach ($hobi as $no => $h)
          <tr>
            <td>{{$h->id}}</td>
            <td>{{$h->hobi}}</td>
            <td>{{$h->alasan}}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection

@push('alert')
    <script>
        alert('SELAMAT DATANG');
    </script>
@endpush
