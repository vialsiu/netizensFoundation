<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory, AsSource;

    public $table = 'categories';

    public $timestamps = false;

    protected $fillable = ['category_name', 'category_slug', 'icon', 'is_available'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
