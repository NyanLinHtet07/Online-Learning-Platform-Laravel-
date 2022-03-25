@extends('layouts.admin')

@section('content')
        <div class="row">

      <div class="card col-md-8 mx-auto d-block p-3">
          <h3 class="text-center font-weight-light p-3"> Edit Q&A</h3>
                    <form method="post" action="{{ url('admin/update_question_detail/'.$question->id) }}" enctype="multipart/form-data">
                   <div class="row">
                    @csrf
                    
                   

                   <div class="col-sm-12">
                      <div class="form-group">
                        <input type="text" name="question"   class=" form-control" value="{{ $question -> question }}" required>
                    </div>
                   </div>
                    
                   <?php
                            $options = json_decode ( $question -> options )

                   ?>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option1" id=""  class=" form-control" value="{{ $options -> option1 }}" required>
                    </div>
                    </div>

                     <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option2" id="" value="{{ $options -> option2 }}" class=" form-control" required>
                    </div>
                    </div>

                     <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option3" value="{{ $options -> option3 }}" id="" class=" form-control" required>
                    </div>
                    </div>

                     <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option4" id=""  value="{{ $options -> option4 }}" class=" form-control" required>
                    </div>
                    </div>

                       <div class="col-sm-8">
                    <div class="form-group">
                        <input type="text" name="ans" id="" value="{{ $question -> ans }}" class=" form-control" required>
                    </div>
                    </div>






                               <input type="hidden" name="chapter_id" value="{{ $question -> chapter_id }}" >
                      
                        </div>
                   
                    
                    
                    <button class="btn btn-primary  mt-3">Update</button>
                     

            </form>
      </div>
@endsection