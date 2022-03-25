@extends('layouts.learn')

@section('content')

@foreach ($results as $result)
       
       
       

        <div class="row">
                <div class="col-sm-12 col-md-5 mx-auto d-block">
                        <div class="card shadow p-3 mb-5 bg-white rounded border border-success">
                                <div class="card-body">
                                         <h4 class="card-title font-weight-light"> Student Name : {{ $result -> user -> firstname }} {{ $result -> user -> lastname }}</h4>
                                         <h6 class="font-weight-bold"> {{ $result->user-> grade-> grade }}</h6>
                                         <hr>

                                        <h5 class="card-title"> {{ $result-> chapter->subjects -> subject }}</h5>
                                        <h6> {{ $result -> chapter ->chapter }} || {{ $result -> chapter ->name }}</h6>
                                       

                                        <hr>
                                        <h4 class="card-text">
                                                Correct Answer : <sup>{{ $result -> yes_ans }}</sup>&frasl;<sub>{{ $result -> yes_ans + $result -> no_ans  }}</sub>
                                        </h4>



                                </div>
                        </div>
                </div>
        </div>
@endforeach


@endsection