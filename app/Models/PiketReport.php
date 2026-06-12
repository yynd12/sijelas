<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PiketReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'tanggal',
        'bukti_foto',
        'catatan'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
