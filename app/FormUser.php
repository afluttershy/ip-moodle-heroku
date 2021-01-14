<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormUser extends Model
{
    protected $table = 'formusers'; 
    protected $fillable = ['name', 'phone', 'email', 'course', 'password'];
}
