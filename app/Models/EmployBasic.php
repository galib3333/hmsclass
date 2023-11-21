<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Blood;

class EmployBasic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'role_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'birth_date',
        'blood_id',
        'image',
        'present_address',
        'permanent_address',
        'status',
        'created_by',
        'updated_by',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function blood()
    {
        return $this->belongsTo(Blood::class, 'blood_id');
    }
}
