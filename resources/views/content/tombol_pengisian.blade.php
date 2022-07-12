@extends('layouts.dashboard')
@section('content')


      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item">Bagian Pengerjaan</li>
          <li class="breadcrumb-item">Pilih Ajuan</li>
        </ol>
      </nav>

<!-----keluhan hardware---->
    <div class="col-lg-12">
     <div class="card">
      <div class="card-body">
       <center><h5 class="card-title">SILAHKAN PILIH KEPADA SIAPA AJUAN PERTANYAAN ANDA!</h5></center>

<!-- End Keluhan Hardware -->

<!---------button tambah data & search-------------------->
<br><br>
  <div class="row">
   <div class="col-lg-12">
      <center>
       <a href= "kelit" class="btn btn-success">Bag IT<i class="fas fa-plus-square"></i></a>&emsp;&emsp;
       <a href= "kelhardware" class="btn btn-success">Bag Kaprodi<i class="fas fa-plus-square"></i></a>&emsp;&emsp;
       <a href= "kelsoftware" class="btn btn-success">Bag Humas<i class="fas fa-plus-square"></i></a>&emsp;&emsp;
       <a href= "kelsistem" class="btn btn-success">Bag Kepegawaian<i class="fas fa-plus-square"></i></a>&emsp;&emsp;
       <a href= "kelpddikti" class="btn btn-success">Bag Kemahasiswaan<i class="fas fa-plus-square"></i></a>&emsp;&emsp;
       <a href= "kelpus" class="btn btn-success">Bag Perpustakaan<i class="fas fa-plus-square"></i></a>
       </center>
        <br><br><br><br>
   </div>
  </div>
      </div>
     </div>
    </div>
@endsection
