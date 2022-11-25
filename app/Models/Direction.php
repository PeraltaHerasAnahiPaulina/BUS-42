<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='Direction';
    protected $fillable = [
        'Name_Direction'
    ];

    public function User(){
        return $this->HasMany('App\Models\User');
    }

    public $timestamps=false;
}
