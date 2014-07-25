
@include('includes.header')

<div class="admin">

  <nav class="navbar navbar-default navbar-static-top" role="navigation">

      {{-- Header --}}
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-ng-click="navCollapse = !navCollapse">
              <span class="sr-only">{{ Lang::get('text.menu') }}</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::route('admin')}}">
            {{ Config::get('setting.sitename') }} <small>{{ Lang::get('text.administration') }}</small>
          </a>
      </div>

      <ul class="nav navbar-right">   
        <li>
          <a href="{{URL::route('home')}}">
            <i class="fa fa-home"></i>
          </a>
        </li>
      </ul>

      {{-- Left bar --}}
      <div class="navbar-default leftbar navbar-collapse" data-collapse="!navCollapse" role="navigation">
       
        <ul class="nav">

          {{-- DASHBOARD --}}
          <li>
              <a href="{{ URL::route('admin') }}">
                <i class="fa fa-dashboard fa-fw"></i> {{ Lang::get('admin.dashboard') }}
              </a>
          </li>

          {{-- SETTINGS --}}
          <li>
              <a href="{{ URL::route('admin/settings') }}">
                <i class="fa fa-cogs fa-fw"></i> {{ Lang::get('admin.settings') }}
              </a>                 
          </li>

          {{-- USERS --}}
          <li>
              <a href="#" data-ng-click="users = !users">
                <i class="fa fa-user fa-fw"></i> {{ Lang::get('text.users') }} <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="nav nav-second-level" data-collapse="!users">
                  <li>
                      <a href="#">{{ Lang::get('admin.create_user') }}</a>
                  </li>
                  <li>
                      <a href="{{ URL::route('admin/users') }}">{{ Lang::get('admin.user_list') }}</a>
                  </li>
              </ul>
          </li>             

          {{-- GROUPS --}}
          <li>
              <a href="#" data-ng-click="groups = !groups">
                <i class="fa fa-group fa-fw"></i> {{ Lang::get('admin.groups') }} <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="nav nav-second-level" data-collapse="!groups">
                  <li>
                      <a href="#">{{ Lang::get('admin.create_group') }}</a>
                  </li>
                  <li>
                      <a href="#">{{ Lang::get('admin.group_list') }}</a>
                  </li>
              </ul>
          </li>

          {{-- PERMISSIONS --}}
          <li>
              <a href="#">
                <i class="fa fa-group fa-fw"></i> {{ Lang::get('admin.permissions') }} 
              </a>                 
          </li> 

          {{-- FORUM --}}
          <li>
              <a href="#" data-ng-click="forum = !forum">
                <i class="fa fa-table fa-fw"></i> {{ Lang::get('text.forum') }} <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="nav nav-second-level" data-collapse="!forum">
                  <li>
                      <a href="#">{{ Lang::get('admin.create_forum') }}</a>
                  </li>
                  <li>
                      <a href="#">{{ Lang::get('admin.forum_list') }}</a>
                  </li>
              </ul>
          </li>

          {{-- STATISTICS --}}
          <li>
              <a href="#">
                <i class="fa fa-bar-chart-o fa-fw"></i> {{ Lang::get('admin.statistics') }} 
              </a>                 
          </li> 

        </ul>

      </div>

  </nav>

  <div class="layout">
    @yield('container')
  </div>

</div>

@include('includes.footer')