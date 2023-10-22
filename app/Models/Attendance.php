<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    public function emp(){
        return $this->belongsTo('App\Models\Employee', 'employee_id', 'employee_id');
    }
}
