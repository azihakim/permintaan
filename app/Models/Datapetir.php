<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapetir extends Model
{
    use HasFactory;
    protected $fillable = ['formulir_id','lokasi_petir','latitude_petir','longitude_petir','tgl_dari_petir','tgl_sampai_petir'];
}
