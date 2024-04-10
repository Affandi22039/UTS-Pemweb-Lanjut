<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'level_akses_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function levelAkses()
    {
        return $this->belongsTo(LevelAkses::class, 'level_akses_id');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public static function findByEmail($email)
    {
        return static::where('email', $email)->first();
    }

    public function resetPassword($password)
    {
        $this->password = $password;
        $this->save();
    }

    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Str::random(60);
        $this->password_reset_token_created_at = now();
        $this->save();
    }
}
