<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'employ_id',
        'email',
        'contact_no_en',
        'contact_no_bn',
        'role_id',
        'password',
        'language',
        'full_access',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function employBasic()
    {
        return $this->belongsTo(EmployBasic::class, 'employ_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}