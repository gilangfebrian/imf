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
use App\Http\Requests\validasitest;
use App\Fileentry;
use Illuminate\Http\Response;
use Session;
use Validator;

class TestController extends Controller
{
    //
    public function pretestanswer(validasitest $data){
        
       $RbJawaban = Input::get('RbJawaban');
       $idquest = Input::get('idquest');
        
       foreach($idquest as $indeks=>$nilai){
       $answer = $RbJawaban[$indeks];
       $nip = Input::get('nip');
       $train = Input::get('train');
       $subtrain = Input::get('subtrain');
       $sub = Input::get('sub');
       $prepost = Input::get('prepost');
       
      
       $data = array(
    
        'nip' => $nip,
        'train' => $train,
        'subtrain' => $subtrain,
        'sub' => $sub,
        'prepost' => $prepost,
        'idquest' => $nilai,
        'ans' => $answer,
        );
        
        DB::table('response')->insert($data);
        
        }
        
        foreach($idquest as $indeks=>$nilai){
        $answer = $RbJawaban[$indeks];
        $data = DB::select("select * from questions where id=$indeks;"); 
        $data = $data[0];
        $kunci = $data->kunci;
        $nip = Input::get('nip');
        $train = Input::get('train');
        $subtrain = Input::get('subtrain');
        $sub = Input::get('sub');
        $prepost = Input::get('prepost');
        if (empty($answer)) $benar = $benar + 10;
        if ($answer == 'a') $benar = $benar + 50 ;
        else { $benar = $benar + 100; } }
        
        $datapre = array (
        'pretest' => $benar,        
        );
        
        DB::table('report')->where('nip','=',$nip)->where('train','=',$train)->where('subtrain','=',$subtrain)->update($datapre);
        
        return view('user.pretestanswer')->with('message','Pretest Selesai');
        }
    
    
    public function posttestanswer(validasitest $data){
        
       $RbJawaban = Input::get('RbJawaban');
       $idquest = Input::get('idquest');
        
       foreach($idquest as $indeks=>$nilai){
       $answer = $RbJawaban[$indeks];
       $nip = Input::get('nip');
       $train = Input::get('train');
       $subtrain = Input::get('subtrain');
       $sub = Input::get('sub');
       $prepost = Input::get('prepost');
       
       
      
       $data = array(
    
        'nip' => $nip,
        'train' => $train,
        'subtrain' => $subtrain,
        'sub' => $sub,
        'prepost' => $prepost,
        'idquest' => $nilai,
        'ans' => $answer,
        );
        
        DB::table('response')->insert($data);
        
        }
        
        return view('user.posttestanswer')->with('message','Posttest Selesai');
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