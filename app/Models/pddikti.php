<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pddikti extends Model
{
    use HasFactory;

    protected $table = "pddiktis";

        protected $fillable = [
        'NIK_NIM' , 'Nama' , 'Jenis_kelamin' ,'Jabatan' ,'Jurusan' ,
        'Pertanyaan' ,'Di_kerjakan_oleh' ,'Tgl_Dikerjakan','Solusi'];
}
