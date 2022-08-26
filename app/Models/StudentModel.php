<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    public function myClass()
    {
        return $this->hasOne('App\Models\ClassModel', 'id', 'Class_id');
    }
}
