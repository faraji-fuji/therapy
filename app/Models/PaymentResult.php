<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentResult extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        // payment results
        'merchantRequestID',
        'checkoutRequestID',
        'resultCode',
        'resultDescription',
        'amount',
        'mpesaReceiptNumber',
        'transactionDate',
        'phoneNumber',
    ];
}
