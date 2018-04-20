@extends('sidebar')
@section('content')
    <div class="container">
    @if(Session::has('message'))
    <center><span class="label label-success">{{ Session::get('message') }}</span></center>
@endif
<p></p>         
        
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    
    <div class="panel-heading">
    <center> Evaluasi Pelaksanaan Training SAKTI </center>
    </div>
    <div class="panel-body">
        {{ Form::open(['files' => true,'id' => 'defaultForm', 'url' => '/processeval']) }}
        <div class="form-group">
        <label>Usia:</label> 
        {{ Form::text('usia', '', ['placeholder' => 'Usia', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Jenis Kelamin:</label> 
        {{ Form::select('kel', array('-' => 'Silahkan Pilih', 'L' => 'Laki-laki', 'P' => 'Perempuan'), null, ['placeholder' => 'Pilih Jenis Kelamin', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Pendidikan:</label> 
        {{ Form::select('study', array('-' => 'Silahkan Pilih', 'SMA' => 'SMA', 'DIPLOMA I' => 'DIPLOMA I', 'DIPLOMA III' => 'DIPLOMA III', 'DIPLOMA IV/S1' => 'DIPLOMA IV/S1', 'S2' => 'S2', 'S3' => 'S3', 'Lainnya' => 'Lainnya'), null, ['placeholder' => 'Pilih Pendidikan Terakhir', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <table class="table table-bordered">
    
        <tr>
            <th>Kurikulum</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>Kesesuaian materi pembelajaran dengan harapan/kebutuhan peserta diklat.</td>
            <td>{{Form::radio('RbJawaban', '1')}}</td>
            <td>{{Form::radio('RbJawaban', '2')}}</td>
            <td>{{Form::radio('RbJawaban', '3')}}</td>
            <td>{{Form::radio('RbJawaban', '4')}}</td>
            <td>{{Form::radio('RbJawaban', '5')}}</td>        
        </tr>
        <tr>
            <td>Kesesuaian materi pembelajaran dengan tujuan diklat.</td>
            <td>{{Form::radio('RbJawaban1', '1')}}</td>
            <td>{{Form::radio('RbJawaban1', '2')}}</td>
            <td>{{Form::radio('RbJawaban1', '3')}}</td>
            <td>{{Form::radio('RbJawaban1', '4')}}</td>
            <td>{{Form::radio('RbJawaban1', '5')}}</td>        
        </tr>
        <tr>
            <td>Peningkatan pengetahuan.</td>
            <td>{{Form::radio('RbJawaban2', '1')}}</td>
            <td>{{Form::radio('RbJawaban2', '2')}}</td>
            <td>{{Form::radio('RbJawaban2', '3')}}</td>
            <td>{{Form::radio('RbJawaban2', '4')}}</td>
            <td>{{Form::radio('RbJawaban2', '5')}}</td>        
        </tr>
        <tr>
            <td>Peningkatan keterampilan.</td>
            <td>{{Form::radio('RbJawaban3', '1')}}</td>
            <td>{{Form::radio('RbJawaban3', '2')}}</td>
            <td>{{Form::radio('RbJawaban3', '3')}}</td>
            <td>{{Form::radio('RbJawaban3', '4')}}</td>
            <td>{{Form::radio('RbJawaban3', '5')}}</td>        
        </tr>
    </table>
        {{ Form::text('masukan', '', ['placeholder' => 'Masukan', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <table class="table table-bordered">
    
        <tr>
            <th>Pelayanan Penyelenggaraan Training</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>Kerapian pakaian dan atribut yang digunakan oleh panitia.</td>
            <td>{{Form::radio('RbJawaban4', '1')}}</td>
            <td>{{Form::radio('RbJawaban4', '2')}}</td>
            <td>{{Form::radio('RbJawaban4', '3')}}</td>
            <td>{{Form::radio('RbJawaban4', '4')}}</td>
            <td>{{Form::radio('RbJawaban4', '5')}}</td>        
        </tr>
        <tr>
            <td>Pelayanan panitia kepada peserta diklat dengan 3 S (senyum, sapa, salam).</td>
            <td>{{Form::radio('RbJawaban5', '1')}}</td>
            <td>{{Form::radio('RbJawaban5', '2')}}</td>
            <td>{{Form::radio('RbJawaban5', '3')}}</td>
            <td>{{Form::radio('RbJawaban5', '4')}}</td>
            <td>{{Form::radio('RbJawaban5', '5')}}</td>        
        </tr>
        <tr>
            <td>Kesigapan panitia terhadap kebutuhan peserta.</td>
            <td>{{Form::radio('RbJawaban6', '1')}}</td>
            <td>{{Form::radio('RbJawaban6', '2')}}</td>
            <td>{{Form::radio('RbJawaban6', '3')}}</td>
            <td>{{Form::radio('RbJawaban6', '4')}}</td>
            <td>{{Form::radio('RbJawaban6', '5')}}</td>        
        </tr>
        <tr>
            <td>Ketersediaan panitia yang kompeten melayani peserta diklat.</td>
            <td>{{Form::radio('RbJawaban7', '1')}}</td>
            <td>{{Form::radio('RbJawaban7', '2')}}</td>
            <td>{{Form::radio('RbJawaban7', '3')}}</td>
            <td>{{Form::radio('RbJawaban7', '4')}}</td>
            <td>{{Form::radio('RbJawaban7', '5')}}</td>        
        </tr>
    </table>
        {{ Form::text('masukan1', '', ['placeholder' => 'Masukan', 'class' => 'form-control']) }}
    </div>
        <div class="form-group">
        <table class="table table-bordered">
    
        <tr>
            <th>Pelayanan Evaluasi Diklat</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>Kesesuaian soal pretest/posttest dengan materi yang diajarkan.</td>
            <td>{{Form::radio('RbJawaban8', '1')}}</td>
            <td>{{Form::radio('RbJawaban8', '2')}}</td>
            <td>{{Form::radio('RbJawaban8', '3')}}</td>
            <td>{{Form::radio('RbJawaban8', '4')}}</td>
            <td>{{Form::radio('RbJawaban8', '5')}}</td>        
        </tr>
        <tr>
            <td>Ketersedian waktu yang cukup dalam pengerjaan soal pretest/posttest.</td>
            <td>{{Form::radio('RbJawaban9', '1')}}</td>
            <td>{{Form::radio('RbJawaban9', '2')}}</td>
            <td>{{Form::radio('RbJawaban9', '3')}}</td>
            <td>{{Form::radio('RbJawaban9', '4')}}</td>
            <td>{{Form::radio('RbJawaban9', '5')}}</td>        
        </tr>
        <tr>
            <td>Ketertiban penyelenggaraan pretest/posttest.</td>
            <td>{{Form::radio('RbJawaban10', '1')}}</td>
            <td>{{Form::radio('RbJawaban10', '2')}}</td>
            <td>{{Form::radio('RbJawaban10', '3')}}</td>
            <td>{{Form::radio('RbJawaban10', '4')}}</td>
            <td>{{Form::radio('RbJawaban10', '5')}}</td>        
        </tr>
        <tr>
            <td>Profesionalitas pengawas pretest/posttest dalam menjalankan tugas.</td>
            <td>{{Form::radio('RbJawaban11', '1')}}</td>
            <td>{{Form::radio('RbJawaban11', '2')}}</td>
            <td>{{Form::radio('RbJawaban11', '3')}}</td>
            <td>{{Form::radio('RbJawaban11', '4')}}</td>
            <td>{{Form::radio('RbJawaban11', '5')}}</td>        
        </tr>
    </table>
        {{ Form::text('masukan2', '', ['placeholder' => 'Masukan', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
    <table class="table table-bordered">
    
        <tr>
            <th>Ruang Belajar</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>Kebersihan dan kenyamanan ruang belajar.</td>
            <td>{{Form::radio('RbJawaban12', '1')}}</td>
            <td>{{Form::radio('RbJawaban12', '2')}}</td>
            <td>{{Form::radio('RbJawaban12', '3')}}</td>
            <td>{{Form::radio('RbJawaban12', '4')}}</td>
            <td>{{Form::radio('RbJawaban12', '5')}}</td>        
        </tr>
        <tr>
            <td>Kelengkapan sarana pembelajaran yang berfungsi dengan baik di dalam ruang belajar.</td>
            <td>{{Form::radio('RbJawaban13', '1')}}</td>
            <td>{{Form::radio('RbJawaban13', '2')}}</td>
            <td>{{Form::radio('RbJawaban13', '3')}}</td>
            <td>{{Form::radio('RbJawaban13', '4')}}</td>
            <td>{{Form::radio('RbJawaban13', '5')}}</td>        
        </tr>
    </table>
        {{ Form::text('masukan3', '', ['placeholder' => 'Masukan', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
    <table class="table table-bordered">
    
        <tr>
            <th>Ruang Makan dan Konsumsi</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>Kebersihan dan kenyamanan ruang makan.</td>
            <td>{{Form::radio('RbJawaban14', '1')}}</td>
            <td>{{Form::radio('RbJawaban14', '2')}}</td>
            <td>{{Form::radio('RbJawaban14', '3')}}</td>
            <td>{{Form::radio('RbJawaban14', '4')}}</td>
            <td>{{Form::radio('RbJawaban14', '5')}}</td>        
        </tr>
        <tr>
            <td>Profesionalitas penyaji makanan.</td>
            <td>{{Form::radio('RbJawaban15', '1')}}</td>
            <td>{{Form::radio('RbJawaban15', '2')}}</td>
            <td>{{Form::radio('RbJawaban15', '3')}}</td>
            <td>{{Form::radio('RbJawaban15', '4')}}</td>
            <td>{{Form::radio('RbJawaban15', '5')}}</td>        
        </tr>
        <tr>
            <td>Kebersihan dan kelayakan konsumsi yang disajikan.</td>
            <td>{{Form::radio('RbJawaban16', '1')}}</td>
            <td>{{Form::radio('RbJawaban16', '2')}}</td>
            <td>{{Form::radio('RbJawaban16', '3')}}</td>
            <td>{{Form::radio('RbJawaban16', '4')}}</td>
            <td>{{Form::radio('RbJawaban16', '5')}}</td>        
        </tr>
        <tr>
            <td>Ketercukupan jumlah konsumsi yang disajikan.</td>
            <td>{{Form::radio('RbJawaban17', '1')}}</td>
            <td>{{Form::radio('RbJawaban17', '2')}}</td>
            <td>{{Form::radio('RbJawaban17', '3')}}</td>
            <td>{{Form::radio('RbJawaban17', '4')}}</td>
            <td>{{Form::radio('RbJawaban17', '5')}}</td>        
        </tr>
    </table>
        {{ Form::text('masukan4', '', ['placeholder' => 'Masukan', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
    <table class="table table-bordered">
    
        <tr>
            <th>Sarana dan Prasarana Pendukung</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>Kebersihan kamar kecil.</td>
            <td>{{Form::radio('RbJawaban18', '1')}}</td>
            <td>{{Form::radio('RbJawaban18', '2')}}</td>
            <td>{{Form::radio('RbJawaban18', '3')}}</td>
            <td>{{Form::radio('RbJawaban18', '4')}}</td>
            <td>{{Form::radio('RbJawaban18', '5')}}</td>        
        </tr>
        <tr>
            <td>Ketersediaan sarana ibadah.</td>
            <td>{{Form::radio('RbJawaban19', '1')}}</td>
            <td>{{Form::radio('RbJawaban19', '2')}}</td>
            <td>{{Form::radio('RbJawaban19', '3')}}</td>
            <td>{{Form::radio('RbJawaban19', '4')}}</td>
            <td>{{Form::radio('RbJawaban19', '5')}}</td>        
        </tr>
        <tr>
            <td>Ketersediaan sarana olahraga.</td>
            <td>{{Form::radio('RbJawaban20', '1')}}</td>
            <td>{{Form::radio('RbJawaban20', '2')}}</td>
            <td>{{Form::radio('RbJawaban20', '3')}}</td>
            <td>{{Form::radio('RbJawaban20', '4')}}</td>
            <td>{{Form::radio('RbJawaban20', '5')}}</td>        
        </tr>
        <tr>
            <td>Ketersediaan Pelayanan kesehatan.</td>
            <td>{{Form::radio('RbJawaban21', '1')}}</td>
            <td>{{Form::radio('RbJawaban21', '2')}}</td>
            <td>{{Form::radio('RbJawaban21', '3')}}</td>
            <td>{{Form::radio('RbJawaban21', '4')}}</td>
            <td>{{Form::radio('RbJawaban21', '5')}}</td>        
        </tr>
    </table>
        {{ Form::text('masukan5', '', ['placeholder' => 'Masukan', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
    <table class="table table-bordered">
    
        <tr>
            <th>Penginapan</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>Kebersihan dan kenyamanan penginapan.</td>
            <td>{{Form::radio('RbJawaban22', '1')}}</td>
            <td>{{Form::radio('RbJawaban22', '2')}}</td>
            <td>{{Form::radio('RbJawaban22', '3')}}</td>
            <td>{{Form::radio('RbJawaban22', '4')}}</td>
            <td>{{Form::radio('RbJawaban22', '5')}}</td>        
        </tr>
        <tr>
            <td>Kesigapan petugas penginapan dalam memberikan layanan.</td>
            <td>{{Form::radio('RbJawaban23', '1')}}</td>
            <td>{{Form::radio('RbJawaban23', '2')}}</td>
            <td>{{Form::radio('RbJawaban23', '3')}}</td>
            <td>{{Form::radio('RbJawaban23', '4')}}</td>
            <td>{{Form::radio('RbJawaban23', '5')}}</td>        
        </tr>
        <tr>
            <td>Jarak dan lokasi penginapan.</td>
            <td>{{Form::radio('RbJawaban24', '1')}}</td>
            <td>{{Form::radio('RbJawaban24', '2')}}</td>
            <td>{{Form::radio('RbJawaban24', '3')}}</td>
            <td>{{Form::radio('RbJawaban24', '4')}}</td>
            <td>{{Form::radio('RbJawaban24', '5')}}</td>        
        </tr>
    </table>
        {{ Form::text('masukan6', '', ['placeholder' => 'Masukan', 'class' => 'form-control']) }}
        </div>
        
        <div class="form-group">
        <label>Materi pembelajaran yang sudah tepat:</label> 
        {{ Form::textarea('saran', '', ['placeholder' => 'Saran', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Materi pembelajaran yang perlu diperbaiki:</label> 
        {{ Form::textarea('saran1', '', ['placeholder' => 'Saran', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Kritik dan Saran:</label> 
        {{ Form::textarea('saran2', '', ['placeholder' => 'Saran', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Pendapat Saudara Atas Pelaksanan Training SAKTI Secara Keseluruhan, mohon disampaikan sesuai dengan sejujurnya:</label> 
        {{ Form::textarea('saran3', '', ['placeholder' => 'Saran', 'class' => 'form-control']) }}
        </div>
        
        <p></p>
        {{ Form::submit('Penilaian', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            usia: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan masukan usia anda'
                    }
                }
            },
            kel: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih gender'
                    }
                }
            },
            study: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih pendidikan terakhir'
                    }
                }
            },
            subtrain: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih kelas'
                    }
                }
            },
            RbJawaban: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban1: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban1: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban2: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban3: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban4: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban5: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban6: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban7: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban8: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban9: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban10: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban11: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban12: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban13: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban14: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban15: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban16: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban17: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban18: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban19: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban20: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban21: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban22: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban23: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
            RbJawaban24: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih nilai'
                    }
                }
            },
        }
    });
});
</script>
@stop