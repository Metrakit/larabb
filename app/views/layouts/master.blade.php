<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" data-ng-app="app" data-ng-controller="initCtrl"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>LaraBB - CMS powered with Laravel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{ HTML::style('css/main.min.css') }}
        {{ HTML::script('js/modernizr-2.6.2-respond-1.1.0.min.js') }}
    </head>

    <body>

      <!--[if lt IE 7]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    
      <div class="navbar navbar-inverse" role="navigation">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::route('home')}}">LaraBB</a>
          </div>

          <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
              <li>
                <a href="{{URL::route('home')}}">{{Lang::get('text.home')}}</a>
              </li>
              {{ Module::link('forum', URL::route('forum'), Lang::get('text.forum')) }}
              {{ Module::link('gallery', URL::route('gallery'), Lang::get('text.gallery')) }}
              {{ Module::link('shop', URL::route('shop'), Lang::get('text.shop')) }}
              <li>
                <a href="{{URL::route('admin')}}">{{Lang::get('text.administration')}}</a>
              </li>
            </ul>

            @module('search')
            <div class="col-sm-3 col-md-3">
                <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                </form>
            </div>            
            @endmodule

            @module('user')
              <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                  <li>
                    <a href="{{URL::route('account')}}">{{Lang::get('text.my_account')}}</a>
                  </li>
                  <li>
                    <a href="{{URL::route('logout')}}">{{Lang::get('text.logout')}}</a>
                  </li>
                @else
                  <li>
                    <a href="{{URL::route('login')}}">{{Lang::get('text.login')}}</a>
                  </li>
                  <li>
                    <a href="{{URL::route('create')}}">{{Lang::get('text.register')}}</a>
                  </li>               
                @endif
              </ul>
            @endmodule

          </div>

        </div>
      </div>


      @yield('container')


      <footer>
        <div class="container text-right">
          <p>&copy; <a href="{{URL::route('home')}}">LaraBB</a> 2014</p>
        </div>
      </footer>

      {{ HTML::script('js/angular.min.js') }}
      {{ HTML::script('js/main.min.js') }}

    </body>

</html>
