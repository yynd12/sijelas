<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
protected $fillable = [
    'username',
    'password',
    'role',
];

protected $hidden = [
    'password',
    'remember_token',
];

public function student(){
        return $this->hasOne(Student::class);
    }

public function classTeacher(){
    return $this->hasOne(ClassTeacher::class);
}
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    
}
