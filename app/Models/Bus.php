<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    use HasFactory,SoftDeletes; 
    protected $table='TruckStop';
    protected $fillable = [
        'Matricula',
        'ID_Driver'
    ];



    public function Driver(){
        return $this -> HasOne ('App\Models\Driver');
    }

    public function Detail(){
        return $this->hasMany('App\Models\Detail');
    }
   // public $timestamps=false;
}
