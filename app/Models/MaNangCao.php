<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaNangCao extends Model
{
    use HasFactory;

    protected $table = 'ma_nang_cao';

    protected $fillable = [ 
        'maso',
    ];
}
