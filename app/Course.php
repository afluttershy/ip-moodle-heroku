<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses'; 
    protected $fillable = ['course_id', 'course_full_name', 'course_short_name'];
}
