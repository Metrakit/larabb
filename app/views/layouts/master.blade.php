
@include('includes.header')

<div class="navbar navbar-inverse" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-ng-click="navCollapse = !navCollapse">
        <span class="sr-only">{{ Lang::get('text.menu') }}</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{URL::route('home')}}">{{ Config::get('setting.brandname') }}</a>
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

            <li class="dropdown" data-stop-event="click">

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
                        <a href="{{URL::route('account')}}" class="btn btn-primary btn-block btn-sm">{{ Lang::get('text.modify_account') }}</a>
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
                      <li>
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
      &copy; <a href="{{URL::route('home')}}">{{ Config::get('setting.brandname') }}</a> 2014
    </p>
  </div>
</footer>

@include('includes.footer')