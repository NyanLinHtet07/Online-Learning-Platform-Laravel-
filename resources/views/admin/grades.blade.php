@extends('layouts.admin')
@section('content')

<section class="container bg-white p-5">
<div class="row ">
    <div class="col-md-8 mx-auto d-block ">
            <form method="post" action="">
                    @csrf
                    
                    @if (session('status'))
                        <p class="alert alert-success"> {{ session('status') }}</p>
                    @endif

                    <div class="form-group  m-3">
                        <input type="text" name="grade" id="grade" placeholder="Input Grade" class=" form-control " value="{{ old('grade') }}">

                        @error('grade')
                            <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <button class="btn btn-primary  mt-3">Add Grade</button>
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
                                <th>Grade</th>
                                    
                            </tr>
                    </thead>
                    <tbody>

                        @foreach ($grades as $grade)
                            <tr>
                            <td>{{ $grade -> id }}</td>
                            <td>{{ $grade -> grade }}</td>
                           
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
        </div>

    </div>

</section>

@endsection