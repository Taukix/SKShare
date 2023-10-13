<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'likes',
        'dislikes',
        'user_id',
        'size',
        'price',
        'categories',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likedByUsers() {
        return $this->belongsToMany(User::class, 'likes', 'sneaker_id', 'user_id')->withTimestamps();
    }

    public function dislikedByUsers() {
        return $this->belongsToMany(User::class, 'dislikes', 'sneaker_id', 'user_id')->withTimestamps();
    }
}
