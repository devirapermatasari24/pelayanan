@extends('layouts.dashboard')
@section('content')

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item">Edit Semua Pengguna</li>
        </ol>
      </nav>

      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">EDIT KELUHAN HARDWARE</h5>

<!------------------------------------------------IDENTITAS------------------------------------------------------------------->

<!-- No-->
      <form method="post" action="/updatekelhardware">
      @csrf
       <input type="hidden" name="id" value="{{$guna->id}}">
        <div class="row mb-3">
         <label for="inputEmail3" class="col-sm-2 col-form-label">NIK NIM
         </label>
          <div class="col-sm-10">
           <input type="text" class="form-control" name="nik_nim" value="{{$guna->No}}">
          </div>
        </div>

<!-------nama----->
        <div class="row mb-3">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
           <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="{{$guna->Nama_pengguna}}">
           </div>
        </div>

<!---------Data Lainnya--->
          <div class="row mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Data Lainnya</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="{{$guna->Data_Lainnya}}">
           </div>
        </div>

<!-----Hak Akses Sebagai--->
           <div class="row mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Hak Akses Sebagai</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="{{$guna->Hak_Akses}}">
           </div>
        </div>

<!-----Aksi---->
        <div class="row mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Aksi</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="{{$guna->Aksi}}">
           </div>
        </div>

<!---------------Button------------->
             <div class="text-left">
              <button type="submit" class="btn btn-outline-primary">Submit</button>
              </button>
             </div>
      </form>
          </div>
        </div>  
      </div>
@endsection
