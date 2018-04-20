@extends('layouts.frontend')

@section('content')
    <div class="container">
<p></p>   
        
        
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    
    <div class="panel-heading">
    <center> Registrasi Liaison Officer IMF-WB Annual Meeting 2018 </center>
    </div>
    <div class="panel-body">
        {!! Form::open(['files' => true,'id' => 'defaultForm', 'url' => '/processregist']) !!}
        {!! csrf_field() !!}
        <div class="form-group">
        <label>Nama:</label> 
        {!! Form::text('nama', '', ['placeholder' => 'Nama Lengkap', 'id' => 'nama', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Tempat Lahir:</label> 
        {!! Form::text('tempat', '', ['placeholder' => 'Tempat Lahir', 'id' => 'nama', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Tanggal Lahir: </label> 
        {!! Form::date('unit', \Carbon\Carbon::now(), ['placeholder' => 'Tanggal Lahir', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Nomor KTP: </label> 
        {!! Form::text('nip', '', ['placeholder' => 'Nomor KTP', 'class' => 'form-control']) !!}
        </div>
        {!! Form::hidden('aplikasi', 'aplikasi', ['placeholder' => 'Aplikasi Eksisting yang dipahami', 'class' => 'form-control']) !!}
        <div class="form-group">
        <label>Jenis Kelamin:</label> 
        {{ Form::select('kel', array('L' => 'Laki-laki', 'P' => 'Perempuan'), null, ['placeholder' => 'Pilih Jenis Kelamin', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Status:</label> 
        {{ Form::select('status', array('0' => 'Belum Menikah', '1' => 'Menikah', '2' => 'Cerai'), null, ['placeholder' => 'Pilih Status Perkawinan', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Pendidikan Terakhir:</label> 
        {{ Form::select('degree', array('DI' => 'DI', 'D3' => 'D3', 'S1' => 'S1/D4', 'S2' => 'S2', 'S3' => 'S3'), null, ['placeholder' => 'Pilih Pendidikan Terakhir', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Alamat:</label> 
        {{ Form::text('address', '' , ['placeholder' => 'Alamat tinggal saat ini', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label>Email: </label> 
        {!! Form::email('email', '', ['placeholder' => 'Alamat Email', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Nomor HP: </label> 
        {!! Form::text('telp', '', ['placeholder' => 'Nomor Handphone', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Nomor Whatsapp:</label> 
        {!! Form::text('wa', '', ['placeholder' => 'Nomor Whatsapp', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Kemampuan Bhs Inggris:</label> <br>
        {{ Form::checkbox('eng', '0') }} TOEFL IBT {!! Form::text('ibt', '', ['placeholder' => 'Score TOEFL IBT', 'class' => 'form-control']) !!}<br>
        {{ Form::checkbox('eng1', '0') }} TOEFL ITP {!! Form::text('itp', '', ['placeholder' => 'Score TOEFL ITP', 'class' => 'form-control']) !!}<br>
        {{ Form::checkbox('eng2', '0') }} IELTS {!! Form::text('ielts', '', ['placeholder' => 'Score IELTS', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Kemampuan Bhs Asing Lainnnya:</label> <br>
        {{ Form::checkbox('perancis', '0') }} PERANCIS <br>
        {{ Form::checkbox('jerman', '0') }} JERMAN <br>
        {{ Form::checkbox('spanyol', '0') }} SPANYOL <br>
        {{ Form::checkbox('arab', '0') }}ARAB <br>
        {{ Form::checkbox('rusia', '0') }} RUSIA <br>
        {!! Form::text('lang', '', ['placeholder' => 'Lainnya', 'class' => 'form-control']) !!}    
        </div>
        <div class="form-group">
        <label>Pengalaman Organisasi:</label> 
        {!! Form::textarea('org', '', ['placeholder' => 'Pengalaman Organisasi', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <label>Pengalaman Liaison Officer:</label> 
        {!! Form::textarea('lo', '', ['placeholder' => 'Pengalaman Liaison Officer', 'class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        <label>Media Sosial:</label> <br>
        {{ Form::checkbox('medsos', '0') }} TWITTER {!! Form::text('twitter', '', ['placeholder' => 'Akun Twitter', 'class' => 'form-control']) !!} <br>
        {{ Form::checkbox('medsos1', '0') }} FACEBOOK {!! Form::text('facebook', '', ['placeholder' => 'Akun Facebook', 'class' => 'form-control']) !!}<br>
        {{ Form::checkbox('medsos2', '0') }} INSTAGRAM {!! Form::text('instagram', '', ['placeholder' => 'Akun Instagram', 'class' => 'form-control']) !!}<br>
        {{ Form::checkbox('medsos3', '0') }} LAINNYA {!! Form::text('medsos', '', ['placeholder' => 'Akun Lain', 'class' => 'form-control']) !!}<br>
        </div>
        
        <div class="form-group">
        <label>Upload KTP (Maksimal 2MB):</label> 
        {!! Form::file('ktp_doc','',array('id'=>'','class'=>'form-control')) !!}
        </div>
        <div class="form-group">
        <label>Upload Sertifikat English (Maksimal 2MB):</label> 
        {!! Form::file('english_doc','',array('id'=>'','class'=>'form-control')) !!}
        </div>
        <div class="form-group">
        <label>Upload Sertifikat Bahasa Asing (Maksimal 2MB):</label> 
        {!! Form::file('lang_doc','',array('id'=>'','class'=>'form-control')) !!}
        </div>
        <div class="form-group">
        <label>Upload Pas Foto (Maksimal 2MB):</label> 
        {!! Form::file('cv_doc','',array('id'=>'','class'=>'form-control')) !!}
        </div>
        <div class="form-group">
        <label>Upload CV (Maksimal 2MB):</label>
        {!! Form::file('pdf','',array('id'=>'','class'=>'form-control')) !!}
        </div>
        <p></p>
        {!! Form::submit('Registrasi', ['class' => 'btn btn-success']) !!}
        <a href="{{url('/')}}" class="btn btn-warning">Batal</a>
        {!! Form::close() !!}
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
            nama: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi nama lengkap anda'
                    }
                }
            },
            tempat: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi tempat lahir anda'
                    }
                }
            },
            unit: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan ini tanggal lahir anda'
                    }
                }
            },
            nip: {
                message: 'KTP invalid',
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi Nomor KTP anda'
                    },
                    stringLength: {
                        min: 16,
                        max: 16,
                        message: 'Angka KTP harus berjumlah 16 digit'
                    },
                    regexp: {
                        regexp: /^[0-9_.]+$/,
                        message: 'KTP hanya boleh diisi dengan bilangan numerik'
                    }
                }
            },
            kel: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih jenis kelamin'
                    }
                }
            },
            status: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih status'
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
            degree: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan pilih pendidikan terakhir anda'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi alamat lengkap anda'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi email anda'
                    },
                    emailAddress: {
                        message: 'Alamat email tidak valid'
                    }
                }
            },
            telp: {
                message: 'No Handphone invalid',
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi nomor handphone anda'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Telp hanya boleh diisi dengan bilangan numerik'
                    }
                }
            },
            wa: {
                message: 'No Whatsapp invalid',
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi nomor Whatsapp anda'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'No Whatsapp hanya boleh diisi dengan bilangan numerik'
                    }
                }
            },
            org: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan isi pengalaman organisasi anda'
                    }
                }
            },
            ktp_doc: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan upload KTP anda'
                    }
                }
            },
            cv_doc: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan upload foto anda'
                    }
                }
            },
            pdf: {
                validators: {
                    notEmpty: {
                        message: 'Silahkan upload CV anda'
                    }
                }
            },
        }
    });
});
</script>
@stop