<?php

namespace App\Policies;

use App\Models\Miembro;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MiembroPolicy
{
    use HandlesAuthorization;

    public function autor(User $user, Miembro $miembro){
        if ($user->id == $miembro->user_id) {
            return true;
        }else{ 
            return false;
        }
    }

    // public function publicado(?User $user, Miembro $miembro){
    //     if ($miembro->statu == 2) {
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
}
