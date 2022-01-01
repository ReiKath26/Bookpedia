<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{
    use HasFactory;

    protected $table = 'shippings';
    protected $guarded = ['id'];

    public function transaction()
    {
        return $this->hasMany(transaction_head::class);
    }
}
