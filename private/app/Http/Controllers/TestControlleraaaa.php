<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\controller;
use Input;
use DB;
use Redirect;
use View;
use Auth;
use App\Http\Requests\validasilogin;
use App\Http\Requests\validasiregister;
use App\Http\Requests\validasitambah;
use App\Http\Requests\validasiregis;
use App\Fileentry;
use Illuminate\Http\Response;
use Session;
use Validator;

class TestController extends Controller
{
    //
    public function pretestanswer(){
        
        foreach($RbJawaban as $indeks=>$nilai){
    
       $data = array(
    
        'nip' => Input::get('nip'),
        'train' => Input::get('train'),
        'subtrain' => Input::get('subtrain'),
        'sub' => Input::get('sub'),
        'prepost' => Input::get('prepost'),
        );
        
        DB::table('response')->insert($data);
        
        }
        
        return Redirect::to('pretestanswer')->with('message','berhasil menambah data');
           
    }
    
    
    
    public function processtrain(){
        $RbJawaban = Input::get('RbJawaban');
        foreach($RbJawaban as $indeks=>$nilai){
        $data = DB::table('questions')->where('id','=',$indeks and 'sub','=','1')->first();
        
        if (empty($nilai)) $benar = 0;
	    if ($data['kunci'] == $nilai) $benar = $benar + 4 ;
	    else { $benar = $benar - 1; } 
        }
        
        
            
        $data_jum = DB::table('questions')
            ->select(DB::raw('count(*) as jum_soal, sub'))
            ->where('sub','=','1')
            ->groupBy('sub')
            ->get();
        
        return View::make('pretestanswer')->with($data)->with($data_jum);
    }
}