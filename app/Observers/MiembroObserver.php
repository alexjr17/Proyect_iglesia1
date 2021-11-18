<?php

namespace App\Observers;

use App\Models\Miembro;
use Illuminate\Support\Facades\Storage;

class MiembroObserver
{
    /**
     * Handle the Miembro "created" event.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return void
     */
    public function creating(Miembro $miembro)
    {
        if (! \App::runningInConsole()) {
            $miembro->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Miembro "deleted" event.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return void
     */
    public function deleting(Miembro $miembro)
    {
        if ($miembro->image) {
            Storage::disk('public')->delete($miembro->image->url);
        }
        if ($miembro->fecha) {
            $miembro->fecha()->delete();
        }
    }

    
}
