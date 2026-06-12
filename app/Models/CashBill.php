<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'cash_id',
        'status',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function cash(){
        return $this->belongsTo(Cash::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
