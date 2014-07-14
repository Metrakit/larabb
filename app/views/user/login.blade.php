@extends('layouts.master')

@section('container')

<div class="container login">

	<h2 class="text-center">{{ Lang::get('text.login') }}</h2>

    <div class="row">

		<div class="col-md-4 col-md-offset-4">

			@if(Session::get('message'))
				<div class="alert alert-danger">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif		

    		<div class="panel panel-default">

			  	<div class="panel-heading">
			    	<h3 class="panel-title">{{ Lang::get('text.enter_your_id') }}</h3>
			 	</div>

			  	<div class="panel-body">

			    	{{ Form::open(array('route' => 'check')) }}
	                    <fieldset>
				    	  	<div class="form-group">
				    		    <input class="form-control" placeholder="{{ Lang::get('text.user') }}" name="name" type="text">
				    		</div>
				    		<div class="form-group">
				    			<input class="form-control" placeholder="{{ Lang::get('text.password') }}" name="password" type="password" value="">
				    		</div>
				    		<div class="checkbox">
				    	    	<label>
				    	    		<input name="remember" type="checkbox" value="{{ Lang::get('text.remember_me') }}"> 
				    	    		{{ Lang::get('text.remember_me') }}
				    	    	</label>
				    	    </div>
				    		{{ Form::submit(Lang::get('text.login'), array('class' => 'btn btn-lg btn-success btn-block')) }}
				    	</fieldset>
			      	{{ Form::close() }}

			    </div>

			</div>

		</div>

	</div>

</div>

@stop