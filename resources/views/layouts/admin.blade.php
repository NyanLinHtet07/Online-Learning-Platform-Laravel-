<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

      <script src="{{ asset('js/main.js') }}"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--- font-awesome -->
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!---------------------------->


    
    
</head>
<body>
    
      
        <!--------------------- navigation-------------------------->



        <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Online Learinig</h3>
                <strong>OL</strong>
            </div>
          
                
                


            <ul class="list-unstyled components">

                
                     <li class="active">
                    <a href="#pageGeneral" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        General
                    </a>
                    <ul class="collapse list-unstyled" id="pageGeneral">
                       
                        <li>
                            <a href="{{ url('admin/grades') }}">Grades</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/subjects') }}">Subjects</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/teachers') }}">Teachers</a>
                        </li>
                       
                      
                    </ul>
                </li>

                <li>
                 <a href="{{ url('admin/chapter') }}">
                        <i class="fas fa-briefcase"></i>
                            Add Lession
                    </a>
                </li>

                


                     <li class="active">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Student Info
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                       
                        <li>
                            <a href="{{ url('admin/users') }}">Users</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/roles') }}">Role</a>
                        </li>
                       
                      
                    </ul>
                </li>
                
                <li>

                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>

                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                     <button class="btn btn-success" onclick="return confirm('Are you sure you want to logout')">
                         <i class="fa fa-power-off"></i>
                        Log Out
                    </button>
                        
                   
                </form>
                </li>
                
            </ul>

        
          
        </nav>


        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        {{--  <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </nav>



            <!--------------------------------------------------------------------->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

      
</body>
</html>
