<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'date',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
