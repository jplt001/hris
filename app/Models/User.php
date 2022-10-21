<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements Auditable
{
    use HasApiTokens, HasFactory, Notifiable, \OwenIt\Auditing\Auditable, HasRoles;

    const TABLENAME = "users";

    const FIELD_ID = "id";
    const FIELD_FIRST_NAME = "first_name";
    const FIELD_MIDDLE_NAME = "middle_name";
    const FIELD_LAST_NAME = "last_name";
    const FIELD_EMAIL = "email";
    const FIELD_PASSWORD = "password";
    const FIELD_GOOGLE_ID = "google_id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        self::FIELD_FIRST_NAME,
        self::FIELD_MIDDLE_NAME,
        self::FIELD_LAST_NAME,
        'email',
        'password',
        self::FIELD_GOOGLE_ID,
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
    ];
}
