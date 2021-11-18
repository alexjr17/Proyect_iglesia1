<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proposito;
use Illuminate\Http\Request;

class PropositoController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.propositos.index')->only('index');
        $this->middleware('can:admin.propositos.create')->only('create', 'store');
        $this->middleware('can:admin.propositos.edit')->only('edit', 'update');
        $this->middleware('can:admin.propositos.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propositos = Proposito::all();
        return view('admin.propositos.index', compact('propositos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.propositos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Proposito $proposito)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required | unique:propositos'
        ]);
        $proposito = Proposito::create($request->all());
        return redirect()->route('admin.propositos.edit', $proposito)->with('info', 'El proposito se creo con exito');
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
    public function edit(Proposito $proposito)
    {
        return view('admin.propositos.edit', compact('proposito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposito $proposito)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required | unique:propositos,slug,$proposito->id"
        ]);

        $proposito->update($request->all());

        return redirect()->route('admin.propositos.edit', $proposito)->with('info', 'El proposito se actualizo con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposito $proposito)
    {
        $proposito->delete();
        return redirect()->route('admin.propositos.index')->with('info', 'El proposito se elimino con exito');
    }
}
