@extends('layouts.master')

@section('container')

<div class="jumbotron">
  <div class="container">
    <h1>Welcome on LaraBB CMS</h1>
    <p>A simply CMS for developpers with modules (forum, shop, users, admin, ...).
    <br />This CMS is powered with Laravel, AngularJS and Bootstrap.</p>
    <p><a href="https://github.com/Metrakit/larabb" target="_blank" class="btn btn-primary btn-lg" role="button">Repository</a></p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>Powerful</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Modular</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
   </div>
    <div class="col-md-4">
      <h2>Easy to handle</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>
</div>

<hr />

@stop