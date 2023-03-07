@extends('layouts.template')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">MY FAMILY</h3>

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
        <table class="table">
          <tr>
            <th>no</th>
            <th>status</th>
            <th>nama</th>
            <th>umur</th>
            <th>daerah_asal</th>
            <th>pekerjaan</th>
          </tr>

          @foreach ($keluarga as $no => $k)
          <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->status}}</td>
            <td>{{$k->nama}}</td>
            <td>{{$k->umur}}</td>
            <td>{{$k->daerah_asal}}</td>
            <td>{{$k->pekerjaan}}</td>
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
