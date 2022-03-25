@extends('layouts.learn')

@section('content')
    
  
               <section class="container-fluid">
                    <h2 class="text-center text-info font-weight-light">" {{ $lecture -> lession }} || {{ $lecture -> name }} "</h2>
                    
                 

                   <div class="row">
                       <div class="col-md-6 col-sm-12">
                                 <img src="{{ asset('/images/guide.png') }}" class=" p-2 learn_img " alt="...">
                       </div>
                       <div class="col-md-6 col-sm-12">
                                 
                                    <p class="card-text mt-4">{{ $lecture -> description }}</p>

                                    
                       </div>
                   </div>
                 <hr> 


             
                            <div class="embed-responsive embed-responsive-16by9">
                             
                                      <video controls controlsList="nodownload" width="200" height="100">
                          
                                        <source src="{{ asset('/videos/lectures/'.$lecture -> video) }}" type="video/mp4">
                                        Your browser does not support HTML video.
                                        </video>
                                 
                            </div>
             

                  
                                               
                                                  
                                         {{--         <source class=" " src="{{ asset('/videos/lectures/'.$files) }}" alt="" type="video/mp4" >  --}}
                                                      
                                               
                      

                    

                     
                 
                  
                </section>

              
               
@endsection