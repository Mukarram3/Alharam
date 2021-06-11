<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiclecategory extends Model
{
    use HasFactory;
    protected $table='vehiclecategories';
    protected $fillable=['id','planId','title','image'];

    public function hasplan(){
        return $this->belongsTo(Plan::class,'planId');
    }
    public function hasvehicletypes(){
        return $this->hasMany(vehicletype::class,'id');
    }
}
