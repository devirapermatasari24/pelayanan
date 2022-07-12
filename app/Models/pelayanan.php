<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelayanan extends Model
{
    protected $table = "pelayanan";
    protected $primaryKey = "NIK_NIM";
    protected $fillable = [
        'NIK_NIM' , 'Nama' , 'Jenis_kelamin' ,'Jabatan' ,'Jurusan' ,
        'Pertanyaan' ,'Di_kerjakan_oleh' ,'Tgl_Dikerjakan','Solusi'];
    
}
