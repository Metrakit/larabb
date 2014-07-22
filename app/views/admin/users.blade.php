@extends('layouts.admin')

@section('container')

<div class="container">
	<div class="page-header">
		<h2>{{ Lang::get('admin.user_list') }}</h2>
	</div>


	@foreach($users as $user)

		{{$user->name}} <br/>

	@endforeach

</div>

@stop