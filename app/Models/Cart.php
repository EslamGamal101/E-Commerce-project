<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='carts';
    
    protected function product(){
        return $this->hasOne('App\Models\Category','id','product_id');
    }

    protected function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
