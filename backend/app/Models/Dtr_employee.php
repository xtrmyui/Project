<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dtr_employee extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'time_in',
        'time_out',
        'user_id'
    ];

    protected $hidden = [
        
    ];
}
