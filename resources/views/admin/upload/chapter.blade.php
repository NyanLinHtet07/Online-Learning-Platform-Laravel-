@extends('layouts/admin')

@section('content')
            <h3 class="font-weight-light text-center text-succcess"> Click to Add New Chapters</h3>
      <section class="row">
          
@foreach ($allsubjects as $allsubject)
   
             
             <div class="col-md-4 m-3  mx-auto d-block ">
                      <a href="{{ action ('ChapterController@create',  $allsubject -> id) }}">
                        <div class="card p-3 text-center btn btn-outline-success">
                        <h5 class="card-text">   {{ $allsubject -> subject }}</h5>
                  </div>
                      </a>
              </div>
            
             
 @endforeach

            </section>

           
      
    
    
@endsection