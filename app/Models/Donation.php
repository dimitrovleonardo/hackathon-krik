<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'donor_name',
        'email',
        'card_number', // Only last 4 digits if needed, never store full card details
        'expiration_date',
        'phone_number',
        'card_holder_name',
        'amount',
    ];
}
