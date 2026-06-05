<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash_bills extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'cash_id',
        'status',
    ];

    public function student(){
        return $this->belongsTo(Students::class);
    }

    public function cash(){
        return $this->belongsTo(Cashes::class);
    }

    public function payments(){
        return $this->hasMany(Payments::class);
    }
}
