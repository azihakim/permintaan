<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angin_10m_24jam extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pencatatans(){
        return $this->belongsTo(Pencatatan::class, 'pencatatans_id', 'id');
    }
}
