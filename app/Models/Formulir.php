<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Exception;

class Formulir extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('user_id', function (Builder $builder) {
                if(auth()->user()->role == 0){
                        $builder->where('user_id', auth()->id());
                }
        });
    }
   
}