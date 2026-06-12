<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'surat_terakhir',
        'ayat_terakhir',
        'tanggal',
        'catatan',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
