@extends('layouts.admin')

@section('content')
    
        <table class="table  table-bordered">
            <thead class="">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    
                    <th scope="col">Role</th>
                     <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               
                    @foreach ($users as $user)
                    <tr>
                        <td scope="role">{{ $user -> id }}</td>
                         <td>{{ $user -> firstname }}</td>
                         <td>{{ $user -> lastname }}</td>
                           <td>{{ $user -> phone }}</td>
                         <td>{{ $user -> email }}</td>
                         <td>{{ $user -> address }} || {{ $user -> city }} || {{ $user -> state }}</td>
                      
                         <td>
                            @foreach ($user->roles as $role)
                                <span class=" badge badge-success">  {{ $role -> name }} </span>
                            @endforeach
                         </td>
                         <td> 
                            <a href="{{ url('admin/users/'.$user -> id.'/edit') }}" class="btn btn-sm btn-success"> Manage Role</a>
                         </td>
                      </tr>
                    @endforeach
                   
              
            
        </table>
@endsection