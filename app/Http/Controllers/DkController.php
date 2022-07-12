<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hardware;
use App\Models\software;
use App\Models\sistem;
use App\Models\pddikti;


class DkController extends Controller
{
    public function data_keseluruhan() {
    	$hardware = hardware::all();
    	$software = software::all();
    	$sistem = sistem::all();
    	$pddikti = pddikti::all();
    	return view ('content.tabel_keseluruhan',['hardware' => $hardware],['software' => $software],['sistem' => $sistem],['pddikti' => $pddikti]);
    }



}
