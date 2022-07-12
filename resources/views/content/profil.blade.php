@extends('layouts.dashboard')
@section('content')

      <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="beranda"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item">About Us</li>
          <li class="breadcrumb-item">Profil</li>
        </ol>
      </nav>


  <section class="section profile">
   <div class="row">
    <div class="col-xl-4">

     <div class="card">
      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

       <img src="{{asset('assets/img/stikes.jpg')}}" alt="Profile" class="rounded-circle">
        <h2>STIKES DHARMA HUSADA</h2>
        <h3>Profil Kampus</h3>
         <div class="social-links mt-2">
          <a href="https://twitter.com/himakep_sdhb" class="twitter">
           <i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/STIKes-Dharma-Husada-Bandung-349559482775/" class="facebook">
             <i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/real_stikesdhb/?hl=en" class="instagram">
               <i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UC88fE_Olk4Cbubzostt58mQ" class="youtobe">
                 <i class="bx bxl-youtube"></i></a>
         </div>
      </div>
     </div>
    </div>

    <div class="col-xl-8">
     <div class="card">
      <div class="card-body pt-3">
              <!------------------------------------------------ Bordered Tabs ------------------------------------------->
       <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item">
         <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Gambaran</button>
        </li>
       </ul>
              
       <div class="tab-content pt-2">
        <div class="tab-pane fade show active profile-overview" id="profile-overview">
         <h5 class="card-title">Tentang</h5>
          <p class="small fst-italic">STIKes DHB (Sekolah Tinggi Ilmu Kesehatan) Dharma Husada Bandung Berbekal semangat dan percaya diri, Yayasan Purna Dharma Husada berhasil menghimpun berbagai sumberdaya (resources) untuk mendirikan SEKOLAH TINGGI ILMU KESEHATAN (STIKesDHB) DHARMA HUSADA. Melalui Akta Notaris Dr. Wiratni Ahmadi, SH tanggal 26 Juli 1999 Nomor 52, Yayasan Purna Dharma Husada didirikan yang dipimpin oleh Drs. H. Soepardan, MBA seorang mantan perawat senior Rumah Sakit Hasan Sadikin Bandung sekaligus sebagai perintis Akademi Keperawatan PPNI Bandung.</p>

           <h5 class="card-title">Detail Profil</h5>
            <div class="row">
             <div class="col-lg-3 col-md-4 label">Kampus</div>
              <div class="col-lg-9 col-md-8">STIKes Dharma Husada Bandung</div>
            </div>

              <div class="row">
               <div class="col-lg-3 col-md-4 label">Negara</div>
                <div class="col-lg-9 col-md-8">Indonesia</div>
              </div>

              <div class="row">
               <div class="col-lg-3 col-md-4 label">Alamat</div>
                <div class="col-lg-9 col-md-8"> Jl. Terusan Jakarta No.75, Cicaheum, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40282</div>
              </div>

              <div class="row">
               <div class="col-lg-3 col-md-4 label">Telepon</div>
                <div class="col-lg-9 col-md-8">(022) 7208261</div>
              </div>

              <div class="row">
               <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">mail@stikesdhb.ac.id</div>
              </div>
        </div>

         <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
          <form>
           <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Email Notifications</label>
             <div class="col-md-8 col-lg-9">
              <div class="form-check">
               <input class="form-check-input" type="checkbox" id="changesMade" checked>
                <label class="form-check-label" for="changesMade"> Changes made to your account
                </label>
              </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" id="newProducts" checked>
                 <label class="form-check-label" for="newProducts"> Information on new products and services
                 </label>
               </div>
                <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="proOffers">
                  <label class="form-check-label" for="proOffers"> Marketing and promo offers
                  </label>
                </div>
                 <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                   <label class="form-check-label" for="securityNotify"> Security alerts
                    </label>
                 </div>
             </div>
           </div>

            <div class="text-center">
             <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form><!----------------------------------------- End settings Form ----------------------------------------->
         </div>

              </div><!-- End Bordered Tabs -->

    </div>
   </div>
  </section>

 @endsection