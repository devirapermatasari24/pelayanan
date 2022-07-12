@extends('layouts.dashboard')
@section('content')

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item">Pengumpulan Data</li>
      <li class="breadcrumb-item active">Pddikti</li>
    </ol>
  </nav>

<!---------------------------Button Tambah Data & Search------------------------->
  <div class="row">
   <div class="col-lg-12">
    <div class="card">
     <div class="card-body">
      <h5 class="card-title">Data Keluhan (PDDIKTI)</h5>
       <a href= "kelpddikti" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
        <form action="/cari3" method="GET">
         <div class="dataTable-top">
          <div class="dataTable-search">
           <input class="dataTable-input" placeholder="Search..." type="search" name="search">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
         </div>
        </form>

<!------------------------------------- Bordered Table --------------------------------->
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
      @foreach ($pddikti as $index => $pd)
      <tr>
       <th scope="row">{{ $index + $pddikti -> firstItem()}}</th>
        <td>
        <form action="/deletekelpddikti/{{$pd->id}}" method="post">
         <a class="btn btn-primary btn-sm" href="/editkelpddikti/{{$pd->id}}">Edit</a>
         @csrf
         <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')">Delete
         </button>
        </form>
       </td>
       <td>
       <center>
             @if($pd-> Status == 'Sudah Dikerjakan') 
                {{$pd->Status}}
               <a class="btn btn-primary btn-sm" href="/editkelpddikti/Batal/{{$pd->id}}">Batal</a>
             @else
               <a class="btn btn-primary btn-sm" href="/editkelpddikti/Status/{{$pd->id}}">Status</a>
             @endif
          </center>
       </td>
       <td>{{$pd->NIK_NIM}}</td>
       <td>{{$pd->Nama}}</td>
       <td>{{$pd->Jenis_kelamin}}</td>
       <td>{{$pd->Jabatan}}</td>
       <td>{{$pd->Jurusan}}</td>
       <td>{{$pd->Pertanyaan}}</td>
       <td>{{$pd->Di_kerjakan_oleh}}</td>
       <td>{{$pd->Tgl_Dikerjakan}}</td>
       <td>{{$pd->Solusi}}</td>
     </tr>
     @endforeach
    </tbody>
   </table>
  </div>
  <br>
      <div>
        showing
        {{$pddikti->firstItem()}}
        to
        {{$pddikti->lastItem()}}
        of
        {{$pddikti->total()}}
        entries
      </div>
      <br>
        <div class="pull-left">
          {{ $pddikti->links()}}
        </div>
<!--------------------------------- End Bordered Table ---------------------------------->

<!---------------------------------Pagination-------------------------------------->
  <br>
    </div>
   </div>
  </div>
@endsection