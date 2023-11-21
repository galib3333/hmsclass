<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'desig_name',
        'desig_des',
        'status',
        'created_by',
        'updated_by',
    ];
}
