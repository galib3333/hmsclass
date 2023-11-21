<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'type',
        'identity',
        'status',
        'created_by',
        'updated_by',
    ];
    
    public function users(){
        return $this->hasMany(User::class);
    }
    public function employBasics()
    {
        return $this->hasMany(EmployBasic::class, 'role_id');
    }
}
