<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function author()
    {
        return $this->belongsTo(author::class, 'author_id');
    }

    public function publisher()
    {
        return $this->belongsTo(publisher::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function cartDet()
    {
        return $this->hasMany(cart_detail::class);
    }

    public function transaction()
    {
        return $this->hasMany(transaction_detail::class);
    }
}
