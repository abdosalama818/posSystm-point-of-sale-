<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];


    // products belongs to one category

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
