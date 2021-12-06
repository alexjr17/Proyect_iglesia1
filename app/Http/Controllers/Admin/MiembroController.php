<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MiembroRequest;
use Illuminate\Http\Request;
use App\Models\Miembro;
use Illuminate\Support\Facades\Storage;


class MiembroController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.miembros.index')->only('index');
        $this->middleware('can:admin.miembros.create')->only('create', 'store');
        $this->middleware('can:admin.miembros.edit')->only('edit', 'update');
        $this->middleware('can:admin.miembros.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.miembros.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bautizo = [
            'Si' => 'Si',
            'No' => 'No'
        ];
        return view('admin.miembros.create', compact('bautizo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiembroRequest $request, Miembro $miembro)
    {

        

        $miembro = Miembro::create($request->all());

        if ($request->file('file')) {
            $url = Storage::disk('public')->put('miembro', $request->file('file'));
            $miembro->image()->create([
                'url' => $url
            ]);
        }

        if ($request->bautizo == 'Si') {
            $miembro->fecha()->create([
                'fecha' => $request->fecha
            ]);
        }

        return redirect()->route('admin.miembros.edit', $miembro)->with('info', 'El miembro se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Miembro $miembro)
    {
        return view('admin.miembros.show', compact('miembro'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Miembro $miembro)
    {
        // $this->authorize('autor', $miembro);
        $bautizo = [
            'Si' => 'Si',
            'No' => 'No'
        ];
        return view('admin.miembros.edit', compact('miembro', 'bautizo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MiembroRequest $request, Miembro $miembro)
    {
        $miembro->update($request->all());

        if ($request->file('file')) {

            $url = Storage::disk('public')->put('miembro', $request->file('file'));

            if ($miembro->image) {

                Storage::disk('public')->delete($miembro->image->url);
                
                $miembro->image()->update([
                    'url' => $url
                ]);
            }else{
                $miembro->image()->create([
                    'url' => $url
                ]);
            }
        }
        if ($request->bautizo == 'Si') {
            if ($request->fecha) {
                if ($miembro->fecha) {
                    $miembro->fecha->update([
                        'fecha' => $request->fecha
                    ]);
                }else{
                    $miembro->fecha()->create([
                        'fecha' => $request->fecha
                    ]);
                }
            }
        }else{
            $miembro->fecha()->delete();
        }
        

        return redirect()->route('admin.miembros.edit', $miembro)->with('info', 'El miembro se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miembro $miembro)
    {
        $miembro->delete();
        return redirect()->route('admin.miembros.index')->with('info', "El miembro se eliminado con exito");
    }
}
