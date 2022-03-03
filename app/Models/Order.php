<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];



    //order belongs to one user
    public function user(){
        return $this->belongsTo(User::class);
    }


}
