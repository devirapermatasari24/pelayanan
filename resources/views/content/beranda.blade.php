@extends('layouts.dashboard')
@section('content')

  <section class="section dashboard">
   <div class="row">
<!------------------------------Selamat datang------------------------------->
  <div class="alert alert-info  alert-dismissible fade show" role="alert">
    <center><h4 class="alert-heading">SELAMAT DATANG DI WEBSITE PELAYANAN</h4></center>
    <center><h4 class="alert-heading">STIKES DHARMA HUSADA BANDUNG</h4></center>
  </div>
<!---------------------------------Hardware --------------------------------->
    <div class="col-xxl-3 col-md-2">
     <div class="card info-card sales-card">
       <div class="card-body">
         <h5 class="card-title"><center><span>Jumlah Pertanyaan Dari</span></center> <center>Admin</center></h5>

         <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
           <i class="ri-computer-line"></i>
          </div>
           <div class="ps-3">
            <h6>{{$jumlah_hardware}}</h6>
             <span class="text-success small pt-1 fw-bold"></span>
           </div>
         </div>
       </div>
     </div>
    </div><!------------------------End Hardware--------------------------------->

<!---------------------------------Software ------------------------------>
    <div class="col-xxl-3 col-md-3">
     <div class="card info-card revenue-card">
       <div class="card-body">
         <h5 class="card-title"><center><span>Jumlah Pertanyaan Dari</span></center> <center>User</center></h5>
         <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
           <i class="ri-windows-fill"></i>
          </div>
           <div class="ps-3">
            <h6>{{$jumlah_software}}</h6>
           </div>
         </div>
       </div>
     </div>
    </div><!-------------------------------End Software-------------------------------->

<!------------------------------------------Sistem ------------------------------------------>
    <!-- <div class="col-xxl-3 col-md-3">
     <div class="card info-card sales-card">
       <div class="card-body">
        <h5 class="card-title"><center><span>Jumlah Keluhan</span></center> <center>Sistem</center></h5>
         <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
           <i class="ri-settings-3-fill"></i>
          </div>
           <div class="ps-3">
            <h6>{{$jumlah_sistem}}</h6>
           </div>
         </div>
       </div>
     </div>
    </div> --><!--------------------------------End Sistem--------------------------------->

<!--------------------------------------------------pddikti-------------------------------------------->
    <!-- <div class="col-xxl-3 col-md-3">
     <div class="card info-card revenue-card">
       <div class="card-body">
         <h5 class="card-title"><center><span>Jumlah Keluhan</span></center> <center>Pddikti</center></h5>
         <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
           <i class="bx bxs-school"></i>
          </div>
           <div class="ps-3">
            <h6>{{$jumlah_pddikti}}</h6>
           </div>
         </div>
       </div>
     </div>
    </div> --><!---------------------------------------End pddikti--------------------------------------------->

<!------------------------------------Jumlah Seluruh --------------------------------------------->
    <div class="col-xxl-5 col-md-7">
     <div class="card info-card sales-card">
       <div class="card-body">
         <h5 class="card-title"><center>Jumlah Data Pertanyaan Keseluruhan</center> <center><span>Admin|User</span></center> </h5>

         <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
           <i class="ri-calculator-line text-warning"></i>
          </div>
           <div class="ps-3">
            <h6>{{$jumlah_seluruh}}</h6>
            <span class="text-success small pt-1 fw-bold"></span>
           </div>
         </div>
       </div>
     </div>
    </div><!------------------------------------End Jumlah Seluruh---------------------------->
   </div>
  </section>
@endsection

