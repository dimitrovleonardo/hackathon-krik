<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'age',
        'country',
        'description',
        'image',
        'term',
    ];
}
