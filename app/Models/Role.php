<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    use HasFactory;
    protected $attributes = [
        'permissions' => '[]'
    ];

    public function users(){
        return $this->belongsToMany(User::class,'role_users','user_id',
            'role_id')->withTimestamps();
    }
    public static function allRole(){

        return Static::all();
    }
}
