<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gasto;
use App\Models\Proposito;
use Illuminate\Http\Request;

class GastoController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.gastos.index')->only('index');
        $this->middleware('can:admin.gastos.create')->only('create', 'store');
        $this->middleware('can:admin.gastos.edit')->only('edit', 'update');
        $this->middleware('can:admin.gastos.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gastos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propositos = Proposito::pluck('nombre', 'id');
        return view('admin.gastos.create', compact('propositos'));
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
            'monto' => 'required | numeric',
            'detalle' => 'required | min:10',
            'proposito_id' => 'required'
        ]);

        $gasto = Gasto::create($request->all());

        return redirect()->route('admin.gastos.edit', $gasto)->with('info', 'El gasto creo con exito');
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
    public function edit(Gasto $gasto)
    {
        $propositos = Proposito::pluck('nombre', 'id');
        return view('admin.gastos.edit', compact('gasto', 'propositos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        $request->validate([
            'monto' => 'required | numeric',
            'detalle' => 'required | min:10',
            'proposito_id' => 'required'
        ]);

        $gasto->update($request->all());

        return redirect()->route('admin.gastos.edit', $gasto)->with('info', 'El gasto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        return redirect()->route('admin.gastos.index')->with('info', 'El gasto eliminado con exito');
    }
}
