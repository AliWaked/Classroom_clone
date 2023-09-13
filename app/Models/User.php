<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\ThemeTypes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function avatarLogo(): Attribute
    {
        // dd(ThemeTypes::getRandomTheme()->value);
        return Attribute::make(
            get: function () {
                if ($profile = $this->profile) {
                    return $profile->logo_image;
                }
                $background = Str::replace('#', '', ThemeTypes::getRandomTheme()->value);
                return "https://ui-avatars.com/api/?name={$this->name}&color=fff&background={$background}";
            },
        );
    }
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable')->latest();
    }
    public function classworks(): BelongsToMany
    {
        return $this->belongsToMany(Classwork::class, 'classwork_user');
    }
    public function submissions(): HasMany
    {
        return $this->hasMany(Submission::class);
    }public function receivesBroadcastNotificationsOn():string {
        return 'user' . $this->id;
    }
}
