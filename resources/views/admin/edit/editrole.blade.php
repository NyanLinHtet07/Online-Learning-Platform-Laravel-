@extends('layouts.admin')

@section('content')
     <div class="container">
            <h4> Edit User Role</h4>
        <div class="row">
            <div class="col-md-6 mx-auto d-block mt-4">
            <form action="{{ url('admin/users/'.$user -> id.'/update') }}" method="post">
                        @csrf
                        <div class="form-group">
                                <input type="text" class="form-control" value="{{ $user -> firstname}} {{ $user -> lastname }}" readonly>
                        </div>
                        <h3>Roles</h3>
                      
                        @foreach ($roles as $role)
                            <div>
                                  <input type="checkbox" name="role_ids[]" value="{{ $role -> id }}" id="label {{ $role -> id }}"
                                    @foreach ($user->roles as $userRole)
                                           @if ($userRole -> name == $role->name)
                                               checked
                                           @endif
                                    @endforeach
                                  >
                                   <label for="label {{ $role -> id }}">{{ $role -> name }}</label>
                            </div>
                        @endforeach
                       
                        <br> 
                        <button class="btn btn-primary" type="submit">Add Role</button>
            </form>
        </div>
        </div>
     </div>
@endsection