<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PiketSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_class_id',
        'hari'
    ];

    public function studentClass(){
        return $this->belongsTo(Student::class);
    }
}
