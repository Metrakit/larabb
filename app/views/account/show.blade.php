@extends('layouts.master')

@section('container')

<div class="container">

	<div class="page-header">
		<h2>{{ Lang::get('text.my_account') }}</h2>
	</div>

	@if(Session::get('message'))
		<div class="alert alert-info">
			<p>{{Session::get('message')}}</p>
		</div>
	@endif

</div>

@stop