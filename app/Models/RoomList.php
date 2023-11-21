<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomList extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'room_cat_id',
        'room_no',
        'floor_no',
        'description',
        'capacity',
        'price',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = ['deleted_at'];

    public function roomCat()
    {
        return $this->belongsTo(RoomCat::class, 'room_cat_id');
    }
}
