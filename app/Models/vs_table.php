<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vs_table extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaitel_date',
        'vaitel_time',
        'temperature',
        'bp_up',
        'bp_under',
        'pulse',
        'vaitel_comment',
    ];
}
