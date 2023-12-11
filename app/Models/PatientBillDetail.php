<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientBillDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_bill_id',
        'particular',
        'amount',
    ];

    public function patientBill()
    {
        return $this->belongsTo(PatientBill::class);
    }
}
