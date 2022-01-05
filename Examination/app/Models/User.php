<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "User";
    public $timestamps = false;
    protected $fillable = [
        'username',
        'password',
        'first_name',
        'last_name',
        'mail',
        'phone',
        'birthday',
        'gender',
        'student_number',
        'avatar',
        'role',
        'active',
        'last_login',
        'is_login',
        'created_date',
        'updated_date'
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

    public function exam(){
        return $this->hasMany(Exam::class, "user", "id");
    }

    public function scores(){
        return $this->hasMany(Scores::class, "user", "id");
    }
}
