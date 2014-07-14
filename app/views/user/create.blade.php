@extends('layouts.master')

@section('container')

<div class="container">

	<div class="row">

		<h2 class="text-center">{{ Lang::get('text.create_account') }}</h2>

		{{ Form::open(array('route' => 'account/store', 'class' => 'form-horizontal col-md-4 col-md-offset-4', 'name' => 'create')) }}

			<div class="form-group">
			  	<div class="input-group">
			  		<span class="input-group-addon" type="submit"><i class="fa fa-user"></i></span>
			  		<input class="form-control" placeholder="{{ Lang::get('text.username') }}" name="name" type="text" data-ng-pattern="/^\s*\w*\s*$/" data-ng-model="name">
			  	</div>
			</div>

			<div class="form-group">
			  	<div class="input-group">
			  		<span class="input-group-addon" type="submit">@</span>
			  		<input class="form-control" placeholder="{{ Lang::get('text.email') }}" name="email" type="email"  data-ng-model="mail">
			  	</div>      	
			</div>

			<div class="form-group">
			  	<div class="input-group">
			  		<span class="input-group-addon" type="submit"><i class="fa fa-key"></i></span>
			  		<input class="form-control" placeholder="{{ Lang::get('text.password') }}" name="password" type="password" data-ng-model="password" data-ng-pattern="/^\s*\w*\s*$/">
			  	</div>      	
			</div>

			<div class="form-group">
			  	<div class="input-group">
			  		<span class="input-group-addon" type="submit"><i class="fa fa-key"></i></span>
			  		<input class="form-control" placeholder="{{ Lang::get('text.confirm_password') }}" name="confirmPassword" type="password" data-ng-model="confirmPassword" data-ng-pattern="/^\s*\w*\s*$/">
			  	</div>      	
			</div>

			{{ Form::submit(Lang::get('text.valid'), array('class' => 'btn btn-md btn-success btn-block', 'data-ng-disabled' => 'create.$invalid')) }}		

		{{ Form::close() }}

	</div>

</div>

@stop