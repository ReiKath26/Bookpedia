<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping_address extends Model
{
    use HasFactory;

    protected $table = 'shipping-addresses';
    protected $guarded = ['id'];

    public function transaction()
    {
        return $this->hasOneorMany(transaction_head::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
