<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0f7ecc">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Info -->
    <title>Discreet Drop - @yield('subtitle', 'Guarantee Discreet Shipping on Any Package')</title>
    <meta name="description" content="@yield('description', 'Hide logos, return labels, invoices, holes, and all other identifying information on any package from any seller so your item arrives as discreet as possible.')">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    
    @yield('header')
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" id="mainNav">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick="toggle();" data-target="#app-navbar-collapse">
                    <div class="hamburger">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </div>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand logo" href="{{ url('/') }}"><img class="img-responsive" alt="Discreet Drop Logo" src="/images/DiscreetDropLogo.svg"></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Pricing Calculator</a></li>
                    <li class="disabled" disabled><a href="#">+</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
                        <a href="{{ url('/register') }}"><button class="btn btn-primary navbar-btn" href="{{ url('/register') }}">Sign Up For Free</button></a>
                    @else
                        <a href="{{ url('/register') }}"><button class="btn btn-primary navbar-btn" href="{{ url('/dashboard') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Dashboard</button></a>
                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->email }}</a>
                            <ul class="dropdown-menu arrow" role="menu">
                                <li><a href="{{ url('/login') }}"><i class="fa fa-cogs" aria-hidden="true"></i>Edit Profile</a></li>
                                <li>
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    

    @yield('content')


    <footer class="footer">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <div class="container" >
            <div class = "row">
                <div class="col-sm-12"><h4 class="text-center">Connect with us!</h4></div>
            </div>
            <div class = "row">
                <div class="col-sm-3 col-sm-offset-3">
                    <div class="btn-toolbar">
                        <button class="btn btn-primary btn-block btn-lg btn-twitter" onclick="window.open('https://twitter.com/discreetdrop');"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i>Twitter</button>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="btn-toolbar">
                        <button class="btn btn-primary btn-block btn-lg btn-facebook" onclick="window.open('https://www.facebook.com/DiscreetDrop/');"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i>Facebook</button>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <div class = "row">
                <div class="col-sm-6">
                    <div class="col-xs-6">
                        <h4>Discover</h4>
                        <a href="" class="dark-link">Home</a> <br>
                        <a href="" class="dark-link">How It Works</a> <br>
                        @if (Auth::guest())
                            <a href="" class="dark-link">Sign Up</a> <br>
                            <a href="" class="dark-link">Log In</a> <br>
                        @else
                            <a href="" class="dark-link">Dashboard</a> <br>
                            <a href="" class="dark-link">Edit Profile</a> <br>
                            <a href="" class="dark-link">Log Out</a> <br>
                        @endif
                        <a href="" class="dark-link">Pricing Calculator</a> <br>
                        <a href="" class="dark-link">FAQ</a>
                    </div>
                    <div class="col-xs-6">
                        <h4>Company</h4>
                        <a href="" class="dark-link">About</a> <br>
                        <a href="" class="dark-link">Contact Us</a> <br>
                        <a href="" class="dark-link">Trust &amp; Safety</a> <br>
                        <a href="" class="dark-link">Style Guide</a> 
                    </div>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-sm-6">
                    <div class="col-xs-6">
                        <h4>Resources</h4>
                        <a href="" class="dark-link">Privacy Policy</a> <br>
                        <a href="" class="dark-link">Legal</a> <br>
                        <a href="https://www.usps.com/" class="dark-link" target="_blank">USPS Website</a> <br>
                        <a href="https://stripe.com/" class="dark-link" target="_blank">Stripe Website</a>
                    </div>
                    <div class="col-xs-6">
                        <h4>Social</h4>
                        <a href="https://twitter.com/discreetdrop" class="dark-link" target="_blank">Twitter</a> <br>
                        <a href="https://www.facebook.com/DiscreetDrop/" class="dark-link" target="_blank">Facebook</a>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class="col-sm-4 col-sm-offset-4"><p class="text-center">Made with &#x2764; in Buffalo, NY.</p></div>
            </div>
            <div class = "row">
                <div class="col-sm-4 col-sm-offset-4"><p class="text-center">&copy; Discreet Drop <?php echo date("Y"); ?></p></div>
            </div>
            
        </div>
        @yield('footer')
        <script src="/js/app.js"></script>
    </footer>
</body>
</html>
