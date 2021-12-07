<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'like_count',
        'dislike_count',
        'media_url'
    ];
}
