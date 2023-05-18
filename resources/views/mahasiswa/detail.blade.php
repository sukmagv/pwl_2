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
       
        <ul class="list-group list-group-flush">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('storage/' . $mahasiswa->foto) }}" width="240">
          </div>
            <li class="list-group-item"><b>Nim : </b>{{$mahasiswa->nim}}</li>
            <li class="list-group-item"><b>Nama : </b>{{$mahasiswa->nama}}</li>
            <li class="list-group-item"><b>Kelas : </b>{{$mahasiswa->kelas->nama_kelas}}</li>
            <li class="list-group-item"><b>Jenis Kelamin : </b>{{$mahasiswa->jk}}</li>
            <li class="list-group-item"><b>Tempat Lahir : </b>{{$mahasiswa->tempat_lahir}}</li>
            <li class="list-group-item"><b>Tanggal Lahir : </b>{{$mahasiswa->tanggal_lahir}}</li>
            <li class="list-group-item"><b>Alamat : </b>{{$mahasiswa->alamat}}</li>
            <li class="list-group-item"><b>HP : </b>{{$mahasiswa->hp}}</li>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection
