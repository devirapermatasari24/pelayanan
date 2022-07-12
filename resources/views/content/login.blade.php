<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Login Pelayanan IT STIKES DHB</title>
    <meta content="" name="description">
     <meta content="" name="keywords">

  <!----------------------------------------- Favicons ------------------------------------------->
     <link href="assets/img/stikes dharma husada.jpg" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!----------------------------------------- Google Fonts ------------------------------------------->
      <link href="https://fonts.gstatic.com" rel="preconnect">
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!------------------------------------------- Vendor CSS Files ------------------------------------------------>
       <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
       <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
       <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
       <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
       <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
       <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
       <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!------------------------------------------- Template Main CSS File ------------------------------------------------------>
      <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

 <body>
  <main>
   <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
     <div class="container">
      <div class="row justify-content-center">
       <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

       <div class="d-flex justify-content-center py-4">
        <a href="index.html" class="logo d-flex align-items-center w-auto">
         <img src="assets/img/stikes dharma husada.jpg" alt="">
          <span class="d-none d-lg-block">STIKes Dharma Husada</span>
        </a>
       </div><!----------- End Logo ----------------->

        <div class="card mb-3">
         <div class="card-body">
          <div class="pt-4 pb-2">
           <h5 class="card-title text-center pb-0 fs-4">LOGIN</h5>
            <p class="text-center small">Pelayanan IT STIKes Dharma Husada</p>
          </div>

          <form method="post" action="/userlogin" class="row g-3 needs-validation" novalidate>
          @csrf
           <div class="col-12">
            <label for="yourUsername" class="form-label">Email</label>
             <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
               <input type="text" name="email" class="form-control" id="yourUsername" required>
                <div class="invalid-feedback">Please enter your username.</div>
                </div>
             </div>

             <div class="col-12">
              <label for="yourPassword" class="form-label">Password</label>
               <div class="input-group" id="show_hide_password">
                <input type="password" name='password' class="form-control" name="password" required autocomplete="current-password">
                 <div class="input-group-append">
                  <a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
                 </div>
               </div>
                <div class="invalid-feedback">Please enter your password!</div>
                </div>

             <div class="col-12">
              <button class="btn btn-primary w-100" type="submit">Login</button>
             </div>
              <div class="col-12">
               <p class="small mb-0">Don't have account? <a href="register">Create an account</a></p>
              </div>
          </form>

             </div>
           </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script>
       $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
         event.preventDefault();
          if($('#show_hide_password input').attr("type") == "text"){
             $('#show_hide_password input').attr('type', 'password');
             $('#show_hide_password i').addClass( "bi bi-eye-slash" );
             $('#show_hide_password i').removeClass( "bi bi-eye" );
           }else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "bi bi-eye-slash" );
                    $('#show_hide_password i').addClass( "bi bi-eye" );
              }
           });
           });
    </script>

     <div class="credits">Website Resmi <a href="http://stikesdhb.ac.id//">STIKes Dharma Husada Bandung</a>
     </div>
            <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

      <div class="credits">Developer by Devira</a>
      </div>
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->    
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
   </div>

  </main><!-------------------------------------------- End #main ------------------------------------------------------------------->

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
             <i class="bi bi-arrow-up-short"></i>
            </a>

  <!----------------------------------------------- Vendor JS Files ----------------------------------------------------------------->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!------------------------------------------ Template Main JS File ---------------------------------------------------------------->
  <script src="assets/js/main.js"></script>

 </body>

</html>