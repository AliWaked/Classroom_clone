<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'calsswork_id',
        'commentable_id',
        'commentable_type',
        'content',
        'ip',
        'user_agent',
    ];
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
