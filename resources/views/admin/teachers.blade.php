@extends('layouts.admin')
@section('content')

<section class="container bg-white  p-3">
<div class="row">
    <div class="col-md-8 mx-auto d-block">
            <h3 class="font-weight-light text-center"> Teachers Field</h3>
             @if (session('status'))
                        <p class="alert alert-success"> {{ session('status') }}</p>
                    @endif
            
    </div>
</div>



  <!-- Button trigger modal -->
<button type="button" class="btn btn-success text-right font-weight-light" data-toggle="modal" data-target="#staticBackdrop">
  Add Teachers
</button> <hr>


{{--  for table --}}

    <div class="row">
        <div class="col-md-8 mx-auto d-block">
                <table class="table table-bordered">
                    <thead class=" bg-info">
                            <tr>
                                <th>No</th>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Subject</th>
                            </tr>
                    </thead>
                    <tbody>

                        @foreach ($teachers as $teacher)
                            <tr>
                            <td>{{ $teacher -> id }}</td>
                            <td> <img class="img-thumbnail small_img" src="{{ asset('/profile/teachers/'.$teacher->profile) }}" alt=""></td>
                            <td>{{ $teacher -> name }}</td>
                            <td>{{ $teacher -> position }}</td>
                            <th> {{ $teacher->subjects->subject }}</th>
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
                        <input id="my-input" class="form-control-file" type="file" name="profile">
                    </div>

                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Input Name" class=" form-control" value="{{ old('name') }}">

                        @error('name')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="position" id="position" placeholder="Input Position" class=" form-control" value="{{ old('position') }}">

                        @error('position')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                               
                                <select class="custom-select" name="subject_id">

                                        <option selected>Choose Subject</option>
                                        @foreach ($subjects as $subject )
                                            <option value="{{ $subject -> id }}">{{ $subject -> subject }}</option>
                                     
                                        @endforeach
                                        
                                      
                                    </select>
                           </div>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary  mt-3">Add Teacher</button>

            </form>
      </div>
      
    </div>
  </div>
</div>


@endsection