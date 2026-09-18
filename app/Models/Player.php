<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'first_name',
        'surname',
        'date_of_birth',
        'gender',
        'contact_number',
        'email',
        'position',
        'age_category',
        'district',
        'current_team',
        'emergency_contact_name',
        'emergency_contact_number',
        'profile_photo',
    ];
}