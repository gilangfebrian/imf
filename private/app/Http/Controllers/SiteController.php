<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class SiteController extends Controller {
    public function haloJuga()
    {
	return View ('halo_juga');
    }
    
    public function login(validasilogin $validasi){
        
        if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')]))
        {
            if(Auth::user()->hak_akses=="admin"){
                return Redirect::to('admin');
            }
            else{
                return Redirect::to('user');
            }
        }
        else{
            echo "gagal login";
        }
    }
}
