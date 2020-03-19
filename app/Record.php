<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'session',
        'nhs_patient_number',
        'date_of_birth',
        'severity',
        'underlying_conditions',
        'dependants',
        'public_exposure_last_date'
    ];
}
