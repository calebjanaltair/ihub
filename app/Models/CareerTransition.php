<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerTransition extends Model
{
    use HasFactory;

    protected $table = 'career_transitions';

    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'course_id',
        'status',
        'created_by',
        'updated_by',
    ];


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
