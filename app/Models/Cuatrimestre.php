<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuatrimestre extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='Cuatrimestre';
    protected $fillable = [
        'Cuatrimestre'
    ];


    public function User(){
        return $this->hasMany('App\Models\User');
    }

    //public $timestamps=false;
}
