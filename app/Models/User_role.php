<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    protected $fillable = [
        'userid',
        'roleid',
        'role_name' => 'user',
    ];
}
