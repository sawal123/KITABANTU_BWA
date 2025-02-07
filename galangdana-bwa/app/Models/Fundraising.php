<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fundraising extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'target_amount',
        'about',
        'has_finished',
        'is_active',
        'thumbnail',
        'fundraiser_id',
        'category_id',
     ];


    //  ORM
     public function category(){
        return $this->belongsTo(Category::class);
     }
     public function fundraiser(){
        return $this->belongsTo(Fundraiser::class);
     }
     public function donatur(){
        return $this->hasMany(Donatur::class)->where('is_paid', 1);
     }

     public function totalReachAmount(){
        return $this->donatur()->sum('total_amount');
     }
     public function withdrawals(){
        return $this->hasMany(FundraisingWithdrawals::class);
     }
}
