@extends('layouts.learn')

@section('content')
<style type="text/css">
        .question_option > li{
            list-style: none !important;
            height: 50px;
            line-height: 50px
        }
</style>
        <div class="text-center">
              <h5 class="card-text text-success">{{ $chapter -> chapter }} || {{ $chapter -> name }}</h5>
                                    <p class="card-text">{{ $chapter -> description }}</p>
        </div> <hr>

            <section class="container">

                {{--                                       header                        --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="row text-center">

                                <h5 class="card-title col">Time : 10 mins</h5>
                                    
                                 <h5 class="card-title col"><span class="js-timeout">10:00</span></h5>

                                 <h5 class="card-title col"> Start Now</h5>

                            </div>
                            </div>
                        </div>

                
                        {{-- -----------------------------question list------------------------------ --}}

                        <div class="card mt-4">
                            <div class="card-body">
                                <form action="{{  url('/learning/submit_question') }}" method="post">
                                    @csrf
                                 
                                    <input type="hidden" name="chapter_id" value="{{ Request::segment(2) }}">
                               <div class="row">
                                   @foreach ($exams as $key => $exam)

                                       
                                
                                   <div class="col-sm-12 mt-4">
                                        <p class="card-text"> <b>{{  $key +1 }} . {{ $exam ['question'] }} </b></p>

                                        
                                      
                                            <?php
                                                    $options = json_decode(json_encode(json_decode($exam['options'])), true);
                                            ?>
                                        <input type="hidden" name="question{{ $key+1 }}" value=" {{ $exam['id']}}">

                                              <ul class="question_option">
                                                <li> <input type="radio" name="ans{{ $key +1 }}"   value="{{ $options['option1'] }}" id="">{{ $options['option1'] }}</li>
                                                <li> <input type="radio" name="ans{{ $key +1 }}"  value="{{ $options['option2'] }}" id=""> {{ $options['option2'] }}</li>
                                                <li> <input type="radio" name="ans{{ $key +1 }}"  value="{{ $options['option3'] }}" id=""> {{ $options['option3'] }}</li>
                                                <li> <input type="radio" name="ans{{ $key +1 }}" value="{{ $options['option4'] }}" id=""> {{ $options['option4'] }}</li>
                                                 <li style="display:none;"> <input type="radio" name="ans{{ $key +1  }}" value="0" id="" checked="checked"> {{ $options['option4'] }}</li>

                                        </ul>
                                   </div>

                                      @endforeach
                                   

                                    <div class="col-sm-12 mt-4">
                                        <input type="hidden" name="index" value="<?php  echo $key+1 ?>">
                                        <button class="btn btn-primary btn-block" type="submit" >Submit</button>
                                   </div>
                                 </div>
                                </form>
                            </div>
                        </div>

            </section>

@endsection