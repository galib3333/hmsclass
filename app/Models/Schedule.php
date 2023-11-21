<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'employ_id',
        'day_id',
        'shift_id',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function employee()
    {
        return $this->belongsTo(EmployBasic::class, 'employ_id');
    }

    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id');
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }
}
