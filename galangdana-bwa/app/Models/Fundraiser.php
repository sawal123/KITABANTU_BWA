<?php

namespace App\Models;

use App\Models\Fundraising;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fundraiser extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
       'user_id',
       'is_active'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function fundraising(){
        return $this->hasMany(Fundraising::class);
    }

}
