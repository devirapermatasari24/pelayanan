<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\seluruh;
use App\Models\hardware;
use App\Models\software;
use App\Models\sistem;
use App\Models\pddikti;

class KeseluruhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Hardware = hardware::latest()->paginate(5);
        $Software = software::latest()->paginate(5);
        $Sistem = sistem::latest()->paginate(5);
        $Pddikti = pddikti::latest()->paginate(5);
        $Seluruh = $Hardware and $Software and $Sistem and $Pddikti ;
        
        return view('content.tabel_keseluruhan' , compact('Hardware' , 'Software' , 'Sistem' , 'Pddikti' , 'Seluruh'));
        // $data = DB::table ('seluruhs')
        // ->join('hardware','seluruhs.NIK_NIM', '=', 'hardware.NIK_NIM')
        // ->join('software','hardware.NIK_NIM', '=', 'software.NIK_NIM')
        // ->join('sistems','software.NIK_NIM', '=', 'sistems.NIK_NIM')
        // ->join('pddiktis','sistems.NIK_NIM', '=', 'pddiktis.NIK_NIM')
        // ->select('hardware.NIK_NIM')
        // ->get();

        // return view ('content.tabel_keseluruhan')->with ('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cari(Request $request)
    {

        $cari = $request->cari4;
        $Hardware = Hardware::where('NIK_NIM', 'like', "%" . $request->cari4 . "%")
        ->orWhere('Nama', 'like', "%" . $cari . "%")
        ->orWhere('Jenis_kelamin', 'like', "%" . $cari . "%") 
        ->orWhere('Jabatan', 'like', "%" . $cari . "%")
        ->orWhere('Jurusan', 'like', "%" . $cari . "%")
        ->orWhere('Pertanyaan', 'like', "%" . $cari . "%")
        ->orWhere('Di_kerjakan_oleh', 'like', "%" . $cari . "%")
        ->orWhere('Tgl_Dikerjakan', 'like', "%" . $cari . "%")
        ->orWhere('Solusi', 'like', "%" . $cari . "%")
        ->paginate();


        $cari = $request->cari4;
        $Software = Software::where('NIK_NIM', 'like', "%" . $request->cari4 . "%")
        ->orWhere('Nama', 'like', "%" . $cari . "%")
        ->orWhere('Jenis_kelamin', 'like', "%" . $cari . "%") 
        ->orWhere('Jabatan', 'like', "%" . $cari . "%")
        ->orWhere('Jurusan', 'like', "%" . $cari . "%")
        ->orWhere('Pertanyaan', 'like', "%" . $cari . "%")
        ->orWhere('Di_kerjakan_oleh', 'like', "%" . $cari . "%")
        ->orWhere('Tgl_Dikerjakan', 'like', "%" . $cari . "%")
        ->orWhere('Solusi', 'like', "%" . $cari . "%")
        ->paginate();


        $cari = $request->cari4;
        $Sistem = Sistem::where('NIK_NIM', 'like', "%" . $request->cari4 . "%")
        ->orWhere('Nama', 'like', "%" . $cari . "%")
        ->orWhere('Jenis_kelamin', 'like', "%" . $cari . "%") 
        ->orWhere('Jabatan', 'like', "%" . $cari . "%")
        ->orWhere('Jurusan', 'like', "%" . $cari . "%")
        ->orWhere('Pertanyaan', 'like', "%" . $cari . "%")
        ->orWhere('Di_kerjakan_oleh', 'like', "%" . $cari . "%")
        ->orWhere('Tgl_Dikerjakan', 'like', "%" . $cari . "%")
        ->orWhere('Solusi', 'like', "%" . $cari . "%")
        ->paginate();


        $cari = $request->cari4;
        $Pddikti = Pddikti::where('NIK_NIM', 'like', "%" . $cari . "%")
        ->orWhere('Nama', 'like', "%" . $cari . "%")
        ->orWhere('Jenis_kelamin', 'like', "%" . $cari . "%") 
        ->orWhere('Jabatan', 'like', "%" . $cari . "%")
        ->orWhere('Jurusan', 'like', "%" . $cari . "%")
        ->orWhere('Pertanyaan', 'like', "%" . $cari . "%")
        ->orWhere('Di_kerjakan_oleh', 'like', "%" . $cari . "%")
        ->orWhere('Tgl_Dikerjakan', 'like', "%" . $cari . "%")
        ->orWhere('Solusi', 'like', "%" . $cari . "%")
        ->paginate();


         $Seluruh = $Hardware and $Software and $Sistem and $Pddikti ;


        return view('content.tabel_keseluruhan', compact ('Hardware' , 'Software' , 'Sistem' , 'Pddikti' , 'Seluruh'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
