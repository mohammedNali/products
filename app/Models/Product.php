<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'short_notes', 'slug', 'image'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
