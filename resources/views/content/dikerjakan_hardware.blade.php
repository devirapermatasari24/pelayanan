@extends('layouts.dashboard')
@section('content')

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item">Pengumpulan Data</li>
      <li class="breadcrumb-item active">Hardware</li>
    </ol>
  </nav>

<!---------button tambah data & search-------------------->
  <div class="row">
   <div class="col-lg-12">
    <div class="card">
     <div class="card-body">
      <h5 class="card-title">Data Keluhan (HARDWARE)</h5>
       <a href= "kelhardware" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
        <form action="/cari" method="GET">
         <div class="dataTable-top">
          <div class="dataTable-search">
           <input class="dataTable-input" placeholder="Search..." type="search" name="search">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
         </div>
        </form>
                
<!------------- Bordered Table ---------------------------->
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
      @foreach ($hardware as $index => $data)
      <tr>
       <th scope="row">{{ $index + $hardware -> firstItem()}}</th>
        <td>
         <form action="/deletekelhardware/{{$data->id}}" method="post">
         <a class="btn btn-primary btn-sm" href="/editkelhardware/{{$data->id}}">Edit
         </a>
         @csrf
         <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')">Delete
         </button>
         </form>
        </td>
        <td>
          <center>
             @if($data-> Status == 'Sudah Dikerjakan') 
                {{$data->Status}}
               <a class="btn btn-primary btn-sm" href="/editkelhardware/Batal/{{$data->id}}">Batal</a>
             @else
               <a class="btn btn-primary btn-sm" href="/editkelhardware/Status/{{$data->id}}">Status</a>
             @endif
          </center>
        </td>
        <td>{{$data->NIK_NIM}}</td>
        <td>{{$data->Nama}}</td>
        <td>{{$data->Jenis_kelamin}}</td>
        <td>{{$data->Jabatan}}</td>
        <td>{{$data->Jurusan}}</td>
        <td>{{$data->Pertanyaan}}</td>
        <td>{{$data->Di_kerjakan_oleh}}</td>
        <td>{{$data->Tgl_Dikerjakan}}</td>
        <td>{{$data->Solusi}}</td>
      </tr>
      @endforeach
     </tbody>
   </table>
  </div>
      <br>
      <div>
        showing
        {{$hardware->firstItem()}}
        to
        {{$hardware->lastItem()}}
        of
        {{$hardware->total()}}
        entries
      </div>
      <br>
        <div class="pull-left">
          {{ $hardware->links()}}
        </div>

<!---------------------- End Bordered Table ------------------------>

<!-----------------------------Pagination------------------------------------>
  <br>
 
     </div>
    </div>
   </div>
  </div>
@endsection