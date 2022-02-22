<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MiembroRequest;
use Illuminate\Http\Request;
use App\Models\Miembro;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class MiembroController extends Controller
{
    public $token, $countries, $states, $cities, $bautizo;
    public $pais_select = 'Colombia';
    public $departamento_select = 'Sucre';

    public function __construct()
    {
        $this->middleware('can:admin.miembros.index')->only('index');
        $this->middleware('can:admin.miembros.create')->only('create', 'store');
        $this->middleware('can:admin.miembros.edit')->only('edit', 'update');
        $this->location();
        $this->bautizo = [
            'Si' => 'Si',
            'No' => 'No'
        ];
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
        $cities = $this->cities->json();
        $bautizo = $this->bautizo;
        return view('admin.miembros.create', compact('cities', 'bautizo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $cities = $this->cities->json();
        $bautizo = $this->bautizo;
        return view('admin.miembros.edit', compact('miembro', 'bautizo','cities'));
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
            } else {
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
                } else {
                    $miembro->fecha()->create([
                        'fecha' => $request->fecha
                    ]);
                }
            }
        } else {
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
    public function location()
    {
        $response = Http::withHeaders([
            "Accept" => "application/json",
            "api-token" => "fg2Xui7q-Wbf5yjIU1h6dQUF46kPmmUiEQnhULVWmGcy5OvjdYYqkD1yXb0kkUjZX8o",
            "user-email" => "alexjose.r.r@gmail.com"
        ])->get('https://www.universal-tutorial.com/api/getaccesstoken', [
            'name' => 'Taylor',
        ]);
        $this->token = $response->json('auth_token');

        $this->countries = Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json"
        ])->get('https://www.universal-tutorial.com/api/countries/', [
            'name' => 'Taylor',
        ]);

        $this->states = Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json"
        ])->get('https://www.universal-tutorial.com/api/states/' . $this->pais_select, [
            'name' => 'Taylor',
        ]);

        $this->cities = Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json"
        ])->get('https://www.universal-tutorial.com/api/cities/' . $this->departamento_select, [
            'name' => 'Taylor',
        ]);
    }
}
