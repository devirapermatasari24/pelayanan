@extends('layouts.dashboard')
@section('content')

 <div class="col-12">
  <div class="card recent-sales">
   <div class="card-body">
   <br>
    <h4 class="alert-heading">DATA KELUHAN KESELURUHAN</h4>
     <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
     </div>
<!-------------------------------------END TITLE-------------------------------------------->

<!----------------------------------Search--------------------------------------->
      <form action="/cari4" method="GET">
       <div class="dataTable-top">
        <div class="dataTable-search">
         <input class="dataTable-input" placeholder="Search..." type="search" name="cari4">
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
       </div>
      </form>

<!--------------------------------------Tabel----------------------------------------------->
       <div class="table-responsive">
        <div class="dataTable-container">
         <table class="table table-bordered border-primary">
          <thead>
          <tr>
           <th scope="col">No</th>
           <th scope="col">Sudah/Belum Dikerjakan </th>
           @if(Auth()->user()->name=='dedev')
           <th scope="col">Keluhan</th>
           @endif
           <th scope="col">NIM/NID</th>
           <th scope="col">Nama</th>
           <th scope="col">Jenis Kelamin</th>
           <th scope="col">Jabatan</th>
           <th scope="col">Jurusan</th>
           <th scope="col">Pertanyaan</th>
           <th scope="col">Dikerjakan Oleh</th>
           <th scope="col">Tgl Dikerjakan</th>
           <th scope="col">Solusi</th>
          </tr>
          </thead>
           <tbody>
            <?php $i=1  ?>
            @foreach ($Hardware as $row)
            <tr>
             <th scope="row">
              <a href="#">{{ $i++ }}</a>
             </th>
              @if($row-> Status == 'Sudah Dikerjakan') 
                <td><span class="badge bg-success">Selesai Dikerjakan</span></td>
              @else
                <td><span class="badge bg-danger">Belum Dikerjakan</span></td>
              @endif
              @if(Auth()->user()->name=='dedev')
              <td></td>
              @endif
              <td>{{ $row->NIK_NIM}}</td>
              <td>{{ $row->Nama}}</td>
              <td>{{ $row->Jenis_kelamin}}</td>
              <td>{{ $row->Jabatan}}</td>
              <td>{{ $row->Jurusan}}</td>
              <td>{{ $row->Pertanyaan}}</td>
              <td>{{ $row->Di_kerjakan_oleh}}</td>
              <td>{{ $row->Tgl_Dikerjakan}}</td>
              <td>{{ $row->Solusi}}</td>
            </tr>
            @endforeach
             @foreach ($Software as $sof)
            <tr>
             <th scope="row">
              <a href="#">{{ $i++ }}</a>
             </th>
              @if($sof-> Status == 'Sudah Dikerjakan') 
                <td><span class="badge bg-success">Selesai Dikerjakan</span></td>
              @else
                <td><span class="badge bg-danger">Belum Dikerjakan</span></td>
              @endif
              @if(Auth()->user()->name=='dedev')
              <td></td>
              @endif
              <td>{{ $sof->NIK_NIM}}</td>
              <td>{{ $sof->Nama}}</td>
              <td>{{ $sof->Jenis_kelamin}}</td>
              <td>{{ $sof->Jabatan}}</td>
              <td>{{ $sof->Jurusan}}</td>
              <td>{{ $sof->Pertanyaan}}</td>
              <td>{{ $sof->Di_kerjakan_oleh}}</td>
              <td>{{ $sof->Tgl_Dikerjakan}}</td>
              <td>{{ $sof->Solusi}}</td>
            </tr>
            @endforeach
            @foreach ($Sistem as $tem)
            <tr>
             <th scope="row">
              <a href="#">{{ $i++ }}</a>
             </th>
              @if($tem-> Status == 'Sudah Dikerjakan') 
                <td><span class="badge bg-success">Selesai Dikerjakan</span></td>
              @else
                <td><span class="badge bg-danger">Belum Dikerjakan</span></td>
              @endif
              @if(Auth()->user()->name=='dedev')
              <td></td>
              @endif
              <td>{{ $tem->NIK_NIM}}</td>
              <td>{{ $tem->Nama}}</td>
              <td>{{ $tem->Jenis_kelamin}}</td>
              <td>{{ $tem->Jabatan}}</td>
              <td>{{ $tem->Jurusan}}</td>
              <td>{{ $tem->Pertanyaan}}</td>
              <td>{{ $tem->Di_kerjakan_oleh}}</td>
              <td>{{ $tem->Tgl_Dikerjakan}}</td>
              <td>{{ $tem->Solusi}}</td>
            </tr>
            @endforeach
            @foreach ($Pddikti as $dik)
            <tr>
             <th scope="row">
              <a href="#">{{ $i++ }}</a>
             </th>
              @if($dik-> Status == 'Sudah Dikerjakan') 
                <td><span class="badge bg-success">Selesai Dikerjakan</span></td>
              @else
                <td><span class="badge bg-danger">Belum Dikerjakan</span></td>
              @endif
              @if(Auth()->user()->name=='dedev')
              <td></td>
              @endif
              <td>{{ $dik->NIK_NIM}}</td>
              <td>{{ $dik->Nama}}</td>
              <td>{{ $dik->Jenis_kelamin}}</td>
              <td>{{ $dik->Jabatan}}</td>
              <td>{{ $dik->Jurusan}}</td>
              <td>{{ $dik->Pertanyaan}}</td>
              <td>{{ $dik->Di_kerjakan_oleh}}</td>
              <td>{{ $dik->Tgl_Dikerjakan}}</td>
              <td>{{ $dik->Solusi}}</td>
            </tr>
            @endforeach
           </tbody>
         </table>
        </div>
      <br>
        <div class="pull-left">
          {{$Seluruh->links()}}
        </div>
       </div>

<!------------------------------Pagination---------------------------->
       <br>
   </div>
  </div>
 </div>
@endsection


   



