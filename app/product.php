<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['id','vehicleId','title','price','image','description','engine_cap','seat_cap','doors','fuel_type','transm_type','version','colours'];

    public function hasplan(){
        return $this->belongsTo(vehicleCategory::class,'vehicleId');
    }

}
