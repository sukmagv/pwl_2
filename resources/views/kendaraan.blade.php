@extends('layouts.template')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">LIST KENDARAAN</h3>

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
            <th>no_pol</th>
            <th>merk</th>
            <th>jenis</th>
            <th>tahun_buat</th>
            <th>warna</th>
          </tr>

          @foreach ($kendaraan as $no => $k)
          <tr>
            <td>{{$k->no_pol}}</td>
            <td>{{$k->merk}}</td>
            <td>{{$k->jenis}}</td>
            <td>{{$k->tahun_buat}}</td>
            <td>{{$k->warna}}</td>
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
