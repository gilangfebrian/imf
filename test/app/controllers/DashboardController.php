<?php

class DashboardController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = DB::table('d_trainings')->get();
        $datapro = DB::table('d_profile')->where('nama','=', 'Not Registered Yet')->get();

        return View::make('dashboards.index')
            ->with('d_trainings',$data)
            ->with('d_profile',$datapro);
    }
    
    public function quiz()
    {
        $soals      = Soal::orderBy('updated_at', 'desc')->limit(5)->get();
        $soalscount = Soal::count();

        $lembars         = Lembar::orderBy('updated_at', 'desc')->get();
        $lembarscount    = Lembar::count();
        $userJawabLembar = UserJawabLembar::whereRaw('user_id = ?', array(Sentry::getUser()->id))->orderBy('id', 'desc')->get();

        return View::make('dashboards.quiz')
            ->with('soals', $soals)
            ->with('soalscount', $soalscount)
            ->with('lembars', $lembars)
            ->with('userJawabLembars', $userJawabLembar)
            ->with('lembarscount', $lembarscount);
    }
    
    public function processeval(){
        
        $data = array (
        
        'usia' => Input::get('usia'),
        'kel' => Input::get('kel'),
        'study' => Input::get('study'),
        '0' => Input::get('RbJawaban'),
        '1' => Input::get('RbJawaban1'),
        '2' => Input::get('RbJawaban2'),
        '3' => Input::get('RbJawaban3'),
        '4' => Input::get('RbJawaban4'),
        '5' => Input::get('RbJawaban5'),
        '6' => Input::get('RbJawaban6'),
        '7' => Input::get('RbJawaban7'),
        '8' => Input::get('RbJawaban8'),
        '9' => Input::get('RbJawaban9'),
        '10' => Input::get('RbJawaban10'),
        '11' => Input::get('RbJawaban11'),
        '12' => Input::get('RbJawaban12'),
        '13' => Input::get('RbJawaban13'),
        '14' => Input::get('RbJawaban14'),
        '15' => Input::get('RbJawaban5'),
        '16' => Input::get('RbJawaban6'),
        '17' => Input::get('RbJawaban7'),
        '18' => Input::get('RbJawaban8'),
        '19' => Input::get('RbJawaban9'),
        '20' => Input::get('RbJawaban10'),
        '21' => Input::get('RbJawaban11'),
        '22' => Input::get('RbJawaban12'),
        '23' => Input::get('RbJawaban13'),
        '24' => Input::get('RbJawaban14'),
        'masukan' => Input::get('masukan'),
        'masukan1' => Input::get('masukan1'),
        'masukan2' => Input::get('masukan2'),
        'masukan3' => Input::get('masukan3'),
        'masukan4' => Input::get('masukan1'),
        'masukan5' => Input::get('masukan2'),
        'masukan6' => Input::get('masukan3'),
        'saran' => Input::get('saran'),
        'saran1' => Input::get('saran1'),
        'saran2' => Input::get('saran2'),
        'saran3' => Input::get('saran3'),
        );
        
        DB::table('dataevalpel') ->insert($data);
        
        return Redirect::to('eval')->with('message','Berhasil melakukan penilaian pelaksanaan Training SAKTI');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('dashboards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('dashboards.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('dashboards.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
