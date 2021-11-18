<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofrenda extends Model
{
    use HasFactory;

    protected $fillable = ['recaudo', 'user_id'];

    //uno a mucho inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
