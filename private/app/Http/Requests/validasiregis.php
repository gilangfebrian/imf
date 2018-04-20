<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasiregis extends Request
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
            'degree'=>'required',
            'unit'=>'required',
            'address'=>'required',
            'email'=>'required',
            'telp'=>'required',
            'aplikasi'=>'required',
            'wa'=>'required',
            'lo'=>'required',
            'cv_doc'=>'required',
            ];
    }
    public function messages()
    {
        return [
            'nama.required'=>'harus mengisi nama',
            'nip.required'=>'harus mengisi nip',
            'degree.required'=>'harus mengisi golongan',
            'unit.required'=>'harus mengisi unit',
            'address.required'=>'harus mengisi Alamat',
            'email.required'=>'harus mengisi email',
            'telp.required'=>'harus mengisi telepon',
            'aplikasi.required'=>'harus mengisi aplikasi',
            'wa.required'=>'harus mengisi npwp',
            'lo.required'=>'harus mengisi rekening',
            'cv_doc.required'=>'harus mengisi foto',      
        ];
    }
}