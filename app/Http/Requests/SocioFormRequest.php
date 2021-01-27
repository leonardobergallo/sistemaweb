<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocioFormRequest extends FormRequest
{
    /**
     * Determine if the Socio is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'Domicilio' => 'required|max:255',
            'Localidad' => 'required|max:255',
            'Enco' => 'max:255',
            'Zon' => 'max:255',
            'Of' => 'max:255',
            'Colabor' => 'max:255',
            'En' => 'max:255',
            'Tarjeta' => 'max:255',
            'FAlta' => 'max:255',
            'UlPago' => 'max:255',
            'Imp' => 'max:255',
            'ClaseSocio' => 'max:255',
            'email' => 'max:255',
            'Programa' => 'max:255',
            
            
            
        ];
    }
}
