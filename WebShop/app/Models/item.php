<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\item
 *
 * @method static \Illuminate\Database\Eloquent\Builder|item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|item query()
 * @mixin \Eloquent
 */
class item extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

    protected $fillable = [
        'title','desc','price','img1','img2','img3','pcs','category_id'
    ];
}
