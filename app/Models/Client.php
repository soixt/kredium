<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email_address', 'phone_number'];

    protected $appends = ['fullName'];

    protected $with = ['cashLoanProduct', 'homeLoanProduct'];

    public function cashLoanProduct () {
        return $this->hasOne(CashLoanProduct::class);
    }
    
    public function homeLoanProduct () {
        return $this->hasOne(HomeLoanProduct::class);
    }

    protected function fullName (): Attribute {
        return Attribute::make(
            get: fn () => $this->first_name . " " . $this->last_name
        );
    }
}
