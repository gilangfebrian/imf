<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasilap extends Request
{
    /**
    * Determine if the user is authorized to make this request
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
            'nama'=>'required',
            'nip'=>'required',
            'unit'=>'required',
            'image'=>'required',
            ];
    }
    public function messages()
    {
        return [
            'nama.required'=>'harus mengisi nama',
            'nip.required'=>'harus mengisi nip',
            'unit.required'=>'harus mengisi unit',
            'image.required'=>'harus mengisi foto',      
        ];
    }
}