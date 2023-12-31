<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestList extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'inv_cat_id',
        'invset_name',
        'description',
        'price',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function investCategory()
    {
        return $this->belongsTo(InvestCat::class, 'inv_cat_id');
    }
}
