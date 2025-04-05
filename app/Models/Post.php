<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory, AsSource;

    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'image', 'category_id', 'author'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author');
    }
}
