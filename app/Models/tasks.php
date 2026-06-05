<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_class_id',
        'judul_tugas',
        'deskripsi',
        'mapel',
        'deadline',
        'status'
    ];

    public function studentClass(){
        return $this->belongsTo(Student_class::class);
    }
}
