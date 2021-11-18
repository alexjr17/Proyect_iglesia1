<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    protected $table = 'gastos';
    protected $guarded = [];

    //uno a mucho
    public function proposito(){
        return $this->belongsTo('App\Models\Proposito');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
