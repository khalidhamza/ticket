@extends(I.'master')
@section('content')



	<div class="col-md-6 col-md-offset-3">
        <div class="thumbnail">         
            <div class="caption">
                <p>Status :
                	@if($details->status ==1)
                		<button class="btn btn-warning">Pending</button>
                    @else
                    	<button class="btn btn-danger">Closed</button>
                    @endif
                    
                </p>
                <h3>{!! $details->title !!}</h3>
                <p>{!! $details->body !!}</p>
            </div>
                
                {!! link_to('ticket/'.$details->id.'/edit', 'Edit' ,['class'=>'btn btn-primary btn-md form-inline'])  !!}

                {!! Form::model($details,['method'=>'DELETE','url'=>'ticket/'.$details->id,'role'=>'form', 'class'=>'form-inline- Form_Ajax', 'id'=>'form']) !!}
                @if($details->status ==1)
                	<button class="btn btn-warning clear" name="status" value="0"><i class="fa fa-times fa-lg"></i>  Close Ticket</button>            
                @else                 	
                 	<button class="btn btn-success clear" name="status" value="1"><i class="fa fa-magic fa-lg"></i>  Reopen</button>

                @endif
                {!! Form::close() !!}

                
                
        </div>
        {!! link_to('ticket' ,'Cancel',array('class'=>'btn btn-danger pull-right')) !!}
    </div>

@stop