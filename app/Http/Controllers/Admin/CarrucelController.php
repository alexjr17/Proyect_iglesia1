<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrucel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarrucelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.carrucel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carrucel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Carrucel $carrucel)
    {
        $request->validate(Carrucel::$rules);
        
        $carrucel = Carrucel::create($request->all());
        if ($request->file('file')) {
            $url = Storage::disk('public')->put('miembro', $request->file('file'));
            $carrucel->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.carrucel.edit', $carrucel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrucel $carrucel)
    {
        return view('admin.carrucel.edit', compact('carrucel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrucel $carrucel)
    {
        $request->validate(Carrucel::$rules);

        $carrucel->update($request->all());
        if ($request->file('file')) {

            $url = Storage::disk('public')->put('miembro', $request->file('file'));

            if ($carrucel->image) {

                Storage::disk('public')->delete($carrucel->image->url);
                
                $carrucel->image()->update([
                    'url' => $url
                ]);
            }else{
                $carrucel->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.carrucel.edit', $carrucel)->with('info', 'Se actualizo conexito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrucel $carrucel)
    {
        $carrucel->delete();
        return redirect()->route('admin.carrucel.index')->with('info', "Se eliminado con exito");
    }
}
