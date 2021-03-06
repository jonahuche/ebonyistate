<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/main.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="discription" content="Ebony State Government of Nigeria in fulfillment of its obligation to the people of Ebonyi state is embarking on aStimulus Development project for the 2019 calendar Year.">
        <meta name="keywords" content="Ebonyi State Government empowerment programme, Empowering the people, helping the people, Good governance">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
      @yield('styles')  
    </style>
</head>
    <body>
            <nav class="navbar navbar-inverse" style="background-color: #00FF99; border-radius: 0; border: 0">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="color: #fff;">
                      Menu
                  </button>
                 <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" width="200px" height="75px"> </a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{'/'}}">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#">Completed Projects</a></li>
                  <li class="dropdown-item"><a href="#">On Going Projects</a></li>
                  <li class="dropdown-item"><a href="#">Future Projects</a></li>
                </ul>
              </li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">About Ebonyi</a></li>
                  <li><a href="#">Past/Current Heros</a></li>
                  <li><a href="#">History</a></li>
                </ul>
              </li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>Sign Up For Stimulus Project
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="{{'engineers_and_scientists'}}">Engineers/Technologist</a></li>
                  <li class="dropdown-item"><a href="{{ 'teachers/index' }}">Teachers</a></li>
                  <li class="dropdown-item"><a href="elders.php">Elders Seeking For Business Opportunities</a></li>
                  <li class="dropdown-item"><a href="traders.php">Traders(Importers/Exporters)</a></li>
                  <li class="dropdown-item"><a href="doctors.php">Doctors</a></li>
                  <li class="dropdown-item"><a href="doctors.php">Business Interest</a></li>
                </ul>
              </li>
              <li><a href="#">Opportunities</a></li>
              <li><a href="#">Contact</a></li>
                  <ul class="nav navbar-nav navbar-right">
<!--                    <li><a href="#"> Sign Up For Programme</a></li>-->              @guest
                    <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    @else
                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        @endguest
                  </ul>
                  </ul>
                </div>
            </nav>
            <hr style="height:2px; margin: 0; background-color: green" />

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>