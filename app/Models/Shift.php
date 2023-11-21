<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shift extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        's_name',
        'start',
        'end_time',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];
}
