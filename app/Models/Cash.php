<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_class_id',
        'jumlah',
        'keterangan',
        'tanggal',
        'jenis',
    ];

    public function studentClass(){
        return $this->belongsTo(StudentClass::class);
    }

    public function cashBills(){
        return $this->hasMany(CashBill::class);
    }
}
