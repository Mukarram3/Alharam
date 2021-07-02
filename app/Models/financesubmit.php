<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financesubmit extends Model
{
    use HasFactory;
    protected $table=['financesubmit'];
    protected $fillable=['id','mobile','notes','username'];

    public function hasfinance(){
        return $this->belongsTo(finance::class,'financeid');
    }
}
