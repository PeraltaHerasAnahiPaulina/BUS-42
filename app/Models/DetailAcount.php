<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailAcount extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='DetailAcount';
    protected $fillable = [
        'ID_User',
        'ID_Driver'
    ];

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

   public function Acount(){
        return $this->hasOne(' App\Models\Acount');
    }

    public function Driver(){
        return $this->belongsTo(' App\Models\Driver');
    }
    
    public $timestamps=false;
}
