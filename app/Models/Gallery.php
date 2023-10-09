<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
