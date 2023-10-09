<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebConfiguration extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'name',
        'description',
        'email',
        'phone',
        'logo',
        'address',
        'theme_color',
        'map',
        'facebook',
        'instagram',
        'youtube',
    ];

    protected $casts = [
        'id' => 'string',
    ];

    public $incrementing = false;

    public function getLogoAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
