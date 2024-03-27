<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'full_name',
        'dob',
        'place_of_birth',
        'gender',
        'ethnicity',
        'phone_number',
        'student_batch',
        'major',
        'registration_date',
        'note',
        'level'
    ];
}
