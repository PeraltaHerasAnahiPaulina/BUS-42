<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Driver extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='Driver';
    protected $fillable = [
        'Name_Driver',
        'Phone_Number',
        'Age',
        'License',
        'ID_Center'
    ];

    public function Center(){
        return $this->HasOne('App\Models\Center');
    }
    public function Bus(){
        return $this->HasOne('App\Models\Bus');
    }
    public function DetailAcount(){
        return $this->HasMany('App\Models\DetailAcount');
    }

    public $timestamps=false;

}
