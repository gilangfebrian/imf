<?php

namespace App\Http\Controllers;

use Input;
use DB;
use Redirect;
use View;
use App\Http\Requests\validasiregis;


class Crudcontroller extends Controller
{

    public function registrasi(){
         	
        return View::make('login.registrasi');
        
    }
    
    
    public function processregist(validasiregis $data){
        
    /* Ini Untuk Nambah Upload Foto */ 
    $destinationPath = 'uploads/foto'; // upload path
    $extension = Input::file('cv_doc')->getClientOriginalExtension(); // getting image extension
    $fileName = Input::get('nip').'.'.$extension; // renameing image
    Input::file('cv_doc')->move($destinationPath, $fileName); // uploading file to given path
    
    $destinationPathpdf = 'uploads/st'; // upload path
    $extensionpdf = Input::file('pdf')->getClientOriginalExtension(); // getting image extension
    $fileNamepdf = Input::get('nip').'.'.$extensionpdf; // renameing pdf
    Input::file('pdf')->move($destinationPathpdf, $fileNamepdf); // uploading file to given path
        
    $destinationPath = 'uploads/ktp'; // upload path
    $extension = Input::file('ktp_doc')->getClientOriginalExtension(); // getting image extension
    $fileName = Input::get('nip').'.'.$extension; // renameing image
    Input::file('ktp_doc')->move($destinationPath, $fileName); // uploading file to given path
        
    $destinationPathpdf = 'uploads/english'; // upload path
    $extensionpdf = Input::file('english_doc')->getClientOriginalExtension(); // getting image extension
    $fileNamepdf = Input::get('nip').'.'.$extensionpdf; // renameing pdf
    Input::file('english_doc')->move($destinationPathpdf, $fileNamepdf); // uploading file to given path
        
    $destinationPath = 'uploads/lang'; // upload path
    $extension = Input::file('lang_doc')->getClientOriginalExtension(); // getting image extension
    $fileName = Input::get('nip').'.'.$extension; // renameing image
    Input::file('lang_doc')->move($destinationPath, $fileName); // uploading file to given path
        
    $nama=$data->nama;
    $nip=$data->nip;
    $kel=$data->kel;
    $status=$data->status;
    $unit=$data->unit;
    $address=$data->address;
    $email=$data->email;
    $telp=$data->telp;
    $wa=$data->wa;
    $lo=$data->lo;
    $ibt=$data->get('ibt');
    $itp=$data->get('itp');
    $ielts=$data->get('ielts');
    $prancis=$data->has('perancis');
    $jerman=$data->has('jerman');
    $spanyol=$data->has('spanyol');
    $arab=$data->has('arab');
    $rusia=$data->has('rusia');
    $user=$data->nip;
    $pass=bcrypt($data->nip);
    $tempat=$data->tempat;
    $subtrain = 'apps';
    $st=$data->st;
    
    $data = array(
        'nama' => Input::get('nama'),
        'nip' => Input::get('nip'),
        'degree' => Input::get('degree'),
        'kel' => Input::get('kel'),
        'status' => Input::get('status'),
        'unit' => Input::get('unit'),
        'tempat' => Input::get('tempat'),
        'subtrain' => 'apps',
        'address' => Input::get('address'),
        'email' => Input::get('email'),
        'telp' => Input::get('telp'),
        'wa' => Input::get('wa'),
        'twitter' => Input::get('twitter'),
        'facebook' => Input::get('facebook'),
        'instagram' => Input::get('instagram'),
        'medsos' => Input::get('medsos'),
        'ibt' => $ibt,
        'itp' => $itp,
        'ielts' => $ielts,
        'lang' => Input::get('lang'),
        'prancis' => $prancis,
        'jerman' => $jerman,
        'spanyol' => $spanyol,
        'arab' => $arab,
        'rusia' => $rusia,
        'org' => Input::get('org'),
        'lo' => Input::get('lo'),
        'cv_doc' => 'uploads/foto/'.Input::get('nip').'.'.$extension,
        'ktp_doc' => 'uploads/ktp/'.Input::get('nip').'.'.$extension,
        'english_doc' => 'uploads/english/'.Input::get('nip').'.'.$extension,
        'lang_doc' => 'uploads/lang/'.Input::get('nip').'.'.$extension,
		'st' => 'uploads/st/'.Input::get('nip').'.'.$extensionpdf,
    );
    
    DB::table('peserta') ->insert($data);
        
    return Redirect::to('/registrasisuccess')->withInput();
    
    }
    
}