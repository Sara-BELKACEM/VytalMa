<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Professional extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'description',
        'specialty',
        'city',
        'address',
        'image',
        'is_verified',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}