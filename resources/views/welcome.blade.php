<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Traffic Case e-Service</title>
        <link rel="icon" type="image/x-icon" href="{{asset('user/assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{ asset('https://use.fontawesome.com/releases/v5.15.3/js/all.js') }}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('user/css/styles.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Traffic Case e-Service</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="{{ route ('vehicle') }}">Vehicle</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route ('driver') }}">Driver</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route ('traffic') }}">Bangladesh Traffic Police</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route ('contract') }}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route ('about') }}">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('user/img/traffic.jpg') }}')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1>Traffic Case e-Service </h1> <br>
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container">
            @yield('content')
          
        </div>
        <hr />
        
        

        <!-- Footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">Copyright &copy; Your Website 2021</p>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Bootstrap core JS-->
        <script src="{{asset ('https://code.jquery.com/jquery-3.5.1.min.js') }}"></script>
        <script src="{{asset ('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{asset ('user/js/scripts.js') }}"></script>
        <script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script >
       @if(Session::has('messege'))
       var type="{{Session::get('alert-type','info')}}"
       switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break; 
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;           
       }

       @endif
    </script>
    </body>
</html>


