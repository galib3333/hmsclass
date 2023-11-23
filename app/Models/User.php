<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    
    public function employBasic()
    {
        return $this->belongsTo(EmployBasic::class, 'employ_id','id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}