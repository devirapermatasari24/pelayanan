<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use Illuminate\Http\Request;
use App\Models\software;

class BPsoftware extends Controller
{

    public function viewkelsoftware()
    {
    	$software = software::latest()->paginate(5);
                return view('content.dikerjakan_software',['software'=>$software])
                ->with('i' , (request()->input('page' ,1) -1) *10);
    }



  	 public function tambahkelsoftware()
    {
    			return view('content.kelsoftware');
    }



     public function updatestatus($id)
    {
        $software = software::where('id', $id)->update([
                'Status' => 
                'Sudah Dikerjakan'
            ]);
                return redirect()->route('software')->with('success', 'Data telah di update');
    }



     public function batalstatus($id)
    {
        $software = software::where('id', $id)->update([
                'Status' => 
                ''
            ]);
                return redirect()->route('software')->with('success', 'Data telah di update');
    }



  	 public function simpankelsoftware(Request $req)
    {
    	software::create(
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
    			return redirect('/dikerjakan_software')->with('success', 'Data telah di tambah');
    }



 	public function editkelsoftware($id)
    {
    	$software = software::where('id', $id)->first();
    			return view('content.edit_kelsoftware',['software'=>$software]);
    }



  	 public function updatekelsoftware(Request $req)
    {
    	
    	$software = software::where('id', $req->id)->update([
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
    			return redirect()->route('software')->with('success', 'Data telah di update');
    }



  	public function deletekelsoftware($id)
    {
    	$software = software::where('id', $id)->delete();
   			 	return redirect()->route('software')->with('success', 'Data telah di hapus');
    }
}
