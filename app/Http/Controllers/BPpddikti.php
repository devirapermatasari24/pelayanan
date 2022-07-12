<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use Illuminate\Http\Request;
use App\Models\pddikti;

class BPpddikti extends Controller
{

     public function viewkelpddikti()
    {
    	$pddikti = pddikti::latest()->paginate(2);
                return view('content.dikerjakan_pddikti',['pddikti'=>$pddikti])
                ->with('i' , (request()->input('page' ,1) -1) *10);
    }



  	 public function tambahkelpddikti()
    {
    			return view('content.kelpddikti');
    }



     public function updatestatus($id)
    {
        $pddikti = pddikti::where('id', $id)->update([
                'Status' => 
                'Sudah Dikerjakan'
            ]);
                return redirect()->route('pddikti')->with('success', 'Data telah di update');
    }


     public function batalstatus($id)
        {
            $pddikti = pddikti::where('id', $id)->update([
                    'Status' => 
                    ''
                ]);
                    return redirect()->route('pddikti')->with('success', 'Data telah di update');
        }




  	 public function simpankelpddikti(Request $req)
    {
    	pddikti::create(
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
    			return redirect('/dikerjakan_pddikti')->with('success', 'Data telah di tambah');
    }



 	public function editkelpddikti($id)
    {
    	$pddikti = pddikti::where('id', $id)->first();
    			return view('content.edit_kelpddikti',['pddikti'=>$pddikti]);
    }



  	 public function updatekelpddikti(Request $req)
    {
    	
    	$pddikti = pddikti::where('id', $req->id)->update([
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
    			return redirect()->route('pddikti')->with('success', 'Data telah di update');
    }



  	public function deletekelpddikti($id)
    {
    	$pddikti = pddikti::where('id', $id)->delete();
   			 	return redirect()->route('pddikti')->with('success', 'Data telah di hapus');
    }
}
