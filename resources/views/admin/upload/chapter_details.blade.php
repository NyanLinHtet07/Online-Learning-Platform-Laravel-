@extends('layouts.admin')
@section('content')
        
        <section class="container bg-white  p-3">
<div class="row">
    <div class="col-md-8 mx-auto d-block">
            <h2 class="font-weight-light text-center "> All Chapters of {{ $subject -> subject }}</h2>
             @if (session('status'))
                        <p class="alert alert-success"> {{ session('status') }}</p>
                    @endif
            
    </div>
</div>



  <!-- Button trigger modal -->
<button type="button" class="btn btn-success text-right font-weight-light" data-toggle="modal" data-target="#staticBackdrop">
  Add New Chapters
</button> <hr>




 {{--  for table --}}

    <div class="row">
        <div class="col mx-auto d-block">
                <table class="table table-bordered">
                    <thead class=" bg-info">
                            <tr>
                                <th>No</th>
                                <th>Cover</th>
                                <th>Chapter</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Grade</th>
                                <th>Add Lessions</th>
                                <th>Add Questions</th>
                               
                            </tr>
                    </thead>
                    <tbody>

                        @foreach ($chapters10 as $chapter)
                            <tr>
                            <td>{{ $chapter -> id }}</td>
                            <td> <img class="img-thumbnail small_img" src="{{ asset('/images/subjects/chapter/'.$chapter->cover) }}" alt=""></td>
                            <td>{{ $chapter -> chapter }}</td>
                            <td>{{ $chapter -> name }}</td>
                            <td>{{ $chapter -> description }}</td>
                            <td>{{ $chapter->grades->grade }}</td>
                            <td> <a href="{{ action('LectureController@create' , $chapter -> id) }}"> <button class="btn btn-sm btn-success"> Add New Lessons</button> </a> </td>
                            <td> <a href="{{ action('AdminController@add_question' , $chapter->id) }}"> <button class="btn btn-sm btn-primary" type="button">Add question</button></a> </td>
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Upload New Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    
                   

                    <div class="form-group">
                        <input id="my-input" class="form-control-file" type="file" name="cover">
                    </div>

                      <div class="form-group">
                        <input type="text" name="chapter" id="chapter" placeholder="Input Chapter" class=" form-control" value="{{ old('chapter') }}">

                        @error('chapter')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Input Name" class=" form-control" value="{{ old('name') }}">

                        @error('name')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                       
                            <textarea id="my-textarea" class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                     
                        

                        @error('description')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                               <input type="hidden" name="subject_id" value="{{ $subject -> id }}" >
                           </div>

                    <div class="form-group">
                               
                                <select class="custom-select" name="teacher_id">

                                        <option selected>Choose Teacher</option>
                                        @foreach ($teachers as $teacher )
                                            <option value="{{ $teacher -> id }}">{{ $teacher -> name }}</option>
                                     
                                        @endforeach
                                        
                                      
                                    </select>
                           </div>
                             <div class="form-group">
                               
                                <select class="custom-select" name="grade_id">

                                        <option selected>Choose Grade</option>
                                        @foreach ($grades as $grade )
                                            <option value="{{ $grade -> id }}">{{ $grade -> grade }}</option>
                                     
                                        @endforeach
                                        
                                        
                                    </select>
                           </div>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary  mt-3">Add New Chapter</button>

            </form>
      </div>
      
    </div>
  </div>
</div>




@endsection 