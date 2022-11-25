<?php
//view/campo/add
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'User';
    protected $fillable = [
      'Nombre',
    'Img_user',
    'Matricula'
    
  ];

    public function Direction(){
        return $this->hasOne('App\Models\Direction');
    }

   public function Cuatrimestre(){
        return $this->hasOne('App\Models\Cuatrimestre');
    }
    
    public function Trajectory(){
        return $this->hasOne('App\Models\Trajectory');
    }
    

    public $timestamps=false;

}
