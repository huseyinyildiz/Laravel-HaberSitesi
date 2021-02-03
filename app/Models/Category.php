<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends = [
        'parent',
    ];

        #One to Many
    public function news()
    {
        return $this->hasMany(News::class);
    }

    # One To Many Iverse-Tersi
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    # One to Many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
