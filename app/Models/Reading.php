<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Readings extends Model
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
        return $this->belongsTo(Students::class);
    }
}
