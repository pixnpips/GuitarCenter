<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','desc','img',
    ];

    public function getImg()
    {
        return $this->img;
    }


    public function items(){
        return $this->hasMany(item::class);
    }
}
