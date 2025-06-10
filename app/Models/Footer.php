<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'email',
        'instagram',
        'facebook',
        'important_links',
        'services',
        'partners'
    ];

    protected $casts = [
        'important_links' => 'array',
        'services' => 'array',
        'partners' => 'array',
    ];
}
