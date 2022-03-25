@extends('layouts.admin')
@section('content')
    @section('content')
            <h5 class="font-weight-light text-center text-succcess"> Add or View  Chapters And Q & A</h5>
      <section class="row">
          
@foreach ($subjects as $allsubject)
   
             
             <div class="col-md-4 m-3  mx-auto d-block ">
                      <a href="{{ action ('ChapterController@create',  $allsubject -> id) }}">
                        <div class="card p-3 text-center btn btn-outline-success">
                        <h5 class="card-text">   {{ $allsubject -> subject }}</h5>
                  </div>
                      </a>
              </div>
            
             
 @endforeach
    
@endsection 