<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'price',
        'color',
        'size',
        'custom',
        'stock',
        'description',
        'certificate',
    ];

    protected $casts = [
        'color' => 'array', // Pastikan Laravel menganggap ini sebagai array (JSON)
        'size' => 'array',
        'custom' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
