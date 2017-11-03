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
</html>
