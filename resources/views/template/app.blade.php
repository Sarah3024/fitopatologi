<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <title>Sistem Manajemen Data Pegawai Biotrop</title>
   
        <link rel="stylesheet" href="{{URL ('assets/login/css/style.css')}}">
  </head>

<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
           
</br>
</br>
</br>
</br>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                @if (Auth::guest())
                <p> Sistem Manajemen Data Pegawai </p>
                    @else
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    @if(Auth::user()->admin==1)
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Master Data <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <a href="">Data satu</a>
                            <a href="">Data Dua</a>                            
                        </ul>                        
                    </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>                   
                </ul>
                 @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="{{URL ('assets/login/js/index.js')}}"></script>

    
</body>
</html>