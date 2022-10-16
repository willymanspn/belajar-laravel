<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // DIGUNAKAN APABILA NAMA TABEL TIDAK PLULAR
    // protected $table = 'students';

    // DIGUNAKAN APABILA PRIMARY BUKAN MENGGUNAKAN NAMA ID
    // protected $table = 'student_id';

    // DIGUNAKAN APABILA TABEL TIDAK MENGGUNAKAN AUTO INCREMENT
    // public $incrementing = false;

    // DIGUNAKAN APABILA PRIMARY KEY MENGGUNAKAN SELAIN INT
    // protected $keyType = 'string';

    // DIGUNAKAN APABILA TIDAK TERDAPAT KOLOM TIMESTAMP
    // public $timestamps = false;
}
