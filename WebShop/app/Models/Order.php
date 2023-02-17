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

    public static function getLatestOrders(){
        return Order::orderBy('created_at', 'desc')->take(10)->get();
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function item(){
        return $this->belongsTo(item::class);
    }
}
