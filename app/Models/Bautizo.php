<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bautizo extends Model
{
     use HasFactory;

     protected $fillable = ['fecha'];

    public function bautizoable(){
        return $this->morphTo();
    }
}
