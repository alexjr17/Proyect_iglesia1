<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    use HasFactory;

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }   

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //uno a mucho
    public function diezmos(){
        return $this->hasMany('App\Models\Diezmo');
    }

    //uno a uno polimorfica
    public function fecha(){
        return $this->morphOne('App\Models\Bautizo', 'bautizoable');
    }

    //uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    
}
