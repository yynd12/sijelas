<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_id',
        'nama',
        'jabatan',
        'student_class_id',
        'user_id',

        
    ];

    public function student_class(){
        return $this->belongsTo(StudentClass::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function notifications(){
        return $this->hasMany(Notification::class);
    }

    public function piketReports(){
        return $this->hasMany(PiketReport::class);
    }

    public function cashBills(){
        return $this->hasMany(CashBill::class);
    }

    public function readings(){
        return $this->hasMany(Reading::class);
    }
}