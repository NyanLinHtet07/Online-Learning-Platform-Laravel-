@extends('layouts.learn')

@section('content')

                <section class="container">
                        <h1 class="text-center">
                                    Order Page
                        </h1>

                        <div class="row">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="50%"> Subject</th>
                                            <th width="20%"> Chapter</th>
                                            <th width="20%"> Price</th>
                                            <th width="10"></th>
                                        
                                        </tr>    
                                    </thead>
                                    <tbody>
                                      
                                          
                                         <?php  $total = 0 ?>
                                          
                                          @if (session('cart'))
                                              
                                                        @foreach (session('cart') as $id => $chapter)
                                                         <?php $total += $chapter['price'] ?>
                                                                <tr>
                                                                    <td> {{ $chapter ['subject'] }}</td>
                                                               
                                                                    <td> {{  $chapter['chapter'] }} || {{ $chapter['name'] }}</td>
                                                                
                                                                    <td> {{ $chapter['price'] }}</td>

                                                                    <td> <a href="{{ route('remove' , $id)}}"> <button class="btn btn-danger btn-sm"> Delete</button> </a></td>
                                                                </tr>
                                                        @endforeach
                                          @endif

                                   
                                    </tbody>
                                    <tfoot>
                                            <tr>
                                                <td></td>
                                                <td> Total  = {{ $total }}</td>
                                            </tr>
                                    </tfoot>
                                
                                </table>  
                                
                                <div class="row">
                                        <div class="col-md-6">
                                                back to learning Field
                                        </div>

                                        {{--  
                                                <div class="col-md-6">
                                                    <form action="  {{ url ('learning/order') }} " method="post">
                                                        @csrf 
                                                            @foreach (session('cart') as $id => $chapter)
                                                        <input type="hidden" name="chapter_id" value="{{ $id}}">
                                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id  }}">
                                                        @endforeach
                                                        <button type="submit"> Submit</button> 
                                                    </form>
                                                </div> 
                                          --}}     

                                          <a href="{{ url('/learning/order') }}"> Submit Order</a>
                                </div>

                        </div>
                </section>

           
    @endsection

    

   {{--   @section('script')
    <script type="text/javascript">
     
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('/learning/remove') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection --}}