@extends('layouts.admin')

@section('container')

<div class="page-header">
	<h2>{{ Lang::get('admin.settings') }}</h2>
</div>

<div class="row">

	<div class="col-md-8">

		<div class="panel panel-default">

			<div class="panel-heading">
				{{ Lang::get('admin.general_setting') }}
			</div>

			<div class="panel-body">
			
				{{ Form::open(array('route' => 'admin/settings/update', 'class' => 'form-horizontal')) }}

					<div class="form-group">
						<label class="col-md-2 control-label" for="brandname">Nom du site</label>
						<div class="col-md-10">
							<input type="text" placeholder="Nom du site" name="brandname" class="form-control">
						</div>
					</div>

					<div class="form-group text-center">
						{{ Form::submit(Lang::get('text.valid'), array('class' => 'btn btn-success')) }}
					</div>
				{{ Form::close() }}

			</div>

		</div>

	</div>

	<div class="col-md-4">

		<div class="panel panel-default">

			<div class="panel-heading">
				{{ Lang::get('admin.modules') }}
			</div>

			<div class="panel-body">
				{{ Form::open(array('route' => 'admin/modules/update')) }}

					@foreach ($modules as $module => $value)
						<div class="form-group">				
							<div class="checkbox">
								<label for="{{ $module }}">
									<input name="{{ $module }}" @if($value) checked @endif type="checkbox">
									{{ Lang::get('text.' . $module) }}
								</label>
							</div>
						</div>
					@endforeach

					<div class="form-group col-md-12">
						{{ Form::submit(Lang::get('text.valid'), array('class' => 'btn btn-success')) }}
					</div>
				{{ Form::close() }}
			</div>

		</div>

	</div>


</div>

@stop