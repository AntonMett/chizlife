<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Product extends Model
{
    protected static function booted()
    {
        static::addGlobalScope('ancient', function(Builder $builder){
            $builder->whereNull('deleted_at');
        });
    }

    use HasFactory;
}

