<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'nama',
        'student_class_id',
        'user_id',
    ];

    public function studentClass(){
        return $this->belongsTo(StudentClass::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function announcements(){
        return $this->hasMany(Announcement::class);
    }
}
