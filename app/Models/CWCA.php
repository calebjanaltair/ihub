<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CWCA extends Model
{
    use HasFactory;
    protected $table = 'c_w_c_a_s';

    protected $fillable = [
        'name',
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
