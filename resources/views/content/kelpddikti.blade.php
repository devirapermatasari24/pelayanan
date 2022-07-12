@extends('layouts.dashboard')
@section('content')


<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item">Bagian Pengerjaan</li>
          <li class="breadcrumb-item">Pddikti</li>
        </ol>
      </nav>

<!-----keluhan hardware---->
    <div class="col-lg-12">

     <div class="card">
      <div class="card-body">
       <h5 class="card-title">FORM KELUHAN PDDIKTI</h5>

<!-- End Keluhan Hardware -->

<!-- NIM NIK-->
        <form method="post" action="/simpankelpddikti">
        @csrf
         <div class="form-row">
         <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">NIM/NID</label>
           <div class="col-sm-10">
            <input type="text" class="form-control" name="nik_nim" id="nik_nim" placeholder=" Masukan Nomor Induk Mahasiswa /Nomor Induk Dosen">
           </div>
         </div>

<!--------nama---->
          <div class="row mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
             <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama">
            </div>
          </div>

<!------Jenis kelamin--->
           <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
             <div class="col-sm-10">
              <select class="form-select" name="jenis_kelamin" placeholder="Pilih Jenis Kelamin" aria-label="Pilih Jenis Kelamin">
               <option selected="">Pilih Jenis Kelamin</option>
               <option value="Perempuan">Perempuan</option>
               <option value="Laki Laki">Laki Laki</option>
               </select>
             </div>
           </div>


<!-------Jabatan---->   
           <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
             <div class="col-sm-10">
              <select class="form-select" name="jabatan" placeholder="Pilih Jabatan" aria-label="Pilih Jabatan">
               <option selected="">Pilih Jabatan</option>
               <option value="Dosen">Dosen</option>
               <option value="Staff">Staff</option>
               <option value="Mahasiswa">Mahasiswa</option>
              </select>
             </div>
           </div>

<!-----jurusan--->
           <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
             <div class="col-sm-10">
              <select class="form-select" name="jurusan" placeholder="Pilih Jurusan" aria-label="Jurusan">
               <option selected="">Pilih Jurusan</option>
               <option value="D3 Optometri">D3 Optometri</option>
               <option value="D3 Keperawatan">D3 Keperawatan</option>
               <option value="S1 Keperawatan">S1 Keperawatan</option>
               <option value="S1 KESMAS">S1 KESMAS</option>
               <option value="S1 Kebidanan">S1 Kebidanan</option>
               <option value="S2 Kebidanan">S2 Kebidanan</option>
               <option value="Profesi Ners">Profesi Ners</option>
               <option value="-">-</option>
              </select>
             </div>
           </div>

<!-----pertanyaan keluhan---->
            <div class="row mb-3">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Pertanyaan :</label>
              <div class="col-sm-10">
               <div class="dataTable-dropdown">
               </div>
                <textarea class="col-sm-12" name="message" rows="10" required="" placeholder="Silahkan Masukan Pertanyaan mengenai Keluhan..."></textarea>
              </div>
            </div>

<!--------di kerjakan oleh-->
            <div class="row mb-3">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Di Kerjakan Oleh </label>
              <div class="col-sm-2">
               <select class="form-select" name="dikerjakan_oleh" >
                <option value="Pak Galih" selected="">Pak Galih</option>
                <option value="Pak Dadan">Pak Dadan</option>
                <option value="Pak Heri">Pak Heri</option>
               </select>
              </div>
            </div>

 <!----- Tanggal di kerjakan----->
            <div class="row mb-3">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Di Kerjakan</label>
              <div class="col-sm-2">
               <input type="date" name="tgl_dikerjakan">
              </div>
            </div>

<!---------Solusi keluhan---->
            <div class="row mb-3">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Solusi :</label>
              <div class="col-sm-10">
               <div class="dataTable-dropdown">
               </div>
                <textarea class="col-sm-12" name="solusi" rows="10" required="" placeholder="Silahkan Masukan Solusi Dari Pertanyaan Keluhan..."></textarea>
              </div>
            </div>
<!-------------Button---------->
             <div class="text-left">
              <button type="submit" class="btn btn-outline-primary">Submit</button>
              <button type="reset" class="btn btn-outline-dark">Reset</button>
             </div>
      </form>
      </div>
     </div>
    </div>
@endsection
