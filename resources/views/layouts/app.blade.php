<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container" style="background-color:#eef0d8">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                    @if (Auth::guest())
                        <li><a href="{{ url('/login')}}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>	
				@if(Auth::user()->admin != 1)
					<h8> ,You are Not Logged in As Admin and Cannot Edit Other Profiles <h8>
				@endif
                            <ul class="dropdown-menu" role="menu">
                			        
					@if(Auth::user()->admin)
					<li>
                                        <a href="{{url('/admin')}}" class="dropdown-menu" role="button">
                                           Admin
                                        </a>
					</li>
					<li>
					 <a href="{{url('/edit')}}" class="dropdown-menu" role="button">
                                           Edit
                                        </a>
					</li>
					@endif
	                        <li>
                                    <a href="{{ url('/profile',[Auth::user()->id]) }}" class="dropdown-menu" role="button">
                                        My Profile
                                    </a>
                                </li>
			

				 <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
	                        <form style="float: right;" action="{{ url('/search/{name}') }}" method="PUT" accept-charset="UTF-8">
                                    <input name="name" type="text" value="name"></input>
                                    <button type="submit">Search</button>
                                </form>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <ul>
                   <a href="{{url('/home')}}" class="dropdown-menu" role="button"><button> 
			Home
                     </button></a>
                </ul>
	     </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
