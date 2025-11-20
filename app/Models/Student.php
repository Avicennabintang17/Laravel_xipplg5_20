<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nis',
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
    ];
}
