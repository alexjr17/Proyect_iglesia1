<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diezmo;
use App\Models\Miembro;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class DiezmoController extends Controller
{

    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function __construct()
    {
        $this->middleware('can:admin.diezmos.index')->only('index');
        $this->middleware('can:admin.diezmos.create')->only('create', 'store');
        $this->middleware('can:admin.diezmos.edit')->only('edit', 'update');
        $this->middleware('can:admin.diezmos.destroy')->only('destroy');
    }

    // public function updatingSearch(){
    //     $this->resetPage();
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.diezmos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function create()
    {
        return view('admin.diezmos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Diezmo $miembro)
    {
        $request->validate([
            'monto' => 'required',
            'miembro_id' => 'required'
        ]);
        
        $diezmo = Diezmo::create($request->all());

        return redirect()->route('admin.diezmos.edit', $diezmo)->with('info', 'El diezmo se creo con exito');
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
    public function edit(Diezmo $diezmo)
    {
        
        $miembros = Miembro::where('id', $diezmo->miembro_id)->get();

        return view('admin.diezmos.edit', compact('diezmo', 'miembros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diezmo $diezmo)
    {
        $request->validate([
            'monto' => 'required',
            'miembro_id2' => 'required'
        ]);

        if ($request->miembro_id) {
            $request->miembro_id = $request->miembro_id;
        }else{
            $request->miembro_id = $request->miembro_id2;
        }

        $diezmo->update($request->all());
        return redirect()->route('admin.diezmos.edit', $diezmo)->with('info', 'El diezmo se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diezmo $diezmo)
    {
        $diezmo->delete();
        return redirect()->route('admin.diezmos.index')->with('info', 'El diezmo se elimino con exito');
    }
}
