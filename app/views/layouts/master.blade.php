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
            <button type="button" class="navbar-toggle" data-ng-click="navCollapse = !navCollapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::route('home')}}">LaraBB</a>
          </div>

          <div class="navbar-collapse" data-collapse="!navCollapse">

            <ul class="nav navbar-nav">
              <li>
                <a href="{{URL::route('home')}}">{{ Lang::get('text.home') }}</a>
              </li>
              {{ Module::link('forum', URL::route('forum'), Lang::get('text.forum')) }}
              {{ Module::link('gallery', URL::route('gallery'), Lang::get('text.gallery')) }}
              {{ Module::link('shop', URL::route('shop'), Lang::get('text.shop')) }}
            </ul>

           
            @module('user')
              <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())

                  <li class="dropdown">

                    <a href="#" class="dropdown-toggle text-strong" data-toggle="dropdown">
                      {{ Lang::get('text.my_account') }}
                      <i class="fa fa-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">

                      <li>
                        <div>
                          <div class="row">
                            <div class="col-sm-4 text-center">
                              <img src="" />
                            </div>
                            <div class="col-sm-8">
                              <p class="text-strong">{{Auth::user()->name}}</p>
                              <p class="small">{{Auth::user()->email}}</p>
                              <a href="{{URL::route('account')}}" class="btn btn-primary btn-block btn-sm">Modifier mon compte</a>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="divider"></li>

                      <li>
                        <div class="session">
                          <div class="row">
                             <div class="col-sm-12">
                              <p>
                                <a href="{{URL::route('logout')}}" class="btn btn-danger btn-block">{{ Lang::get('text.logout') }}</a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </li>

                    </ul>

                  </li>

                @else

                  <li>
                    <a href="{{URL::route('login')}}">{{ Lang::get('text.login') }}</a>
                  </li>

                  @if(Config::get('setting.inscriptions'))
                  <li>
                    <a href="{{URL::route('account/create')}}">{{ Lang::get('text.register') }}</a>
                  </li>
                  @endif

                @endif

              </ul>
            @endmodule

            {{-- Search module --}}
            @module('search')

              <div class="navbar-right">
                {{ Form::open(array('route' => 'search', 'class' => 'navbar-form',  'role' => 'search')) }}
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="{{ Lang::get('text.search') }}" name="keywords">
                    <div class="input-group-btn">
                      <span dropdown>
                        <button class="btn btn-default btn-search dropdown-toggle" type="button">
                          <i class="fa" data-ng-class="searchType ? 'fa-' + searchType : 'fa-cog'"></i> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">

                          @module('user')
                            <li>s
                              <a href="#" data-ng-click="searchType = 'user'">
                                <i class="fa fa-user"></i> {{ Lang::get('text.user') }}
                              </a>
                            </li> 
                          @endmodule

                          @module('forum')
                            <li>
                              <a href="#" data-ng-click="searchType = 'list'">
                                <i class="fa fa-list"></i> {{ Lang::get('text.forum') }}
                              </a>
                            </li> 
                          @endmodule

                          @module('gallery')
                            <li>
                              <a href="#" data-ng-click="searchType = 'photo'">
                                <i class="fa fa-photo"></i> {{ Lang::get('text.picture') }}
                              </a>
                            </li> 
                          @endmodule

                        </ul>
                      </span>
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                {{ Form::close() }}
              </div>  

            @endmodule
            {{-- End of Search module --}}

          </div>

        </div>
      </div>

      @yield('container')

      <footer>
        <div class="container text-right">
          <p>
            {{-- Check if the connected user is an admin --}}
            @role('admin')
              <a href="{{URL::route('admin')}}">{{ Lang::get('text.administration') }}</a> 
            @endrole
            &copy; <a href="{{URL::route('home')}}">LaraBB</a> 2014
          </p>
        </div>
      </footer>
    
      {{ HTML::script('js/angular.min.js') }}
      {{ HTML::script('js/main.min.js') }}

    </body>

</html>
