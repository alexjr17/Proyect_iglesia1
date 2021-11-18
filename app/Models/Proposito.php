<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposito extends Model
{
    protected $table = 'propositos';
    protected $fillable = ['nombre', 'slug'];
    use HasFactory;

    public function gastos(){
        return $this->hasMany('App\Models\Gasto');
    }
}
