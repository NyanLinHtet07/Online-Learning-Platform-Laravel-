@extends('layouts.master')

@section('content')

<!---------------------------------------   for intro ------------------------------------------------>

  
            <section class="container-fluid bg-white">
                        <div class="row">
                                
                                <div class="col-lg-6 col-md-8 col-sm-12 cover mt-3">

                                        
                                        <div data-aos="fade-up"
                                                data-aos-easing="linear"
                                                data-aos-duration="1500"
                                                class="mx-auto d-block  p-4 m-5"> 

                                                <h1> Online Learning</h1>
                                                <span class="text mb-3">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Quidem aliquam, nemo expedita cum itaque recusandae, esse in adipisci 
                                                        architecto magni dolorem alias incidunt temporibus mollitia ipsum magnam doloremque.
                                                        Animi, adipisci?
                                                </span> <br>
                                                        
                                                <a class="nav-link" href="#"><button class="btn btn-success" type="button"> Start Learning Now</button> </a>
                                                
                                        </div>
                                </div>

                                        <div class="col-lg-6 col-md-8 col-sm-12">
                                        
                                                <img src="{{ asset('images/education.gif') }}" alt="" class="img-fluid brand-img" >
                                        
                                        </div>

                                
                                

                                </div>

                               
                        </section>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,192C640,181,800,107,960,64C1120,21,1280,11,1360,5.3L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                            </path>
                </svg>
            
        <!---------------------------------------------------- end ----------------------------------------------->


        <!------------------------------------------------- Our Teacher-------------------------------------------------------->

     {{--     <section class="container-fluid mt-4">
                <h2 class="text-center"> Teacher Field</h2>
                <div class="owl-carousel owl-theme">
                         @foreach ($teachers as $teacher)
                             
                        
                        <div class="item card shadow-sm p-3 mb-5 bg-white rounded" >
                                         <img src="{{ asset('profile/teachers/'.$teacher -> profile) }}" class="rounded-circle teacher_tp mx-auto d-block p-3 "   alt="...">
                                <div class="card-body bg-success rounded ">
                                        <p class="card-text text-monospace"> {{ $teacher -> name }}</p>
                                      <p class="card-text  badge badge-danger"> Subject -  {{ $teacher -> subjects -> subject }}</p> 
                                </div>
                        </div>

                        @endforeach

                       

                        
                </div>
        </section>
  --}}

 
<!-------------------------------------------------------end------------------------------------------------------------------>




    
@endsection