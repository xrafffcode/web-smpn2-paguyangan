<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory, UUID;

    public $fillable = [
        'desktop_image',
        'mobile_image'
    ];

    public function getDesktopImageAttribute($value)
    {
        return asset('storage/' . $value);
    }

    public function getMobileImageAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
