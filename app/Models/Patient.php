<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Blood;


class Patient extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'patient_id',
        'name_en',
        'name_bn',
        'email',
        'contact_no_en',
        'contact_no_bn',
        'present_address',
        'permanent_address',
        'image',
        'birth_date',
        'gender',
        'blood_id',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         $model->patient_id = (string) Str::uuid();
    //     });

    //     static::updating(function ($model) {
    //         unset($model->patient_id);
    //     });
    // }

    public function blood()
    {
        return $this->belongsTo(Blood::class, 'blood_id');
    }
}
