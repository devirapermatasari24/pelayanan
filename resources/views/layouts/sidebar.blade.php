 
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
     <li class="nav-item">
      <a class="nav-link " href="beranda">
       <i class="bi bi-grid"></i><span>Beranda</span>
      </a>
     </li><!------------------------ End beranda----------------------------->


     <li class="nav-item">
      <a class="nav-link collapsed" href="profil">
       <i class="bi bi-bell"></i><span>Notifikasi</span>
      </a>
</li><!------------------------ End Notifikasi ------------------------->




<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
          <i class="bi bi-person"></i><span>Profil</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
          <li>
            <a href="\semua_pengguna">
              <i class="bi bi-circle"></i><span>Semua Pengguna</span>
            </a>
          </li>
          <li>
            <a href="\register">
              <i class="bi bi-circle"></i><span>Tambah Baru</span>
            </a>
          </li>
        </ul>
</li><!------------------------ End Profil ------------------------->


<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
         <i class="bi bi-layout-text-window-reverse"></i><span>Bagian Pengerjaan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
          <li>
            <a href="\tombol_pengisian">
              <i class="bi bi-circle"></i><span>Pilih Ajuan</span>
            </a>
          </li>
        </ul>
</li><!------------End Bagian Pengerjaan----------->



@if(Auth()->user()->name=='dedev')
 
<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
           <i class="bi bi-journal-text"></i><span>Pengumpulan Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dikerjakan_hardware">
              <i class="bi bi-circle"></i><span>Bag IT</span>
            </a>
          </li>
          <li>
            <a href="/">
              <i class="bi bi-circle"></i><span>Bag Kaprodi</span>
            </a>
          </li>
          <li>
            <a href="/dikerjakan_software">
              <i class="bi bi-circle"></i><span>Bag Humas</span>
            </a>
          </li>
          <li>
            <a href="/dikerjakan_pddikti">
              <i class="bi bi-circle"></i><span>Bag Kepegawaian</span>
            </a>
          </li>
          <li>
            <a href="/dikerjakan_pddikti">
              <i class="bi bi-circle"></i><span>Bag Kemahasiswaan</span>
            </a>
          </li>
          <li>
            <a href="/dikerjakan_pddikti">
              <i class="bi bi-circle"></i><span>Bag Perpustakaan</span>
            </a>
          </li>

          <li>
            <a href="/tabel_keseluruhan">
              <i class="bi bi-circle"></i><span>Data Keseluruhan</span>
            </a>
          </li>
          <li>
            <a href="/pertanyaan">
              <i class="bi bi-circle"></i><span>Pertanyaan</span>
            </a>
          </li>
        </ul>
      </li>
 @endif<!---------------End Pengumpulan Data-------------->



    <!--------<li class="nav-item">
     <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Data Keseluruhan</span><i class="bi bi-chevron-down ms-auto"></i>
     </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       <li>
        
       </li>
      </ul>
    </li>!-----End Data Keseluruhan---->



    <li class="nav-heading">Pages</li>
     <li class="nav-item">
      <a class="nav-link collapsed" href="profil">
       <i class="bx bxs-calendar"></i><span>Agenda</span>
      </a>
    </li><!--------------------------- End Calender------------------------------->



     <li class="nav-item">
      <a class="nav-link collapsed" href="profil">
       <i class="bi bi-question-circle"></i><span>About Us</span>
      </a>
    </li><!--------------------------- End About Us ------------------------------->



    <li class="nav-item">
     <a class="nav-link collapsed" href="/logout">
      <i class="bi bi-box-arrow-in-right"></i><span>Logout</span>
     </a>
    </li><!----------------------- End Logout----------------------------------->

    </ul>
 </aside>