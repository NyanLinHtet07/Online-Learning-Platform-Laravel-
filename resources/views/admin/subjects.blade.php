@extends('layouts.admin')
@section('content')

<section class="container bg-white p-5">
<div class="row">
    <div class="col-md-8 mx-auto d-block">
            <form method="post" action="">
                    @csrf
                    
                    @if (session('status'))
                        <p class="alert alert-success"> {{ session('status') }}</p>
                    @endif

                    <div class="form-group">
                        <input type="text" name="subject" id="subject" placeholder="Input Subject" class=" form-control" value="{{ old('subject') }}">

                        @error('subject')
                            <div class="alert alert-danger"> {{ $message}}</div>
                        @enderror

                        <button class="btn btn-primary  mt-3">Add Subject</button>
                    </div>

            </form>
    </div>
</div>

    <hr>

    <div class="row">
        <div class="col-md-8 mx-auto d-block">
                <table class="table table-bordered">
                    <thead class=" bg-info">
                            <tr>
                                <th>No</th>
                                <th>Subject</th>
                                <th>Teachers</th>
                             
                            </tr>
                    </thead>
                    <tbody>

                        @foreach ($subjects as $subject)
                            <tr>
                            <td>{{ $subject -> id }}</td>
                            <td>{{ $subject -> subject }}</td>
                            <td>
                                @foreach ($subject -> teachers as $teacher)
                                      <span class="badge badge-info p-2">  {{ $teacher -> name }} </span>
                                @endforeach
                            </td>

                            
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
        </div>

    </div>

</section>

@endsection