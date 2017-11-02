<<<<<<< HEAD
@include('includes/head')
<body>
      <nav class="navbar navbar-default navbar-static-top" style="background:#4527A0;">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" style="color:#fff;" href="{{ url('/') }}">
                      {{ config('app.name', 'PROTASK') }}
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      &nbsp;
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @if (Route::has('login'))
                            <div class="top-right links" style="color: #fff;
                               padding: 0 25px;
                               font-size: 12px;
                               font-weight: 600;
                               letter-spacing: .1rem;
                               text-decoration: none;
                               text-transform: uppercase;
                               position: absolute;
                                 right: 10px;
                                 top: 18px;">
                                @auth
                                    <a href="{{ url('/home') }}" style="color:#fff;">Home</a>
                                @else
                                    <a href="{{ route('login') }}" style="color:#fff;margin-right:10px;">Login</a>
                                    {{-- <a href="{{ route('register') }}" style="color:#fff;">Register</a> --}}
                                @endauth
                            </div>
                      @endif
                  </ul>
              </div>
          </div>
      </nav>
      <div class="row" style="position:relative;top:120px;">
         <div class="col-md-6 col-md-offset-3 box-shadow" style="background:#4527A0;border:3px solid #4527A0;border-radius:12px; height:200px">
            <div class="" style="margin-top:80px;margin-left:180px;">
                <h1 class="text-center" style="color:#fff; border:1px solid #fff; border-radius:12px; width:300px;"><b>PROTASK</b></h1>

            </div>
             <p class="text-center" style="color:#fff;"> A Classic Task and Project Manager</p>
         </div>
      </div>
   <div style="margin-top:280px;">
         @include('includes/footer')
   </div>
</body>
=======
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
</html>
