<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'classroom_id',
        'content',
    ];
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}