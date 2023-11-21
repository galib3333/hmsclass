<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Death extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'patient_id',
        'death_date',
        'description',
        'doc_ref',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
