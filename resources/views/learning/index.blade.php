@extends('layouts.learn')

@section('content')
    
   
               <div class="container">
                 
                <div class="row">
              
                        
                       @foreach ($subjects as $subject)

                  
                       
                      <div class=" col-lg-6 col-md-10 col-sm-12 mx-auto d-block">
                          <a class="nav-link" href="{{ action('StudentController@chapter' , $subject->id) }}" >
                      <div class="card shadow p-3 mb-5 bg-white rounded subject_card">
                         <div class="card-body">
                          
                           <h3 class="card-title font-weight-light text-success "> Subject - <b>{{ $subject -> subject }} </b></h3>
                        <hr class="line">
                          @foreach ($subject -> teachers as $teacher)
                          <span class="text-right p-3 btn_teacher ">
                            <img src="{{ asset('profile/teachers/'.$teacher -> profile) }}" class="rounded-circle teacher_img" alt="">
                                {{ $teacher->name }}
                                {{ $teacher -> position }}
                          </span>
                          @endforeach
                        

                          </div>
                       </div>
                        </a>
                      </div>
                      
                   
        
                       @endforeach
                 
                </div>
               </div>
 
   
@endsection