@extends('layouts.admin')

@section('content')

<section class="container">

        
    <h3 class="font-weight-light text-center"><span class="text-dark">Subject </span> - {{ $chapter->subjects->subject }}</h3>
    
        <div class="row">
            <div class="col">
                    
                    <h4 class=" text-right badge badge-success">{{ $chapter -> grades -> grade }}</h4>
                    <div class=" font-weight-bold "> {{ $chapter -> chapter }} || {{ $chapter -> name }}</div>
                     <div class="badge badge-success shadow-none p-1 m-1 rounded">
                            <img src="{{ asset('profile/teachers/'.$chapter->teachers -> profile) }}" alt=""  class=" rounded-circle" width="40">
                             <small class=" font-weight-bold">    {{ $chapter->teachers -> name }} </small>
                        </div>

            </div>
            <div class="col">
                    <button type="button" class="btn btn-success text-right font-weight-light float-right" data-toggle="modal" data-target="#staticBackdrop">
                        Add New Lession
                        </button> 
            </div>
         @if (session('status'))
                        <p class="alert alert-success"> {{ session('status') }}</p>
                    @endif
        </div>

        <hr>

        <section>

                @foreach ($lectures as $lecture)
                    
            
                    <div class="card">
                      <div class="card-body">

                        <h5 class="card-title">{{ $lecture -> lession }} {{ $lecture -> name }}</h5>
                        <p class="card-text">{{  $lecture -> Descriprion }}</p>
                        <p class="badge badge-light"> {{ $lecture ->chapters ->chapter }} || {{ $lecture->chapters->name }}</p>
                        <span class=" float-right">
                  <a href= "{{  url('admin/lecture/'. $lecture -> id .'/edit') }}" >  <button class="btn btn-primary" >Edit</button> </a>
                      <button class="btn btn-danger">Delete</button>
                      </span>
                      </div>
                      
                    </div>
                    <br>
                        @endforeach
        </section>
</section>





<!---------------------------------------------------------------- forUploadModal ------------------------------------------------------------------>
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
                        <input id="my-input" class="form-control-file" type="file" name="video">
                    </div>

                      <div class="form-group">
                        <input type="text" name="lession" id="name" placeholder="Input Lession" class=" form-control" value="{{ old('lession') }}">

                        @error('lession')
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
                        <input type="hidden" name="chapter_id" value="{{ $chapter->id }}">
                    </div>
                      <div class="form-group">
                        <input type="hidden" name="grade_id" value="{{ $chapter->grade_id }}">
                    </div>
                    <div class="form-group">
                       
                            <textarea id="my-textarea" class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                     
                        

                        @error('description')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                  
                   
                            
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary  mt-3">Add New Lession</button>

            </form>
      </div>
      
    </div>
  </div>
</div>

{{-- --------------------------------------------------------------- end ------------------------------------------------------------ --}}

{{-- ------------------------------------------------------------- for edit-------------------------------------------------------------------- --}}

@endsection




