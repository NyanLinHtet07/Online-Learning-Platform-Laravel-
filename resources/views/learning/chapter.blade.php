@extends('layouts.learn')

@section('content')
    
  
               <div class="container">
                
          
             <h3 class="text-center font-weight-light mb-5">{{ $subject -> subject }}</h3> <hr>

             <button class="btn btn-lg btn-info ml-auto "> Buy All Chapters </button>

                <div class="row">
                   
                                    @foreach ($chapters as $chapter)
                                     <div class="col-md-5 mx-auto d-block">
                                            <div class="card p-3 m-3 shadow p-3 mb-5 bg-white rounded chapter_card" style="width: 25rem;">
                                                    <img src="{{ asset('/images/subjects/chapter/'.$chapter->cover) }}" class="card-img-top p-4 img-fluid card_img" alt="...">
                                                    <div class="card-body">
                                                        <div class="row">
                                                        <h5 class="card-text text-success">{{ $chapter -> chapter }} || {{ $chapter -> name }}</h5>
                                                    
                                                        <p class=" ml-auto badge badge-light">
                                                                        <img src="{{ asset('/profile/teachers/'.$chapter->teachers->profile) }}" alt="" width="30">
                                                                        <small class="card-text">{{ $chapter ->teachers -> name }}</small>
                                                        </p>

                                                        </div>

                                                        <small>{{ $chapter -> description }}</small>
                                                        <br>
                                                        <div class="row mt-2">

                                                         
                                                              
                                                          
                                                       {{--   @if ( $order->approve =='0'  ) --}}
                                                              
                                                               <a  href="{{ action('StudentController@lecture' , $chapter->id) }}" class="btn btn-secondary btn-sm ml-auto"> View More</a>
                                                           
                                                           
                                                       
                                                            {{-- <button type="submit" class="btn btn-success btn-lg">Buy Now</button> 
                                                                        <form method="post" action="{{ action('OrderCotroller@store') }}">
                                                                @csrf
                                                                <input type="hidden" value="{{ $chapter->id }}" name="chapter_id">
                                                                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                                                <input type="hidden" value="1" name="approve">
                                                                     </form> --}}
                                                                   
                                                                 
                                                                         
                                                                 
                                                             {{--         <a href="{{ route('add', [$chapter -> id]) }}" class="btn btn-success"> Order Now</a> --}}
                                                       
                                                                    
                                                      
                                                        </div>
                                                    </div>
                                                </div>
                                          </div>
                                        @endforeach

            
                        
             
                 
                  

              
               </div>
 
               </div>
@endsection