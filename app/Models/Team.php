<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    protected $fillable = [
        'name',
        'short_name',
        'team_logo',
        'district_id',
        'team_type',
        'contact_person',
        'contact_number',
        'email',
    ];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}

