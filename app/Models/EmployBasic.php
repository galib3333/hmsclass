<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Blood;
use App\Models\Role;
use App\Models\Doctor;

class EmployBasic extends Model
{
    use HasFactory, SoftDeletes;


    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function blood()
    {
        return $this->belongsTo(Blood::class, 'blood_id');
    }
    public function doctor()
    {
        return $this->hasMany(Doctor::class, 'employ_id');
    }
}
