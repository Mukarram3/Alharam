<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finance extends Model
{
    use HasFactory;

    protected $table='finances';
    protected $fillable=['id','planId','title','description','tenure_year','total_amount','installments','instal_duration'];
    public function hasplan(){
        return $this->belongsTo(Plan::class,'planId');
    }
    public function hasfinancesubmit(){
        return $this->hasMany(financesubmit::class,'id');
    }
}

