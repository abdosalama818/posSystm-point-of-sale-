<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //cart belongs to  prodct
    public function product(){
        return $this->belongsTo(Product::class);
    }


    public function user(){
        return $this->hasOne(user::class);
    }


    
}
