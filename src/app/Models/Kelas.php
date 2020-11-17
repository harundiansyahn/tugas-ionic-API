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
}
