<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Trajectory extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='Trajectory';
    protected $fillable = [
        'Name_Trayectory',
        'Length',
        'Latitude'
    ];

    public function User(){
        return $this->hasMany(User::class,'ID_Trajectory',);
    }

    public function Detail(){
        return $this->hasMany('App\Models\Detail');
    }
     
    public $timestamps=false;
}
