<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacurahhujanratarata extends Model
{
    use HasFactory;
    protected $fillable = ['formulir_id','lokasi_curahhujanratarata','tgl_dari_curahhujanratarata','tgl_sampai_curahhujanratarata'];
}
