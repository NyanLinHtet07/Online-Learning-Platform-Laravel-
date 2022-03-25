@extends('layouts.learn')

@section('content')
    
  
               <section class="container-fluid">
                    <h2 class="text-center text-info font-weight-light">" {{ $chapter -> subjects -> subject  }} "</h2>
                    
                    <p class="text-right">
                         <img src="{{ asset('/profile/teachers/'.$chapter->teachers->profile) }}" alt="" width="30">
                         <small class="card-text">{{ $chapter ->teachers -> name }}</small>
                    </p> 

                   <div class="row">
                       <div class="col-md-6 col-sm-12">
                                 <img src="{{ asset('/images/subjects/chapter/'.$chapter->cover) }}" class=" p-2 learn_img img-fluid " alt="...">
                       </div>
                       <div class="col-md-6 col-sm-12">
                                    <h5 class="card-text text-success">{{ $chapter -> chapter }} || {{ $chapter -> name }}</h5>
                                    <p class="card-text">{{ $chapter -> description }}</p>

                                    
                                    <a href="{{ action('StudentController@exam',$chapter->id) }}" class="btn btn-lg btn-success" > take a exam now</a>
                       </div>
                   </div>
        <hr>
                <h3 class=" font-weight-light mb-5"> All Lessions</h3>
                
                   <section class="container">
                            @foreach ($lectures as $lecture)
                                
                                        <div class="card shadow p-3 mb-5 bg-white rounded">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-10 ">
                                                            <img src="{{ asset('/images/guide.png') }}" alt="" class="lession_img mx-auto d-block img-fluid">
                                                        </div>
                                                        <div class="col-md-6 col-sm-10 mx-sm-auto d-block">
                                                                <h5 class="font-weight-light">{{ $lecture -> lession }} || {{ $lecture -> name }}</h5>
                                                                <p class="card-text text-justify">{{ $lecture -> description }}</p>
                                                               {{--   <a href="{{ action ('StudentController@lecture_detail' , $lecture -> id) }}"><button class="btn btn-primary">View Videos</button></a>  --}}
                                                        
                                                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#videoModal">View Video</button>
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                
                            
                                
                            @endforeach
                   </section>
                                
                                
                        
             
                 
                  
                                        </section>

                                        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">                    
                                                        <div class="modal-body">
                                                           <video controls controlsList="nodownload" width="100%" height="300">
                                                    
                                                                    <source src="{{ asset('/videos/lectures/'.$lecture -> video) }}" type="video/mp4">
                                                                    Your browser does not support HTML video.
                                                            </video>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>

              
               
@endsection