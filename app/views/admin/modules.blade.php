@extends('layouts.master')

@section('container')

<div class="container">
	<div class="page-header">
		<h2>Administration - modules</h2>
	</div>


	{{ Form::open(array('route' => 'admin/modules/update'), array('class' => 'form-horizontal')) }}

		@foreach ($modules as $module => $value)
			<div class="form-group">				
				<div class="checkbox">
				<label class="radio-inline" for="{{ $module }}">{{ $module }}</label>

					<label class="radio-inline" for="{{ $module }}">
						<input name="{{ $module }}" value="1" @if($value) checked @endif type="radio"> yes
					</label> 
					<label class="radio-inline" for="radios-1">
						<input name="{{ $module }}" value="0" @if(!$value) checked @endif type="radio"> no
					</label> 
				</div>
			</div>
		@endforeach

		<div class="form-group col-md-12">
			{{ Form::submit(Lang::get('text.valid'), array('class' => 'btn btn-lg btn-success')) }}
		</div>
	{{ Form::close() }}

</div>

@stop