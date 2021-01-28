<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

        #One to many(Inverse)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
