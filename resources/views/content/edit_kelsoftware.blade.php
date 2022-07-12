@extends('layouts.dashboard')
@section('content')


      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item">Bagian Pengerjaan (Form Balasan)</li>
          <li class="breadcrumb-item">Balasan Dari Bag humas</li>
        </ol>
      </nav>

      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">FORM BALASAN</h5>

<!------------------------------------------------IDENTITAS------------------------------------------------------------------->

<!-- NIK NIM-->
      <form method="post" action="/updatekelsoftware" >
      @csrf
       <input type="hidden" name="id" value="{{$software->id}}">
        <div class="row mb-3">
         <label for="inputEmail3" class="col-sm-2 col-form-label">NIK NIM
         </label>
          <div class="col-sm-10">
           <input type="text" class="form-control" name="nik_nim" value="{{$software->NIK_NIM}}">
          </div>
        </div>

<!-------nama----->
        <div class="row mb-3">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Nama
         </label>
          <div class="col-sm-10">
           <input type="text" class="form-control" name="nama" value="{{$software->Nama}}">

          </div>
        </div>

<!--------jenis kelamin---->
          <div class="row mb-3">
           <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
             <select class="form-select" name="jenis_kelamin" value="{{$software->Jenis_kelamin}}" placeholder="Pilih Jenis Kelamin" aria-label="Pilih Jenis Kelamin">
              <option value="Perempuan" {{ ($software-> Jenis_kelamin) == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
              <option value="Laki Laki" {{ ($software-> Jenis_kelamin) == 'Laki Laki' ? 'selected' : ''}}>Laki Laki</option>
             </select>
            </div>
          </div>

<!---------jabatan--->
          <div class="row mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
             <select class="form-select" name="jabatan" value="{{$software->Jabatan}}"placeholder="Pilih Jabatan" aria-label="Pilih Jabatan">
              <option value="Dosen" {{ ($software-> Jabatan) == 'Dosen' ? 'selected' : ''}}>Dosen</option>
              <option value="Staff" {{ ($software-> Jabatan) == 'Staff' ? 'selected' : ''}}>Staff</option>
              <option value="Mahasiswa" {{ ($software-> Jabatan) == 'Mahasiswa' ? 'selected' : ''}}>Mahasiswa</option>
             </select>
            </div>
          </div>

<!-----jurusan--->
           <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
             <div class="col-sm-10">
              <select class="form-select" name="jurusan" value="{{$software->Jurusan}}" placeholder="Pilih Jurusan" aria-label="Jurusan">
               <option value="D3 Optometri" {{ ($software-> Jurusan) == 'D3 Optometri' ? 'selected' : ''}}>D3 Optometri</option>
               <option value="D3 Keperawatan" {{ ($software-> Jurusan) == 'D3 Keperawatan' ? 'selected' : ''}}>D3 Keperawatan</option>
               <option value="S1 Keperawatan" {{ ($software-> Jurusan) == 'S1 Keperawatan' ? 'selected' : ''}}>S1 Keperawatan</option>
               <option value="S1 KESMAS" {{ ($software-> Jurusan) == 'S1 KESMAS' ? 'selected' : ''}}>S1 KESMAS</option>
               <option value="S1 Kebidanan" {{ ($software-> Jurusan) == 'S1 Kebidanan' ? 'selected' : ''}}>S1 Kebidanan</option>
               <option value="S2 Kebidanan" {{ ($software-> Jurusan) == 'S2 Kebidanan' ? 'selected' : ''}}>S2 Kebidanan</option>
               <option value="Profesi Ners" {{ ($software-> Jurusan) == 'Profesi Ners' ? 'selected' : ''}}>Profesi Ners</option>
               <option value="-" {{ ($software-> Jurusan) == '-' ? 'selected' : ''}}>-</option>
              </select>
             </div>
           </div>

<!-----pertanyaan keluhan---->
          <div class="row mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Pertanyaan :</label>
            <div class="col-sm-10">
             <input type="text" class="form-control" name="message" value="{{$software->Pertanyaan}}">
            </div>
          </div>

<!--------di kerjakan oleh-->
           <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Di Kerjakan Oleh </label>
             <div class="col-sm-2">
              <select class="form-select" name="dikerjakan_oleh" value="{{$software->Di_kerjakan_oleh}}">
               <option value="Pak Galih" {{ ($software-> Di_kerjakan_oleh) == 'Pak Galih' ? 'selected' : ''}}>Pak Galih</option>
               <option value="Pak Dadan" {{ ($software-> Di_kerjakan_oleh) == 'Pak Dadan' ? 'selected' : ''}}>Pak Dadan</option>
               <option value="Pak Heri" {{ ($software-> Di_kerjakan_oleh) == 'Pak Heri' ? 'selected' : ''}}>Pak Heri</option>
              </select>
             </div>
           </div>

 <!----- Tanggal di kerjakan----->
           <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Di Kerjakan</label>
             <div class="col-sm-2">
              <input type="date" name="tgl_dikerjakan" value="{{$software->Tgl_Dikerjakan}}">
             </div>
           </div>
<!---------Solusi keluhan---->
            <label for="inputEmail3" class="col-sm-2 col-form-label">Solusi :</label>
              <div class="col-sm-10">
               <div class="dataTable-dropdown">
               </div>
                <textarea class="col-sm-12" name="solusi" rows="10" required="" value="{{$software->Solusi}}" placeholder="Silahkan Masukan Solusi Dari Pertanyaan Keluhan..."></textarea>
              </div>

            
<!---------------Button------------->
             <div class="text-left">
              <button type="submit" class="btn btn-outline-primary">Submit</button>
              <button type="reset" class="btn btn-outline-dark">Reset</button>
             </div>
      </form>
          </div>
        </div>  
      </div>
@endsection