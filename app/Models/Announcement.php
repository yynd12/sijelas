<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_teacher_id',
        'judul',
        'isi',
    ];

    public function classTeacher(){
        return $this->belongsTo(ClassTeacher::class);
    }
}
