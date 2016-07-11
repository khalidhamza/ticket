<!DOCTYPE html>
<html>
    <head>
    	<title>
    			@if(!empty($title)) {{$title}} @else{{$title='Laravel'}} @endif
    	</title>        
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- font-awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
	    <!-- iCheck -->
	    <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
	    <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
	    <!-- Morris chart -->
	    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
	    <!-- jvectormap -->
	    <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
	    <!-- Date Picker -->
	    <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
	    <!-- Daterange picker -->
	    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
	    <!-- bootstrap wysihtml5 - text editor -->
	    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
	     <!-- DataTables -->
	    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
		<!-- jQuery 2.1.4 -->
	    <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
	    <!-- jQuery UI 1.11.4 -->
	    <!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->	   
	    <!-- Bootstrap 3.3.5 -->
	    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </head>

    <body>
		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container">
  				<div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Laravel</a>
			    </div>

			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
			    	 <ul class="nav navbar-nav">
			    	 	@if (Auth::guest())
			    	 		<li><a href="home">Home</a></li>
			    	 	@else
				    	 	<li><a href="home">Home</a></li>
				    	 	<li><a href="create">Create Ticket</a></li>									    	 	
				    	 	<li><a href="ticket">My Tickets</a></li>
			    	 	@endif
			    	 </ul>

			    	 <ul class="nav navbar-nav navbar-right">
			    	 	@if (Auth::guest())
	                       	<li><a href="login">Login</a></li>
	                   	    <li><a href="register">Register</a></li>
                   	    @else
	                   	    <li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
					          	<ul class="dropdown-menu">					            
						            <li><a href="logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
					         	</ul>
	       					</li>
       					@endif
                     </ul>
			    </div>	
		    </div>
		</nav>
		<style type="text/css">
			#link-btn{
				background: none;
				border: none;}
			#link-btn:hover{
				color: blue;
				text-decoration: underline;}
			.form-inline-{
				display: inline;}
		</style>
		
		<div class="row" style="margin-top:80px;">