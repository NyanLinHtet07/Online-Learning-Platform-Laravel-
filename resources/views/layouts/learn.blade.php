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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--- font-awesome -->
    <!-- Font Awesome JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!---------------------------->

      <!---------------- owl --------------->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    
    
</head>
<body>
    
      
        <!--------------------- navigation-------------------------->



        <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="{{ url('/learning') }}">
                <h3>Online Learinig</h3>
                
                <strong>OL</strong>
                </a>
            </div>
          
                
                


            <ul class="list-unstyled components">

                
                   

                <li>
                 <a href="{{ url('learning/learn') }}">
                        <i class="fas fa-briefcase"></i>
                            Learning Field 
                    </a>
                </li>

                <li>
                 <a href="{{ url('learning/'. Auth::user() ->id.'/results') }}">
                        <i class="fas fa-briefcase"></i>
                         Result
                    </a>
                </li>

                <!-- <li>
                 <a href="{{ url('learning/cart') }}">
                        <i class="fas fa-briefcase"></i>
                            Orders {{ count((array) session('cart')) }}
                    </a>
                </li> -->

                <li>
                    <a href="#"> Old Questions</a>
                </li>

                 

                <li>

                    

                   

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

            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container">

                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                   

                   <div class="ml-auto">
                           <button class="btn btn-success " data-toggle="modal" data-target="#UserModal" type="button"> {{ Auth::user() -> FullName }} </button>
                   </div>
                </div>
            </nav>



            <!--------------------------------------------------------------------->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <!-- Modal -->
<div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> User Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @csrf
            <p>Username  :  {{ Auth::user() -> FullName }}</p>
            <p> Phone  :  {{ Auth::user() -> phone }}</p>
            <p>Email : {{ Auth::user() -> email }}</p>
            <p>Address </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@yield('script')


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <script>
    $(document).bind("contextmenu",function(e){
      return false;
        });

    </script>
    
    <script>

       

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

       
    </script>
</body>
</html>
