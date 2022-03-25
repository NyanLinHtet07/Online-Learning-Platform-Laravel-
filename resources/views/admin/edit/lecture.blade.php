@extends('layouts.admin')
@section('content')



<div class="row">

      <div class="card col-md-8 mx-auto d-block p-3">
          <h3 class="text-center font-weight-light p-3"> Edit Data</h3>
                    <form method="post" action="{{  url('admin/lecture/'. $lession -> id .'/update') }}" enctype="multipart/form-data">
                    @csrf
                    
                   

                   
                      <div class="form-group">
                        <input type="text" name="lession" id="lession" class=" form-control" value="{{ $lession-> lession ??old('lession') }}">

                        @error('lession')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="name" id="name"  class=" form-control" value="{{ $lession -> name?? old('name') }}">

                        @error('name')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                       
                            <textarea id="my-textarea" class="form-control" name="description" rows="3">{{ $lession -> description ?? old('description') }}</textarea>
                     
                        

                        @error('description')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror
                    </div>

                  
                   
                            
                    
                 
                    <button class="btn btn-primary  mt-3">Edit Lession</button>

            </form>
      </div>
     
  
@endsection