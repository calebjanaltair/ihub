<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $table = 'updates';

    protected $fillable = [
        'token',
        'status',
        'action',
    ];

    public function scopeNotSent($query)
    {
        return $query->where('status', 0);
    }

    public function scopeSent($query)
    {
        return $query->where('status', 1);
    }
}
