@extends('layouts.dashboard')
@section('content')

<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item">Manajemen Permasalahan</li>
          <li class="breadcrumb-item">Form Keluhan</li>
        </ol>
      </nav>


 <div class="card">
            <div class="card-body">
              <h5 class="card-title">FORM LAMAN KELUHAN USER</h5>

              <!-- Horizontal Form -->
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">NIK/NIM</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                  </div>
                  <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">

                </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-select" placeholder="Pilih Jenis Kelamin" aria-label="Pilih Jenis Kelamin">
                      <option selected="">Pilih Jenis Kelamin</option>
                      <option value="1">Perempuan</option>
                      <option value="2">Laki Laki</option>
                    </select>
                  </div>
                </div>
               
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Jabatan/Pekerjaan</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                      <label class="form-check-label" for="gridRadios1">
                        Dosen
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Staff
                      </label>
                    </div>
                    <div class="form-check ">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                      <label class="form-check-label" for="gridRadios3">
                        Mahasiswa
                      </label>

                      <select class="form-select" placeholder="Pilih Jenis Kelamin" aria-label="Pilih Jenis Kelamin">
                      <option selected="">Pilih Jurusan</option>
                       <option value="2">D3 Optometri</option>
                       <option value="2">D3 Keperawatan</option>
                      <option value="1">S1 Keperawatan</option>
                      <option value="2">S1 KESMAS</option>
                      <option value="2">S1 Kebidanan</option>
                      <option value="2">S2 Kebidanan</option>
                      <option value="2">Profesi Ners</option>
                    </select>
                    </div>
                  </div>
                  <!-----pertanyaan keluhan---->
              <h5 class="card-title">PERTANYAAN DAN JAWABAN</h5>

              <div class="dataTable-bottom">
                <div class="dataTable-info">Pertanyaan : </div>
                <div class="dataTable-dropdown">
                
           </div>
                <textarea class="form-control" name="message" rows="10" required=""></textarea>
            </div>
              </div>
              </div>

<!--------di kerjakan oleh-->
              <div class="dataTable-bottom">
                <div class="dataTable-info">Di Kerjakan Oleh : </div>
                <div class="dataTable-dropdown">
                <label>
                <select class="dataTable-selector">
                <option value="pak dadang">Pak Dadan</option>
                <option value="pak galih" selected="">Pak Galih</option>
                <option value="pak heri">Pak Heri</option>
               </select>
              </label>
           </div>
                <nav class="dataTable-pagination">
                  <ul class="dataTable-pagination-list">
                    
                  </ul>
                </nav>
              </div>

 <!----- Tanggal di kerjakan----->
              <div class="dataTable-bottom">
                <div class="dataTable-info">Tanggal Di Kerjakan : 
                  <input type="date" name="">
                </div>
                <div class="dataTable-dropdown">
           </div>

              </div>

<!---------Solusi keluhan---->
              <div class="dataTable-bottom">
                <div class="dataTable-info">Solusi Keluhan : </div>
                <div class="dataTable-dropdown">
                
           </div>
                <textarea class="form-control" name="message" rows="10" required=""></textarea>
            </div>
              </div>
<br>
                </fieldset>
                <div class="text-center">
                  <button type="hardware" class="btn btn-primary"><a href="sudah_dikerjakan_hardware">Hardware</button>
                  <button type="software" class="btn btn-primary"><a href="sudah_dikerjakan_software">Software</button>
                  <button type="sistem" class="btn btn-primary"><a href="sudah_dikerjakan_sistem">Sistem</button>
                  <button type="pddikti" class="btn btn-primary"><a href="sudah_dikerjakan_pddikti">PdDikti</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->


            </div>
          </div>

@endsection