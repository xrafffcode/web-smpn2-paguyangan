<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'name',
        'description',
        'image',
        'teacher_id',
        'status',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $value->store('assets/extracurricular', 'public');
    }
}
