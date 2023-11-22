<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blood extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'blood';
    protected $fillable = [
        'blood_type_name',
        'status',
        'created_by',
        'updated_by',
    ];
}
