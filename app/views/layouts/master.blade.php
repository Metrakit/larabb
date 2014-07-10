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

        <link rel="stylesheet" href="css/main.min.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>

      <!--[if lt IE 7]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LaraBB</a>
          </div>
          <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div>
        </div>
      </div>


      @yield('container')


      <footer>
        <div class="container">
          <p>&copy; LaraBB 2014</p>
        </div>
      </footer>

      <script src="js/angular.min.js"></script>
      <script src="js/main.min.js"></script>

    </body>
    
</html>
