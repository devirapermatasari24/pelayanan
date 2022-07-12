@extends('layouts.dashboard')
@section('content')

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item">Profil</li>
      <li class="breadcrumb-item active">Semua Pengguna</li>
    </ol>
  </nav>

<!---------button tambah data & search-------------------->
  <div class="row">
   <div class="col-lg-12">
    <div class="card">
     <div class="card-body">
      <h5 class="card-title">DATA SEMUA PENGGUNA</h5>
       <a href= "kelhardware" class="btn btn-success">Tambah Baru <i class="fas fa-plus-square"></i></a>
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
     <th scope="col">Nama Pengguna</th>
     <th scope="col">Data lainnya</th>
     <th scope="col">Hak Akses Sebagai</th>
     <th scope="col">Aksi</th>
    </tr>
    </thead>
   </table>
  </div>
    
<!---------------------- End Bordered Table ------------------------>

<!-----------------------------Pagination------------------------------------>
  <br>
 
     </div>
    </div>
   </div>
  </div>
@endsection