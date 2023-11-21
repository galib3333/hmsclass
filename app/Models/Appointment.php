<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'patient_id',
        'employ_id',
        'app_date',
        'serial',
        'problem',
        'approve',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function employee()
    {
        return $this->belongsTo(EmployBasic::class, 'employ_id');
    }
}
