@extends('layouts.dashboard')
@section('content')

@if(Auth()->user()->name=='dedev')
@elseif(Auth()->user()->name=='Ujang')
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item">Pengumpulan Data</li>
      <li class="breadcrumb-item active">Humas</li>
    </ol>
  </nav>

<!-------------------Button tambah data & search--------------->
 <div class="row">
    <div class="col-lg-12">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pertanyaan Ajuan Ke HUMAS</h5>
               <a href= "tombol_pengisian" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                <form action="/cari1" method="GET">
                 <div class="dataTable-top">
                  <div class="dataTable-search">
                   <input class="dataTable-input" placeholder="Search..." type="search" name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
                 </div>
                </form>

<!--------------------------- Bordered Table ---------------------->
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
                      @if(Auth()->user()->name=='dedev')
                      <th scope="col">Dikerjakan Oleh</th>
                      @endif
                      <th scope="col">Tanggal Input</th>
                      <th scope="col">Solusi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0 ?>
                    @foreach ($software as $index => $soft)
                    <tr>
                     <th scope="row">{{ $index + $software -> firstItem()}}</th>
                      
                      <td>
                        <form action="/deletekelsoftware/{{$soft->id}}" method="post">
                          <a class="btn btn-primary btn-sm" href="/editkelsoftware/{{$soft->id}}">Balas</a>&emsp;
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Anda Yakin Akan Menolak Pesan Ini?')">Tolak</button>
                        </form>
                      </td>
                      <td>
                    <center>
                       @if($soft-> Status == 'Sudah Dikerjakan') 
                        {{$soft -> Status}}
                         <a class="btn btn-primary btn-sm" href="/editkelsoftware/Batal/{{$soft->id}}">Batal</a>
                       @else
                        <a class="btn btn-primary btn-sm" href="/editkelsoftware/Status/{{$soft->id}}">Status</a>
                       @endif
                    </center>
                      </td>
                      <td>{{$soft->NIK_NIM}}</td>
                      <td>{{$soft->Nama}}</td>
                      <td>{{$soft->Jenis_kelamin}}</td>
                      <td>{{$soft->Jabatan}}</td>
                      <td>{{$soft->Jurusan}}</td>
                      <td>{{$soft->Pertanyaan}}</td>
                      @if(Auth()->user()->name=='dedev')
                      <td>{{$soft->Di_kerjakan_oleh}}</td>
                      @endif
                      <td>{{$soft->Tgl_Dikerjakan}}</td>
                      <td>{{$soft->Solusi}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
      <br>
      <div>
        showing
        {{$software->firstItem()}}
        to
        {{$software->lastItem()}}
        of
        {{$software->total()}}
        entries
      </div>
      <br>
        <div class="pull-left">
          {{ $software->links()}}
        </div>
<!---------------------- End Bordered Table ------------------------>

<!-----------------------------Pagination------------------------------------>
  <br>
 
     </div>
    </div>
   </div>
  </div>

@endif
@endsection