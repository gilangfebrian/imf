<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasitambah extends Request
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
            'alamat'=>'required',
            'kelas'=>'required'
            ];
    }
    public function messages()
    {
        return [
            'nama.required'=>'harus mengisi nama',
            'alamat.required'=>'format bukan alamat',
            'kelas.required'=>'harus mengisi kelas',
        ];
    }
}