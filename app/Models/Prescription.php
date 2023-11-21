<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'app_id',
        'cc',
        'inv',
        'advice',
        'visit',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'app_id');
    }
}
