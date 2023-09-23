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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}