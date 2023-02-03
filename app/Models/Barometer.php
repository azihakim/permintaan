<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barometer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pencatatans(){
        return $this->belongsTo(Pencatatan::class, 'pencatatans_id', 'id');
    }
}
