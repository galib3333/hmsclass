<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'test_id',
        'inv_list_id',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function investList()
    {
        return $this->belongsTo(InvestList::class, 'inv_list_id');
    }
}
