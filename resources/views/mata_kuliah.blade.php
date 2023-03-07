@extends('layouts.template')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">MATA KULIAH</h3>

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
            <th>kode_mk</th>
            <th>mata_kuliah</th>
            <th>semester</th>
            <th>sks</th>
            <th>jam</th>
            <th>nilai</th>
            <th>dosen</th>
          </tr>

          @foreach ($mata_kuliah as $no => $m)
          <tr>
            <td>{{$m->kode_mk}}</td>
            <td>{{$m->mata_kuliah}}</td>
            <td>{{$m->semester}}</td>
            <td>{{$m->sks}}</td>
            <td>{{$m->jam}}</td>
            <td>{{$m->nilai}}</td>
            <td>{{$m->dosen}}</td>
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
