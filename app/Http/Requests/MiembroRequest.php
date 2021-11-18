<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiembroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if ($this->user_id == auth()->user()->id) {
        //     return true;
        // }else{
        //     return false;
        // }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $miembro = $this->route()->parameter('miembro');

        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'slug' => 'required | unique:miembros',
            'cedula' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'bautizo' => 'required',
            'file' => 'image'
        ];
        if ($miembro) {
            $rules = ['slug' => 'required | unique:miembros,slug,'.$miembro->id,];
        }
        if ($this->bautizo == 'Si') {
           $rules = array_merge($rules, [
               'fecha' => 'required'
           ]);
        }

        return $rules;
    }
}
