<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use Illuminate\Http\Request;
use App\Models\hardware;

class BPhardware extends Controller
{
    
  	public function viewkelhardware()
    {
    	$hardware = hardware::latest()->paginate(5);
    			return view('content.dikerjakan_hardware',['hardware'=>$hardware])
                ->with('i' , (request()->input('page' ,1) -1) *10);
    }


  	 public function tambahkelhardware()
    {
    			return view('content.kelhardware');
    }


     public function updatestatus($id)
    {
        $hardware = hardware::where('id', $id)->update([
                'Status' => 
                'Sudah Dikerjakan'
            ]);
                return redirect()->route('hardware')->with('success', 'Data telah di update');
    }



    public function batalstatus($id)
    {
        $hardware = hardware::where('id', $id)->update([
                'Status' => 
                ''
            ]);
                return redirect()->route('hardware')->with('success', 'Data telah di update');
    }



  	 public function simpankelhardware(Request $req)
    {
    	hardware::create(
    		[
    			
                'NIK_NIM' => $req->nik_nim,
    			'Nama' => $req->nama,
    			'Jenis_kelamin' => $req->jenis_kelamin,
    			'Jabatan' => $req->jabatan,
                'Jurusan' => $req->jurusan,
                'Pertanyaan' => $req->message,
                'Di_kerjakan_oleh' => $req->dikerjakan_oleh,
                'Tgl_Dikerjakan' => $req->tgl_dikerjakan,
                'Solusi' => $req->solusi,
    		]
    	);
    			return redirect()->route('hardware')->with('success', 'Data telah di tambah');
    }


 	public function editkelhardware($id)
    {
    	$hardware = hardware::where('id', $id)->first();
    			return view('content.edit_kelhardware',['hardware'=>$hardware]);
                // return $hardware;
    }


  	 public function updatekelhardware(Request $req)
    {
    	
    	$hardware = hardware::where('id', $req->id)->update([
    		    'NIK_NIM' => $req->nik_nim,
    			'Nama' => $req->nama,
    			'Jenis_kelamin' => $req->jenis_kelamin,
    			'Jabatan' => $req->jabatan,
                'Jurusan' => $req->jurusan,
                'Pertanyaan' => $req->message,
                'Di_kerjakan_oleh' => $req->dikerjakan_oleh,
                'Tgl_Dikerjakan' => $req->tgl_dikerjakan,
                'Solusi' => $req->solusi,
    		]);
    			return redirect()->route('hardware')->with('success', 'Data telah di update');
    }


  	public function deletekelhardware($id)
    {
    	$hardware = hardware::where('id', $id)->delete();
   			 	return redirect()->route('hardware')->with('success', 'Data telah di hapus');
    }



    public function tombol_pengisian() {
        return view ('content.tombol_pengisian');
    }


}