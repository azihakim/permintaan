<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapermintaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'formulir_id',
        'jenis_data',
        'lokasi',
        'desk_petir',
        'tgl_dari',
        'tgl_sampai',
        'unsurcuacalain'];
    
}
