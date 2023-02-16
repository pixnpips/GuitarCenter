<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'customer_id',
        'status',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function item(){
        return $this->belongsTo(item::class);
    }
}
