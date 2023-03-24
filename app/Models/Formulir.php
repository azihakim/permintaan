<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Exception;

class Formulir extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();

        // self::addGlobalScope(function(Builder $builder){
        //     $builder->where('user_id', auth()->id());
        // });
        // if (auth()->user()->role == 'Masyarakat'){
            static::addGlobalScope('user_id', function(Builder $builder){
                if (auth()->check()){
                    if (auth()->user()->role == 'Masyarakat'){
                        return $builder->where('user_id', auth()->id())->orWhereNull(abort(404));
                    }
                }
            });
        // }
        
    }
    
   
}