<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pddikti;

class SDpddikti extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dikerjakan_pddikti()
    {
        return view ('content.dikerjakan_pddikti');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cari3 = $request->cari3;
        $dpddikti = pddikti::where('NIK_NIM', 'like', "%" . $request->search . "%")
        ->orWhere('Nama', 'like', "%" . $request->search . "%")
        ->orWhere('Jenis_kelamin', 'like', "%" . $request->search . "%") 
        ->orWhere('Jabatan', 'like', "%" . $request->search . "%")
        ->orWhere('Jurusan', 'like', "%" . $request->search . "%")
        ->orWhere('Pertanyaan', 'like', "%" . $request->search . "%")
        ->orWhere('Di_kerjakan_oleh', 'like', "%" . $request->search . "%")
        ->orWhere('Tgl_Dikerjakan', 'like', "%" . $request->search . "%")
        ->orWhere('Solusi', 'like', "%" . $request->search . "%")
        ->paginate();

        return view('content.dikerjakan_pddikti', ['pddikti' => $dpddikti])->with('i', (request()->input('page', 1) - 1) * 10);
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
