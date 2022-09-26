<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataharihujan extends Model
{
    use HasFactory;
    protected $fillable = ['formulir_id','lokasi_harihujan','tgl_dari_harihujan','tgl_sampai_harihujan'];
}
