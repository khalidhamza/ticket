@extends(I.'master')
@section('content')
			<div class="col-lg-10 col-lg-push-1">
            	<div class="panel panel-default">
        		<!-- Default panel contents -->
        			<div class="panel-heading">Panel heading</div>
        			  <div class="panel-body">
						<!--<div id="tickets_wrapper" class="dataTables_wrapper no-footer">
							<div class="dataTables_length" id="tickets_length">
								<label>Show 
									<select name="tickets_length" aria-controls="tickets" class="">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select> entries</label>
							</div>

							<div id="tickets_filter" class="dataTables_filter">
								<label>Search:<input type="search" class="" placeholder="" aria-controls="tickets"></label>
							</div> -->
							
							@if(empty($tickets))
								<div class="alert alert-warning">
			                    	<i class="fa fa-exclamation-circle fa-lg"></i> 
			                    	there are no tickets to show ..
			                		please <a href="ticket">create a ticket</a>
			                	</div>

							@else
							<table id="data-table" class="table table-bordered table-striped list">
					            <thead>
						            <tr role="row">
						            	<th >title</th>
						            	<th >body</th>
						            	<th >user</th>
						            	<th >status</th>
						            	<th >created_at</th>
						            </tr>
					            </thead>
					            <tbody>
					            	@foreach($tickets as $ticket)
					            	 <tr role="">
					            	 	{!! Form::open(['route'=>'ticket.show','url'=>'ticket/'.$ticket->id,'method'=>'GET'])!!}
						            	<td >
						            		<button id="link-btn">{!! $ticket->title !!}</button>
						            		
						            	</td>
						            	<td >{!! $ticket->body !!}</td>
						            	<td >{{ Auth::user()->name }}</td>
						            	<td >
						            		@if($ticket->status ==1) 
						            			Pending
						            		@else
						            			Closed
						            		@endif
						            	</td>
						            	<td >{!! $ticket->created_at !!}</td>
						            	
						            	{!! Form::close()!!}
						            </tr>
						            @endforeach
					            </tbody>
       						</table>
       						@endif
        				</div>
        			</div>
        		</div>
        	</div>
		</div>
	@stop  	
	<script type="text/javascript">
		jQuery(document).ready(function($){
    	//$('#data-table').DataTable();
    	alert('kahlid');
		} );
	</script>