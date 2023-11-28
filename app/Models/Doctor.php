<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'employ_id',
        'designation_id',
        'department_id',
        'biography',
        'specialist',
        'education',
        'fees',
        'status',
        'created_by',
        'updated_by',
    ];

    public function employ()
    {
        return $this->belongsTo(EmployBasic::class, 'employ_id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'depertment_id');
    }
}
