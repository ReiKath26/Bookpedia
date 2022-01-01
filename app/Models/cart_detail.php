<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_detail extends Model
{
    use HasFactory;

    protected $table = 'cart_details';
    protected $guarded=['id'];


    public function cart()
    {
        return $this->belongsTo(cart::class);
    }

    public function product()
    {
        return $this->belongsTo(book::class, 'book_id');
    }

    public function updateDetail($itemDetail, $qty, $price)
    {
        $this->attributes['qty'] = $itemDetail->qty + $qty;
        $this->attributes['subtotal'] = $itemDetail->subtotal + ($qty * $price);
        self::save();
    }
}
