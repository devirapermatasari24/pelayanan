<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen_keperawatan;

class DosenKeperawatan extends Controller
{
    public function viewDosen()
    {
    	$dosen = dosen_keperawatan::all();
    	return view('content.profil_dosen',['data'=>$dosen]);
    }

    public function tambahDosen()
    {
    	return view('content.profil_dosen_create');
    }

    public function simpanDosen(Request $req)
    {
    	dosen_keperawatan::create(
    		[
    			
                'nidk' => $req->nidk,
    			'nama' => $req->nama,
    			'alamat' => $req->alamat,
    			'jabatan' => $req->jabatan,
                'ttl' => $req->ttl,
                'gender' => $req->gender,
                'pendidikan' => $req->pendidikan,
                'tmt' => $req->tmt,
                'prodi' => $req->prodi,
    		]
    	);
    	return redirect()->route('profildosen')->with('success', 'Data dosen telah di tambah');
    }

    public function ubahDosen($id)
    {
    	$dosen = dosen_keperawatan::where('id', $id)->first();
    	return view('content.profil_dosen_edit',['data'=>$dosen]);
    }

    public function updateDosen(Request $req)
    {
    	
    	$dosen = dosen_keperawatan::where('id', $req->id)->update([
    		    'nidk' => $req->nidk,
    			'nama' => $req->nama,
    			'alamat' => $req->alamat,
    			'jabatan' => $req->jabatan,
                'ttl' => $req->ttl,
                'gender' => $req->gender,
                'pendidikan' => $req->pendidikan,
                'tmt' => $req->tmt,
                'prodi' => $req->prodi,
    		]);
    	return redirect()->route('profildosen')->with('success', 'Data dosen telah di update');
    }

    public function deleteDosen($id)
    {
    	$dosen = dosen_keperawatan::where('id', $id)->delete();
    	return redirect()->route('profildosen')->with('success', 'Data dosen telah di hapus');
    }

    
}