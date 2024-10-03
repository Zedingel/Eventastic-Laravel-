<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'occasion', 'guests', 'event_repeat', 'venue',
        'event_date', 'time_of_day', 'event_duration',
        'theme', 'decor', 'catering', 'budget', 'music',
        'photo_entertainment', 'name', 'email', 'phone',
        'company', 'special_requests', 'access_requirements',
        'dietary_restrictions'
    ];
}
