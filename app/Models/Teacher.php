<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory, UUID;

    public $fillable = [
        'name',
        'gender',
        'position',
        'nip',
        'birthplace',
        'birthdate',
        'phone',
        'address',
        'image',
        'status',
    ];

    public function extracurriculars()
    {
        return $this->hasMany(Extracurricular::class);
    }

    public function getGenderAttribute($value)
    {
        return $value == 'L' ? 'Laki-laki' : 'Perempuan';
    }

    public function getBirthdateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public function setBirthdateAttribute($value)
    {
        $this->attributes['birthdate'] = date('Y-m-d', strtotime($value));
    }

    public function getStatusAttribute($value)
    {
        return $value == 'active' ? 'Aktif' : 'Tidak Aktif';
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeInactive($query)
    {
        return $query->where('status', 'inactive');
    }

    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
