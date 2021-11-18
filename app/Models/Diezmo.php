<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diezmo extends Model
{
    use HasFactory;

    protected $table = 'diezmos';
    protected $fillable = ['monto', 'user_id', 'miembro_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function miembro(){
        return $this->belongsTo('App\Models\Miembro');
    }
}
