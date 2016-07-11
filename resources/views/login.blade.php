@extends(I.'master')
@section('content')

        	<div class="col-md-6 col-md-offset-3">
            	<div class="panel panel-default">
                	<div class="panel-heading">Login</div>
                	<div class="panel-body">
                    	{!! Form::open(['method'=>'post','url'=>'login','class'=>'form-horizontal', 'id'=>'form'])!!}

                        		<div class="form-group">                            		
                                    {!! Form::label('email', 'Email', array('class'=>'col-md-4 control-label')) !!}
                                    <div class="col-sm-6">
                                    {!! Form::email('email','', array('class'=>'form-control input-md')) !!}
                                    </div>
                       		    </div>

                                <div class="form-group">
                            		<label for="password" class="col-md-4 control-label">Password</label>
                            		<div class="col-md-6">
                                		<input id="password" type="password" class="form-control" name="password">
									</div>
                        		</div>

                        		<div class="form-group">
                            		<div class="col-md-6 col-md-offset-4">
                                		<div class="checkbox">
                                    		<label>
                                        		<input type="checkbox" name="remember"> Remember Me
                                    		</label>
                                		</div>
                            		</div>
                        		</div>

                        		<div class="form-group">
                            		<div class="col-md-6 col-md-offset-4">
                                		<button type="submit" class="btn btn-primary">
                                    		<i class="fa fa-btn fa-sign-in"></i> Login
                                		</button>
                              		    <a class="btn btn-link" href="">Forgot Your Password?</a>
                            		</div>
                        		</div>
                   	    {!! Form::close()!!}
                	</div>
            	</div>
        	</div>
@stop