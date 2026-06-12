<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'cash_bill_if',
        'jumlah_pembayaran',
        'status',
        'tanggal_pembayaran',
    ];

    public function cashBill(){
        return $this->belongsTo(CashBill::class);
    }
}
