@extends('layouts.admin')

@section('content')
    
        <table class="table  table-bordered">
            <thead class="thead-success">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Role</th>
                   
                </tr>
            </thead>
            <tbody>
                
                    @foreach ($roles as $role)
                    <tr>
                        <td scope="role">{{ $role -> id }}</td>
                         <td>{{ $role -> name }}</td>
                     </tr>
                    @endforeach
                   
               
            
        </table>
@endsection