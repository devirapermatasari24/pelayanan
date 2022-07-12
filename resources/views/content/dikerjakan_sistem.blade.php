@extends('layouts.dashboard')
@section('content')

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item">Pengumpulan Data</li>
      <li class="breadcrumb-item active">Sistem</li>
    </ol>
  </nav>

<!-----------------------------Button Tambah Data & Search--------------------->
  <div class="row">
   <div class="col-lg-12">
    <div class="card">
     <div class="card-body">
      <h5 class="card-title">Data Keluhan (SISTEM)</h5>
       <a href= "kelsistem" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
        <form action="/cari2" method="GET">
         <div class="dataTable-top">
          <div class="dataTable-search">
           <input class="dataTable-input" placeholder="Search..." type="search" name="search">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
         </div>
        </form>

<!------------------------------ Bordered Table -------------------------->
  <div class="table-responsive">
   <table class="table table-bordered" width="300px">
    <thead>
     <tr>
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">Sudah/Belum Dikerjakan</th>
      <th scope="col">NIM/NID</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Pertanyaan</th>
      <th scope="col">Dikerjakan Oleh</th>
      <th scope="col">Tanggal Dikerjakan</th>
      <th scope="col">Solusi</th>
     </tr>
    </thead>
    <tbody>
     <?php $i=0 ?>
     @foreach ($sistem as $index => $sis)
      <tr>
       <th scope="row">{{ $index + $sistem -> firstItem()}}</th>
        <td>
        <form action="/deletekelsistem/{{$sis->id}}" method="post">
         <a class="btn btn-primary btn-sm" href="/editkelsistem/{{$sis->id}}">Edit</a>
         @csrf
         <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')">Delete
         </button>
        </form>
       </td>
       <td>
          <center>
             @if($sis -> Status == 'Sudah Dikerjakan') 
                {{$sis -> Status}}
               <a class="btn btn-primary btn-sm" href="/editkelsistem/Batal/{{$sis->id}}">Batal</a>
             @else
               <a class="btn btn-primary btn-sm" href="/editkelsistem/Status/{{$sis->id}}">Status</a>
             @endif
          </center>
      </td>
       <td>{{$sis->NIK_NIM}}</td>
       <td>{{$sis->Nama}}</td>
       <td>{{$sis->Jenis_kelamin}}</td>
       <td>{{$sis->Jabatan}}</td>
       <td>{{$sis->Jurusan}}</td>
       <td>{{$sis->Pertanyaan}}</td>
       <td>{{$sis->Di_kerjakan_oleh}}</td>
       <td>{{$sis->Tgl_Dikerjakan}}</td>
       <td>{{$sis->Solusi}}</td>
     </tr>
     @endforeach
    </tbody>
   </table>
  </div>
  <br>
      <div>
        showing
        {{$sistem->firstItem()}}
        to
        {{$sistem->lastItem()}}
        of
        {{$sistem->total()}}
        entries
      </div>
      <br>
        <div class="pull-left">
          {{ $sistem->links()}}
        </div>

<!------------------------- End Bordered Table --------------------------->

<!---------------------------Pagination----------------------------------->
    <br>
     </div>
    </div>
   </div>
  </div>
@endsection