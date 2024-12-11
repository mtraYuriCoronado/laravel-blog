<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    // propiedades $fillable y $guarded para activar la asignación masiva
    protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
    ];

    protected $guarded = [
        'is_active',
    ];

    // Casting
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
