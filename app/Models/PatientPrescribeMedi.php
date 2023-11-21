<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientPrescribeMedi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'prescribe_id',
        'medicine_cat_id',
        '_name',
        'dose',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function prescribe()
    {
        return $this->belongsTo(Prescription::class, 'prescribe_id');
    }

    public function medicineCategory()
    {
        return $this->belongsTo(PatientMediCat::class, 'medicine_cat_id');
    }
}
