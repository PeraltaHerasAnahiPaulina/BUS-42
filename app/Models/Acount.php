<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Acount extends Model
{
    use HasFactory,SofTDeletes;
    
   // protected $primaryKey = 'ID';
   protected $table = 'acounts';
    protected $fillable = [
      'Email',
       'Password'
  ];
   
  //public function acount(){
//return $this ->table('App\Models\Acount;');
  // }

  public function DetailAcount(){
    return $this-> HasMany('App\Models\DetailAcount');
  }
  
   // public $timestamps=false;

}
