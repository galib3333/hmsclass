<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestCat extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'invset_cat_name',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function investLists()
    {
        return $this->hasMany(InvestList::class, 'inv_cat_id');
    }
}
