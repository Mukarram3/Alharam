<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicletype extends Model
{
    use HasFactory;
    protected $table='vehicletypes';
    protected $fillable=['id','vehiclecatId','title','price','image','description','engine_cap','seat_cap','doors','fuel_type','transm_type','version','colours'];

    public function hasplan(){
        return $this->belongsTo(vehicleCategory::class,'vehiclecatId');
    }
    public function hasvehiclecategory(){
        return $this->belongsTo(vehicleCategory::class,'vehiclecatId');
    }
}
