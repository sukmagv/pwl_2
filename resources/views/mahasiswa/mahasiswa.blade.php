@extends('layouts.template')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DATA MAHASISWA</h3>

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
        <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Add Data</a>
        <table class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>HP</th>
            <th>Action</th>
          </tr>
          </thead>

          <tbody>
          @if($mhs->count()>0)
                @foreach ($mhs as $i => $m)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nama}}</td>
                    <td><img src="{{ asset('storage/' . $m->foto) }}" alt="{{ $m->nama }}" width="50"></td>
                    <td>{{$m->kelas->nama_kelas}}</td>
                    <td>{{$m->jk}}</td>
                    <td>{{$m->tempat_lahir}}</td>
                    <td>{{$m->tanggal_lahir}}</td>
                    <td>{{$m->alamat}}</td>
                    <td>{{$m->hp}}</td>
                    <td>
                      <a href="{{url('/mahasiswa/'. $m->id)}}"
                        class="btn btn-sm btn-primary">Show</a>

                      <a href="{{url('/mahasiswa/'. $m->id.'/khs/')}}"
                        class="btn btn-sm btn-secondary">KHS</a>

                      <a href="{{url('/mahasiswa/'. $m->id.'/edit/')}}"
                      class="btn btn-sm btn-warning">Edit</a>

                      <form method="POST" action="{{url('/mahasiswa/'.$m->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              @else
                <tr><td colspan="6" class="text-center">Data Tidak Ada</td></tr>
              @endif
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection
