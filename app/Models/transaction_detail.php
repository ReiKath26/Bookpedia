<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    use HasFactory;

    protected $table = 'transaction-details';

    public function head()
    {
        return $this->belongsTo(transaction_head::class);
    }


    public function book()
    {
        return $this->belongsTo(book::class);
    }
}
