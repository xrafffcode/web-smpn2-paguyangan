<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'news_category_id',
        'thumbnail',
        'is_published',
        'published_at',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'date',
    ];

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function getThumbnailAttribute($value)
    {
        return asset('storage/' . $value);
    }


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
