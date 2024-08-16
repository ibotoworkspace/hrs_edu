<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'other_names',
        'phone_number',
        'email',
        'your_conference_interest',
    ];
}
