<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    public function details()
    {
        return $this->HasOneorMany(cart_detail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
