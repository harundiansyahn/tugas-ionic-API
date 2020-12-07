<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "tblkelas";

    protected $fillable = [
        "nama","matakuliah","noruang","kode","dosen_id"
    ];

    public function pertemuan()
    {
        // "select * from tblkelas inner join tblpertemuan on tblkelas.id = tblpertemuan.kelas_id";

        return $this->hasMany('App\Models\Pertemuan', 'kelas_id', 'id')->orderBy("pertemuan");
    }

    public function dosen()
    {
        return $this->belongsTo('App\Models\User', 'dosen_id', 'id');
    }

    public function mahasiswa()
    {
        return $this->belongsToMany('App\Models\User', 'tblmahasiswakelas', 'kelas_id', 'mahasiswa_id');
    }
}
