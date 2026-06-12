<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $fillable = [
        'nama_kelas',
        'tahun_ajaran',
    ];
    
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function classTeachers(){
        return $this->hasMany(ClassTeacher::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function cashes(){
        return $this->hasMany(Cash::class);
    }

    public function piketSchedules(){
        return $this->hasMany(PiketSchedule::class);
    }

}
