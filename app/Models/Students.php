<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'student_id',
        'nama',
        'jabatan',
        'student_class_id',
        'user_id',

        
    ];

    public function student_class(){
        return $this->belongsTo(Student_class::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function notifications(){
        return $this->hasMany(notifications::class);
    }

    public function piketReports(){
        return $this->hasMany(Piket_reports::class);
    }

    public function cashBills(){
        return $this->hasMany(Cash_bills::class);
    }

    public function readings(){
        return $this->hasMany(Readings::class);
    }
}