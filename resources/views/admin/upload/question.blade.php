@extends('layouts.admin')

@section('content')
    
                <section class="container bg-white  p-3">
<div class="row">
    <div class="col-md-8 mx-auto d-block">
            <h2 class="font-weight-light text-center "> {{ $chapter -> chapter }} || {{ $chapter -> name }}</h2>
             @if (session('status'))
                        <p class="alert alert-success"> {{ session('status') }}</p>
                    @endif
            
    </div>
</div>



  <!-- Button trigger modal -->
<button type="button" class="btn btn-success text-right font-weight-light" data-toggle="modal" data-target="#staticBackdrop">
  Add New Questions
</button> <hr>




 {{--  for table --}}

    <div class="row">
        <div class="col mx-auto d-block">
                <table class="table table-bordered">
                    <thead class=" bg-info">
                            <tr>
                                <th>No</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                               
                            </tr>
                    </thead>
                    <tbody>

                      @foreach ($exams as $exam)
                            <tr>
                                <td> {{ $exam -> id }}</td>
                                <td>{{ $exam -> question }}</td>
                                <td>{{ $exam -> ans }}</td>
                                <td> <input type="checkbox" data-id="{{ $exam -> id }}" class="question_status" name="status"
                                  @if ( $exam -> status == 1)
                                    checked
                                @endif>
                              </td>
                              <td> <a  href= "{{ action ('AdminController@edit_question',  $exam -> id) }}" class="btn btn-primary" >Edit</a></td>
                              <td><a href="{{ action ('AdminController@delete_question',  $exam -> id) }}" class="btn btn-danger" >Delete</a></td>
                            </tr>
                      @endforeach
                    
                    
                    </tbody>
                </table>
        </div>

    </div>


    {{--                                  end                                    --}}


</section>
<!---------------------------------------------------------------- forModal ------------------------------------------------------------------>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Questions </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="row">
                    @csrf
                    
                   

                   <div class="col-sm-12">
                      <div class="form-group">
                        <input type="text" name="question" id="question" placeholder="Input Question" class=" form-control" value="{{ old('question') }}" required>
                    </div>
                   </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option1" id="" placeholder="Input Option 1" class=" form-control" required>
                    </div>
                    </div>

                     <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option2" id="" placeholder="Input Option 2" class=" form-control" required>
                    </div>
                    </div>

                     <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option3" id="" placeholder="Input Option 3" class=" form-control" required>
                    </div>
                    </div>

                     <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="option4" id="" placeholder="Input Option 4" class=" form-control" required>
                    </div>
                    </div>

                       <div class="col-sm-8">
                    <div class="form-group">
                        <input type="text" name="ans" id="" placeholder="Enter Corect Answer" class=" form-control" required>
                    </div>
                    </div>






                               <input type="hidden" name="chapter_id" value="{{ $chapter -> id }}" >
                      
                        </div>
                   
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary  mt-3">Add New Question</button>
                     
            </form>
      </div>
      
    </div>
  </div>
</div>

@endsection