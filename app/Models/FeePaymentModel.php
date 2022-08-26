<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeePaymentModel extends Model
{
    public function student()
    {
        return $this->hasOne('App\Models\StudentModel', 'id', 'Student_id');
    }
}
