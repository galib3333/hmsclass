<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientTestDetail extends Model
{
    use HasFactory;

    public function test()
    {
        return $this->belongsTo(PatientTest::class);
    }

    public function investList()
    {
        return $this->belongsTo(InvestList::class, 'inv_list_id');
    }
}
