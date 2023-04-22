<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CanUserEdit;

class HomeLoanProduct extends Model
{
    use HasFactory, CanUserEdit;

    protected $fillable = ['client_id', 'adviser_id', 'down_payment_amount', 'property_value'];
}
