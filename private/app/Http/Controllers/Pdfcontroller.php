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
use PDF;
use Barryvdh\Snappy;
use Fpdf;

class Pdfcontroller extends Controller
{


public function downloadspd(){

    $nama = Input::get('nama');
    $nip = Input::get('nip');
    $gol = Input::get('gol');
    $unit = Input::get('unit');
    $jab = Input::get('jab');
    $nmrek = Input::get('nmrek');
    $rek = Input::get('rek');
    $npwp = Input::get('npwp');
    
 ob_start();
 $pdf = new Fpdf();
 $pdf::AddPage();
 $pdf::Image('assets/img/logo.jpg',15,11,30);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',13);
 $pdf::Cell(30,10,'KEMENTERIAN KEUANGAN REPUBLIK INDONESIA',0,0,'C');
 $pdf::Ln(4);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',12);
 $pdf::Cell(30,10,'DIREKTORAT JENDERAL PERBENDAHARAAN',0,0,'C');
 $pdf::Ln(4);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',12);
 $pdf::Cell(30,10,'SEKRETARIAT DIREKTORAT JENDERAL ',0,0,'C');
 $pdf::Ln(4);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',7);
 $pdf::Cell(30,10,'GEDUNG PRIJADI PRAPTOSUHARDJO I LANTAI I',0,0,'C');
 $pdf::Ln(3);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',7);
 $pdf::Cell(30,10,'JALAN LAPANGAN BANTENG TIMUR NO. 2-4 JAKARTA 10710',0,0,'C');
 $pdf::Ln(3);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',7);
 $pdf::Cell(30,10,'TELEPON (021) 3449230 EXT 5216,5217, (021) 3846322 FAKSIMILE (021) 3846322',0,0,'C');
 $pdf::Ln(3);
 $pdf::image('assets/img/lines.jpg',15,38,180,3);

 $pdf::MultiCell(0,5,'');
 $pdf::SetFont('arial','UB',14);
 $pdf::MultiCell(180,20,'DAFTAR RINCIAN PENGELUARAN RIIL PERJALANAN DINAS',0,'C');

 $pdf::SetFont('arial','',13);
 $pdf::MultiCell(180,5,'      Yang bertanda tangan di bawah ini:',0,'J');
    
 $pdf::MultiCell(0,2,'');
 $pdf::Cell(10,5,'Nama',0,0,'L');
 $pdf::Cell(40,5,' : ',0,0,'R');
 $pdf::MultiCell(150,5,$nama,0,'J');

 $pdf::MultiCell(0,2,'');
 $pdf::Cell(10,5,'NIP / Golongan',0,0,'L');
 $pdf::Cell(40,5,' : ',0,0,'R');
 $pdf::Cell(45,5,$nip,0,'J');
 $pdf::Cell(5,5,'  / ',0,0,'L');
 $pdf::MultiCell(55,5,$gol,0,'L');

 $pdf::MultiCell(0,2,'');
 $pdf::Cell(10,5,'Jabatan',0,0,'L');
 $pdf::Cell(40,5,' : ',0,0,'R');
 $pdf::MultiCell(150,5,$jab,0,'J');
    
 $pdf::MultiCell(0,2,'');
 $pdf::Cell(10,5,'Unit Organisasi',0,0,'L');
 $pdf::Cell(40,5,' : ',0,0,'R');
 $pdf::MultiCell(150,5,$unit,0,'J');
    
 $pdf::MultiCell(0,2,'');
 $pdf::Cell(10,5,'No. Rekening',0,0,'L');
 $pdf::Cell(40,5,' : ',0,0,'R');
 $pdf::MultiCell(150,5,$rek.' ('.$nmrek.')',0,'J');
    
 $pdf::MultiCell(0,2,'');
 $pdf::Cell(10,5,'NPWP',0,0,'L');
 $pdf::Cell(40,5,' : ',0,0,'R');
 $pdf::MultiCell(150,5,$npwp,0,'J');
    
 $pdf::MultiCell(0,2,'');
 $pdf::MultiCell(180,6,'berdasarkan Surat Perjalanan Dinas (SPD) tanggal..........................Nomor ............................, dengan ini kami menyatakan dengan sesungguhnya bahwa:',0,'J');
    
 $pdf::MultiCell(0,2,'');
 $pdf::MultiCell(180,6,'1. Rincian seluruh biaya perjalanan dinas pegawai meliputi :',0,'J');
    
 $pdf::Ln();
 $pdf::Ln();
 $pdf::Ln();
 $pdf::Ln();
 $pdf::Ln();
 $pdf::Image('assets/img/tabel.jpg',15,125,170);
 $pdf::Ln();
 $pdf::Ln();
 $pdf::Ln();
 $pdf::Ln();
 $pdf::Ln();
 
 $pdf::MultiCell(0,5,'');
 $pdf::MultiCell(180,6,'2. Jumlah uang tersebut pada angka 1 di atas benar-benar dikeluarkan untuk pelaksanaan perjalanan dinas dimaksud dan apabila di kemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk menyetorkan  kelebihan tersebut ke Kas Negara.',0,'J');
    
 $pdf::MultiCell(0,2,'');
 $pdf::MultiCell(180,6,'      Demikian pernyataan ini kami buat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.',0,'J');
    
 $pdf::MultiCell(0,0,'');
 $pdf::Cell(10,5,'',0,0,'L');
 $pdf::Cell(100,5,'',0,0,'R');
 $pdf::MultiCell(70,5,'               ,                      2017 ',0,'J');
 
 $pdf::MultiCell(0,1,'');
 $pdf::Cell(10,5,' ',0,0,'L');
 $pdf::Cell(100,5,'  ',0,0,'R');
 $pdf::MultiCell(70,5,'Pejabat Negara/Pegawai Negeri Yang melakukan perjalanan dinas',0,'J');

 $pdf::MultiCell(0,16,'');
 $pdf::Cell(10,5,' ',0,0,'L');
 $pdf::Cell(100,5,'  ',0,0,'R');
 $pdf::MultiCell(70,5,$nama,0,'J');

 $pdf::MultiCell(0,1,'');
 $pdf::Cell(10,5,' ',0,0,'L');
 $pdf::Cell(100,5,'  ',0,0,'R');
 $pdf::MultiCell(70,5,'NIP '.$nip,0,'J');
    
 $pdf::Output();
 exit;
}
    
    
    
    
    
function Header()
{
 $pdf::Image('assets/img/logo.jpg',15,11,30);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',13);
 $pdf::Cell(30,10,'KEMENTERIAN KEUANGAN REPUBLIK INDONESIA',0,0,'C');
 $pdf::Ln(4);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',12);
 $pdf::Cell(30,10,'DIREKTORAT JENDERAL PERBENDAHARAAN',0,0,'C');
 $pdf::Ln(4);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',12);
 $pdf::Cell(30,10,'DIREKTORAT SISTEM INFORMASI DAN TEKNOLOGI PERBENDAHARAAN ',0,0,'C');
 $pdf::Ln(4);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',7);
 $pdf::Cell(30,10,'GEDUNG PRIJADI PRAPTOSUHARDJO III LANTAI 3',0,0,'C');
 $pdf::Ln(3);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',7);
 $pdf::Cell(30,10,'JALAN DR. WAHIDIN II NOMOR 3, JAKARTA 10710',0,0,'C');
 $pdf::Ln(3);
 $pdf::Cell(90);
 $pdf::SetFont('Arial','B',7);
 $pdf::Cell(30,10,'TELEPON (021) 3516976 EXT 5326, (021) 3516976 FAKSIMILE (021) 3846322, www.span.depkeu.go.id',0,0,'C');
 $pdf::Ln(3);
 $pdf::image('assets/img/lines.jpg',15,38,180,3);
}
    
    
    
public function absensi()
{
    

$peserta = DB::select('select nip from report where batch = :3', [1]);
    
$data =array();
while ($row = mysql_fetch_assoc($peserta)) {
	array_push($data,$row);
}

$header = array(
                array("label"=>"No", "length"=>20, "align"=>"C"),
				array("label"=>"Nama", "length"=>70, "align"=>"C"),
				array("label"=>"NIP", "length"=>33, "align"=>"C"),
				array("label"=>"Unit", "length"=>33, "align"=>"C"),
				array("label"=>"Email", "length"=>20, "align"=>"C"),
                array("label"=>"Tanda Tangan", "length"=>20, "align"=>"C"),
		);
    

$pdf = new PDF('L','mm','A4');
$pdf::SetTopMargin(20);
$pdf::SetLeftMargin(15);
$pdf::SetRightMargin(15);
$pdf::AliasNbPages();
$pdf::AddPage();

$pdf::MultiCell(0,5,'');
$pdf::SetFont('arial','UB',14);
$pdf::MultiCell(180,20,'KONFIRMASI SETORAN PENERIMAAN NEGARA',0,'C');

$pdf::SetFont('arial','',10);
$pdf::MultiCell(180,8,'Terima Kasih telah membayar Pajak, Setoran Anda telah dibukukan oleh KPPN Tanjung sebagai berikut:',0,'C');

$pdf::SetFont('Arial','','10');
$pdf::SetFillColor(255,0,0);
$pdf::SetTextColor(255);
$pdf::SetDrawColor(128,0,0);
foreach ($header as $kolom) {
	$pdf::Cell($kolom['length'],5,$kolom['label'],1,'0',$kolom['align'],true );
	}
$pdf::Ln();

$pdf::SetFillColor(224,235,255);
$pdf::SetTextColor(0);
$pdf::SetFont('');
$fill=false;
foreach ($data as $baris) {
	$i=0;
	foreach ($baris as $cell){
		$pdf::Cell($header[$i]['length'],5,$cell,1,'0',$kolom['align'],$fill );
		$i++;
	}
	$fill=!$fill;
$pdf::Ln();
}
	$query_kppn=mysql_query("SELECT * FROM t_kppn WHERE kddefa=1");
	$datakppn=mysql_fetch_array($query_kppn);
	$tgl=date('d-m-Y');
	
$pdf::MultiCell(0,20,'');
$pdf::Cell(10,5,' ',0,0,'L');
$pdf::Cell(100,5,'  ',0,0,'R');
$pdf::MultiCell(70,5,' ',0,'J');

$pdf::MultiCell(0,1,'');
$pdf::Cell(10,5,'Diterima Oleh:',0,0,'L');
$pdf::Cell(100,5,'  ',0,0,'R');
$pdf::MultiCell(70,5,'$jab',0,'J');

$pdf::MultiCell(0,15,'');
$pdf::Cell(10,5,' ',0,0,'L');
$pdf::Cell(100,5,'  ',0,0,'R');
$pdf::MultiCell(70,5,'$nama',0,'J');

$pdf::MultiCell(0,1,'');
$pdf::Cell(10,5,' ',0,0,'L');
$pdf::Cell(100,5,' ',0,0,'R');
$pdf::MultiCell(70,5,'NIP ',0,'J');

$pdf::Output();

}

    
    
}