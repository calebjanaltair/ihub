<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ihubNews extends Model
{
    use HasFactory;

    protected $table = 'ihub_news';

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'link',
        'status',
        'created_by',
        'updated_by',
    ];

    // Define the relationship with the User model for created_by
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Define the relationship with the User model for updated_by
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
