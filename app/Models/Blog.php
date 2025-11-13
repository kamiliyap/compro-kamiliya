<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
    ];

    // Relasi ke tabel categories
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
