<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use Illuminate\Http\Request;
use App\Models\sistem;

class BPsistem extends Controller
{

    public function viewkelsistem()
    {
    	$sistem = sistem::latest()->paginate(2);
                return view('content.dikerjakan_sistem',['sistem'=>$sistem])
                ->with('i' , (request()->input('page' ,1) -1) *10);
    }



  	 public function tambahkelsistem()
    {
    			return view('content.kelsistem');
    }



    public function updatestatus($id)
    {
        $sistem = sistem::where('id', $id)->update([
                'Status' => 
                'Sudah Dikerjakan'
            ]);
                return redirect()->route('sistem')->with('success', 'Data telah di update');
    }



    public function batalstatus($id)
        {
            $sistem = sistem::where('id', $id)->update([
                    'Status' => 
                    ''
                ]);
                    return redirect()->route('sistem')->with('success', 'Data telah di update');
        }



  	 public function simpankelsistem(Request $req)
    {
    	sistem::create(
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
    			return redirect('/dikerjakan_sistem')->with('success', 'Data telah di tambah');
    }




 	public function editkelsistem($id)
    {
    	$sistem = sistem::where('id', $id)->first();
    			return view('content.edit_kelsistem',['sistem'=>$sistem]);
    }



  	 public function updatekelsistem(Request $req)
    {
    	
    	$sistem = sistem::where('id', $req->id)->update([
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
    			return redirect()->route('sistem')->with('success', 'Data telah di update');
    }



  	public function deletekelsistem($id)
    {
    	$sistem = sistem::where('id', $id)->delete();
   			 	return redirect()->route('sistem')->with('success', 'Data telah di hapus');
    }
}
