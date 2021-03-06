<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    static $rules =[
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //uno a mucho
    public function ofrendas(){
        return $this->hasMany('App\Models\Ofrenda');
    }

    //uno a mucho
    public function miembros(){
        return $this->hasMany('App\Models\Miembro');
    }

    //uno a mucho
    public function diezmos(){
        return $this->hasMany('App\Models\Diezmo');
    }

    //uno a mucho
    public function gastos(){
        return $this->hasMany('App\Models\Gasto');
    }

    //uno a mucho
    public function carrucels(){
        return $this->hasMany('App\Models\Carrucel');
    }
}
