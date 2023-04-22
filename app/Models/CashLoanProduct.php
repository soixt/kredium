<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CanUserEdit;

class CashLoanProduct extends Model
{
    use HasFactory, CanUserEdit;

    protected $fillable = ['client_id', 'adviser_id', 'loan_amount'];
}
