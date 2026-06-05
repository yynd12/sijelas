<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_class extends Model
{
    protected $fillable = [
        'nama_kelas',
        'tahun_ajaran',
    ];
    
    public function students(){
        return $this->hasMany(Students::class);
    }

    public function classTeachers(){
        return $this->hasMany(Class_teacher::class);
    }

    public function tasks(){
        return $this->hasMany(tasks::class);
    }

    public function cashes(){
        return $this->hasMany(Cashes::class);
    }

    public function piketSchedules(){
        return $this->hasMany(Piket_schedules::class);
    }

}
