<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientAdmit extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'patient_id',
        'father_name',
        'mother_name',
        'husband_name',
        'marital_status',
        'doctor_ref',
        'problem',
        'admit_date',
        'room_id',
        'guardian',
        'relation',
        'condition',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function room()
    {
        return $this->belongsTo(RoomList::class, 'room_id');
    }
}
