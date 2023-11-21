<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrescriptionMedi extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'prescription_id',
        'medi_name',
        'type',
        'dose',
        'note',
        'duration',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function prescription()
    {
        return $this->belongsTo(Prescription::class, 'prescription_id');
    }
}
