<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundraisingWithdrawals extends Model
{
    use HasFactory;

    protected $fillable = [
        'proof',
        'bank_name',
        'bank_account_name',
        'bank_account_number',
        'amount_requested',
        'amount_received',
        'has_received',
        'has_set',
        'fundraising_id',
        'fundraiser_id',
      
     ];
    
     public function fundraising(){
        return $this->belongsTo(Fundraising::class);
     }
     public function fundraiser(){
        return $this->belongsTo(Fundraiser::class);
     }

}
