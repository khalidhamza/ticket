@extends(I.'master')
@section('content')

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open(['class'=>'form-horizontal', 'id'=>'form'])!!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name', array('class'=>'col-md-4 control-label')) !!}
                            <div class="col-sm-6">
                            {!! Form::text('name','', array('class'=>'form-control input-md')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'E-Mail', array('class'=>'col-md-4 control-label')) !!}
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
 @stop