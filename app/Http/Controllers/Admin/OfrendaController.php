<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Miembro;
use App\Models\Ofrenda;
use Illuminate\Http\Request;

class OfrendaController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.ofrendas.index')->only('index');
        $this->middleware('can:admin.ofrendas.create')->only('create', 'store');
        $this->middleware('can:admin.ofrendas.edit')->only('edit', 'update');
        $this->middleware('can:admin.ofrendas.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ofrendas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ofrendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'recaudo' => 'numeric|required'
        ]);

        $ofrenda = Ofrenda::create($request->all());

        return redirect()->route('admin.ofrendas.edit', $ofrenda)->with('info', "La ofrenda se creo con exito");
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
    public function edit(Ofrenda $ofrenda)
    {
        return view('admin.ofrendas.edit', compact('ofrenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ofrenda $ofrenda)
    {
        $request->validate([
            'recaudo' => 'numeric|required'
        ]);

        $ofrenda->update($request->all());

        return redirect()->route('admin.ofrendas.edit', $ofrenda)->with('info', "La ofrenda se actulizo con exito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ofrenda $ofrenda)
    {
        $ofrenda->delete();
        return redirect()->route('admin.ofrendas.index')->with('info', "La ofrenda se elimino con exito");
    }
}
