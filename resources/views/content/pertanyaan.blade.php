@extends('layouts.dashboard')
@section('content')

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item">Pengumpulan Data</li>
          <li class="breadcrumb-item">Edit Semua Pengguna</li>
        </ol>
      </nav>

      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">DAFTAR PERTANYAAN - PERTANYAAN</h5>

<!------------------------------------------------IDENTITAS------------------------------------------------------------------->

<div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p>Pengirim Pertanyaan :</p>
              <p>Hari/Tanggal :</p>
              <p>Pukul :</p>
              <p>Pertanyaan Di Ajukan Kpd :</p>

              <div class="col-sm-10">
               <div class="dataTable-dropdown">
               </div>
                <textarea class="col-sm-12" name="message" rows="10" required="" placeholder="Silahkan Masukan Pertanyaan mengenai Keluhan..."></textarea>
              </div>

              <!-- Vertically centered Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                Lihat Secara Penuh
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Vertically Centered</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

            </div>
          </div>


          </div>
        </div>  
      </div>
@endsection