<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

/**
 * App\Models\item
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @mixin \Eloquent
 */

class Customer extends Model
{
    use HasFactory;
    use Billable;

    public static function getLatestCustomers(){
        return Customer::orderBy('created_at', 'desc')->take(10)->get();
    }

    protected $fillable = [
        'name', 'street','postal','email','bday','password1'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
