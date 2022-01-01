<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_head extends Model
{
    use HasFactory;

    protected $table = 'transaction-heads';
    protected $guarded = ['id'];

    public function transaction()
    {
        return $this->hasOneorMany(transaction_detail::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
