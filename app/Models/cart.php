<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $guarded=['id'];

    public function details()
    {
        return $this->hasMany(cart_detail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function updateTotal($cart, $subtotal)
    {
        $this->attributes['total'] = $cart->total + $subtotal;
        self::save();
    }
}
