<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table='plans';
    protected $fillable = ['id','title','image','description','btn_name'];


    public function hasvehiclecategory(){
        return $this->hasMany(vehicleCategory::class,'id');
    }
    public function hasfinance(){
        return $this->hasMany(finance::class,'id');
    }

}
