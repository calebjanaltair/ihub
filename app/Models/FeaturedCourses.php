<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedCourses extends Model
{
    use HasFactory;

    protected $table = 'featured_courses';

    protected $fillable = [
        'course_id',
    ];
}
