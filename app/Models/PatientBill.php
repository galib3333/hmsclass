<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'sub_amount',
        'discount',
        'tax',
        'total_amount',
        'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function billDetails()
    {
        return $this->hasMany(PatientBillDetail::class, 'patient_bill_id');
    }
}
