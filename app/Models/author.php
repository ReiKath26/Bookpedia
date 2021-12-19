<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class author extends Model
{
    use HasFactory;


    public function books()
    {
        return $this->hasOneOrMany(book::class);
    }
}
