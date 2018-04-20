                {!! Form::open(['url' => '/login']) !!}

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h3 class="panel-title">IMF-WB Annual Meeting 2018</h3></center>
                        </div>
                        <div class="panel-body">
                            <img src="private/resources/assets/img/amf2018-logos.jpg">
                            @if(Session::has('message'))
                            <center><span class="label label-danger">{{ Session::get('message') }}</span></center>
                            @endif
                            @if(Session::has('flash_error'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('flash_error') }}
                                </div>
                            @endif
                                
                                @if($errors->has())
                                <span class="label label-danger">{!! $errors->first('username')!!}</span>
                                <p></p>
                                    @endif
                            
                                <div class="form-group">
                                    
                                </div>

                            @if($errors->has())
                            <span class="label label-danger">{!! $errors->first('password')!!}</span>
                            <p></p>
                                @endif
                            
                                <div class="form-group">
                                    
                                </div>
                        </div>
                        <div class="panel-footer">
                            <center>
                            <a href="{{url('registrasi')}}" class="btn btn-success">Registrasi</a>
							</center>
                        </div>
                    </div>
                {{ Form::close() }}