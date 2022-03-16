<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrucel extends Model
{
    use HasFactory;

    protected $table = 'carrucels';

    protected $fillable = ['title', 'descripcion','user_id'];

    static $rules = [
        'title' => 'required',
        'descripcion' => 'required',
        'file' => 'image'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
