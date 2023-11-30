<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;

    protected $table = 'user_permissions';

    protected $fillable = [
        'user_id',
        'MainModule',
        'TrainingModule',
        'StartupsModule',
        'blogModule',
        'fellowshipModule',
        'ConsultancyModule',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hasMainModule()
    {
        return $this->MainModule;
    }

    public function hasTrainingModule()
    {
        return $this->TrainingModule;
    }

    public function hasStartupsModule()
    {
        return $this->StartupsModule;
    }

    public function hasBlogModule()
    {
        return $this->blogModule;
    }

    public function hasFellowshipModule()
    {
        return $this->fellowshipModule;
    }

    public function hasConsultancyModule()
    {
        return $this->ConsultancyModule;
    }

}
