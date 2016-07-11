@extends(I.'master')
@section('content')
    <div class="col-lg-10 col-lg-push-1">
        <h1>Create Ticket</h1>
    @if(empty($ticket))
    {!! Form::open(['route'=>'ticket.store', 'class'=>'form-horizontal', 'id'=>'form'])!!}
    @else
    {!! Form::model($ticket,['method'=>'PATCH','url'=>'ticket/'.$ticket->id,'role'=>'form', 'class'=>'form-horizontal Form_Ajax', 'id'=>'form']) !!}
    @endif 


    <!-- Text input-->
    <div class="form-group">        
        {!! Form::label('title', 'Title', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-sm-6">
        {!! Form::text('title',isset($ticket->title)?$ticket->title:'' , array('class'=>'form-control input-md')) !!}
        </div>
    </div>

    
    <div class="form-group">        
        {!! Form::label('body', 'Description', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-sm-6">
        {!! Form::textarea('body',isset($ticket->body)?$ticket->body:'' , array('class'=>'form-control input-md')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Status', 'status', array('class'=>'col-md-4 control-label')) !!}
          <div class="col-md-4">
              <div class="radio">
                <label class="radio-inline">
                  {!! Form::radio('status', '1' ,isset($ticket)?@$ticket->status : true) !!}
                  Pendeng 
                </label>
                <label class="radio-inline">
                  {!! Form::radio('status', '0' ,isset($ticket)?@!$ticket->status : '')  !!}
                  Closed 
                </label>
              </div>
          </div>   
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        {!! Form::label('','', array('class'=>'col-md-4 control-label')) !!}
        {!! Form::submit('submit', array('class'=>'btn btn-success')) !!}

        
        {!! link_to('home' ,'Cancel',array('class'=>'btn btn-danger')) !!}
    </div>


{!! Form::close()!!}

@stop  