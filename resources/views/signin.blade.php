<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('css/font.css') }}" type="text/css" cache="false" />
    <link rel="stylesheet" href="{{ url('css/plugin.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('css/app.css') }}" type="text/css" />
    <!--[if lt IE 9]>
      <script src="{{ url('js/ie/respond.min.js') }}" cache="false"></script>
      <script src="{{ url('js/ie/html5.js') }}" cache="false"></script>
      <script src="{{ url('js/ie/fix.js') }}" cache="false"></script>
    <![endif]-->

  </head>
  <body>
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
      <a class="nav-brand" href="index.html">todo</a>
      <div class="row m-n">
        <div class="col-md-4 col-md-offset-4 m-t-lg">
          <section class="panel">
            <header class="panel-heading text-center">
              Sign in
            </header>
            <form action="index.html" class="panel-body">
              <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" placeholder="test@example.com" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" id="inputPassword" placeholder="Password" class="form-control">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Keep me logged in
                </label>
              </div>
              <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
              <button type="submit" class="btn btn-info">Sign in</button>
              <div class="line line-dashed"></div>
              <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="icon-facebook pull-left"></i>Sign in with Facebook</a>
              <a href="#" class="btn btn-twitter btn-block"><i class="icon-twitter pull-left"></i>Sign in with Twitter</a>
              <div class="line line-dashed"></div>
              <p class="text-muted text-center"><small>Do not have an account?</small></p>
              <a href="signup.html" class="btn btn-white btn-block">Create an account</a>
            </form>
          </section>
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer id="footer">
      <div class="text-center padder clearfix">
        <p>
          <small>Mobile first web app framework base on Bootstrap<br>&copy; 2013</small>
        </p>
      </div>
    </footer>
    <!-- / footer -->

    <!-- / footer -->
  	<script src="{{ url('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('js/bootstrap.js') }}"></script>
    <!-- app -->
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/app.plugin.js') }}"></script>
    <script src="{{ url('js/app.data.js') }}"></script>

  </body>
</html>
