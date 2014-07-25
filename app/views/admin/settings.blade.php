@extends('layouts.admin')

@section('container')

<div class="page-header">
	<h2>{{ Lang::get('admin.settings') }}</h2>
</div>

<div class="row">

	<div class="col-md-7">

		<div class="panel panel-warning">

			<div class="panel-heading">
				{{ Lang::get('admin.general_setting') }}
			</div>

			<div class="panel-body">

				{{ Form::open(array('route' => 'admin/settings/update', 'class' => 'form-horizontal')) }}

					<div class="form-group">
						<label class="col-md-3 control-label" for="sitename">{{ Lang::get('admin.sitename') }}</label>
						<div class="col-md-9">
							<input type="text" placeholder="{{ Lang::get('admin.sitename') }}" name="sitename" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="description">{{ Lang::get('admin.description') }}</label>
						<div class="col-md-9">
							<textarea placeholder="{{ Lang::get('admin.short_description') }}" name="description" class="form-control"></textarea>
						</div>
					</div>					

					<div class="form-group text-center">
						{{ Form::submit(Lang::get('text.valid'), array('class' => 'btn btn-success')) }}
					</div>
				{{ Form::close() }}

			</div>

		</div>

		<div class="panel panel-success">

			<div class="panel-heading">
				{{ Lang::get('text.social_networks') }}
			</div>

			<div class="panel-body">

				{{ Form::open(array('route' => 'admin/settings/update', 'class' => 'form-horizontal')) }}

					<div class="form-group">
						<label class="col-md-3 control-label" for="facebook_url">{{ Helper::concat('URL_c', 'Facebook') }}</label>
						<div class="col-md-9">
							<input type="text" placeholder="{{ Helper::concat('page_link', 'Facebook') }}" name="facebook_url" class="form-control">
						</div>
					</div>		

					<div class="form-group">
						<label class="col-md-3 control-label" for="twitter_url">{{ Helper::concat('URL_c', 'Twitter') }}</label>
						<div class="col-md-9">
							<input type="text" placeholder="{{ Helper::concat('page_link', 'Twitter') }}" name="twitter_url" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="google_url">{{ Helper::concat('URL_c', 'Google +') }}</label>
						<div class="col-md-9">
							<input type="text" placeholder="{{ Helper::concat('page_link', 'Google +') }}" name="google_url" class="form-control">
						</div>
					</div>					

					<div class="form-group">
						<label class="col-md-3 control-label" for="linkedin_url">{{ Helper::concat('URL_c', 'LinkedIN') }}</label>
						<div class="col-md-9">
							<input type="text" placeholder="{{ Helper::concat('page_link', 'LinkedIN') }}" name="linkedin_url" class="form-control">
						</div>
					</div>														

					<div class="form-group">
						<label class="col-md-3 control-label" for="youtube_url">{{ Lang::get('text.youtube_channel') }}</label>
						<div class="col-md-9">
							<input type="text" placeholder="{{ Lang::get('text.youtube_link') }}" name="youtube_url" class="form-control">
						</div>
					</div>	

					<div class="form-group text-center">
						{{ Form::submit(Lang::get('text.valid'), array('class' => 'btn btn-success')) }}
					</div>
				{{ Form::close() }}

			</div>

		</div>		

	</div>



	<div class="col-md-5">

		<div class="panel panel-primary">

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
									{{ Helper::concat('module', Lang::get('text.' . $module)) }}
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

		<div class="panel panel-primary">

			<div class="panel-heading">
				APIs
			</div>

			<div class="panel-body">
				{{ Form::open(array('route' => 'admin/modules/update')) }}

					<div class="form-group">				
						<div class="checkbox">
							<label for="facebookAPI">
								<input name="facebookAPI" type="checkbox" data-ng-model="facebookAPI">
								Facebook Key
							</label>
						</div>
					</div>

					<div class="form-group" data-ng-if="facebookAPI">
						<label class="col-md-4 control-label" for="linkedin_url">Facebook Key</label>
						<div class="col-md-8">
							<input type="text" placeholder="{{ Helper::concat('page_link', 'LinkedIN') }}" name="linkedin_url" class="form-control">
						</div>
					</div>	

					<div class="form-group col-md-12">
						{{ Form::submit(Lang::get('text.valid'), array('class' => 'btn btn-success')) }}
					</div>
				{{ Form::close() }}
			</div>

		</div>

	</div>



</div>

@stop