<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hardware;
use App\Models\software;
use App\Models\sistem;
use App\Models\pddikti;

class DashboardController extends Controller
{
    public function index() {
        return view ('layouts.dashboard');
    }

     public function beranda() {
        $jumlah_hardware = hardware::count();
        $jumlah_software = software::count();
        $jumlah_sistem = sistem::count();
        $jumlah_pddikti = pddikti::count();
        $jumlah_seluruh = $jumlah_hardware + $jumlah_software + $jumlah_sistem + $jumlah_pddikti ;
        return view ('content.beranda' , compact('jumlah_hardware' , 'jumlah_software' , 'jumlah_sistem' , 'jumlah_pddikti' , 'jumlah_seluruh'));

    }


     public function login() {
    	return view ('content.login');
    }


    public function register() {
    	return view ('content.register');
    }


     public function berhasil_register() {
    	return view ('content.berhasil_register');
    }


    public function profil() {
    	return view ('content.profil');
    }


    public function semua_pengguna() {
        return view ('content.semua_pengguna');
    }


        public function pertanyaan() {
        return view ('content.pertanyaan');
    }


    public function logout() {
    	return view ('content.logout');
    }


    public function tabel_keseluruhan() {
        return view ('content.tabel_keseluruhan');
    }
}
