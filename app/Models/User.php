<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends EloquentUser{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [

        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'permissions',
        'user_type'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'permissions' => 'array'
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
