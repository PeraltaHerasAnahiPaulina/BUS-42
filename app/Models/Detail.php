<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Detail extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='Detail';
    protected $fillable = [
        'ID_Bus',
        'ID_Truck_stop',
        'ID_Trajectory'
    ];

    public function Trajectory(){
        return $this->belongsTo('App\Models\Trajectory');
    }

   public function Bus(){
        return $this->belongsTo(' App\Models\Bus');
    }

    public function TruckStop(){
        return $this->belongsTo(' App\Models\TruckStop');
    }

   // public $timestamps=false;
}
