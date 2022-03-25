@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-9">
            <div class="card auth_card shadow-sm p-3 mb-5 bg-white">
                <h1 class="text-center m-2">{{ __ ('Create an Account !') }}</h1>
                
                
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                                <img class="img-fluid" src="{{ asset('images/cover.png') }}" alt="">
                      </div>

                    <div class="col-md-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                       
                        {{-- -------------------------------------------------- for first name -------------------------------------------------- --}}
                        <div class="form-group row">
                            
                           
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="First_Name">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        {{-- ------------------------------------------------------------- End --------------------------------------------------------- --}}

                        {{-- -----------------------------------------------   for last name --------------------------------------------- --}}

                      
                            
                           
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Last_Name">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- ------------------------------------------------- end ------------------------------------------------- --}}


                        {{-- ----------------------------------------------------- phone---------------------------------------------------- --}}
                        <div class="form-group row">
                           

                            <div class="col-md-12">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone Number">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- -------------------------------------------------------end ---------------------------------------------------- --}}

                        {{-- ------------------------------------------------ email ------------------------------------------------------- --}}
                        <div class="form-group row">
                           

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- ------------------------------------------------------- end------------------------------------------------------ --}}

                        {{-- --------------------------------------------------------- password --------------------------------------------------------- --}} 
                        <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       
                          

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmed-Password">
                            </div>
                        </div>

                        {{-- ------------------------------------------------------------end-------------------------------------------------------- --}}
                       
                       {{-- ---------------------------------------------------------------- grade----------------------------------------------------------- --}}
                        <div class="form-group row">
                                <div class="col-md-12">
                                    <select class="custom-select" name="grade_id">
                                        <option selected>Choose Grade</option>
                                        <option value="1">Grade-10</option>
                                        <option value="2">Grade-11</option>
                                      
                                    </select>
                                </div>
                        </div>

                        {{-- -------------------------------------------------------------------------------------------------------------------------- --}}

                        {{-- -----------------------------------------------------address ---------------------------------------------------------- --}}
                        
                        <div class="form-group row">
                           <div class="col-md-12">
                            <textarea id="my-textarea" class="form-control" name="address" rows="2" placeholder="Address"></textarea>
                           </div>
                        </div>
                        
                        <div class="form-group row">
                                <div class=" col-md-6">
                                
                                <input type="text" class="form-control" id="inputCity" name="city" placeholder="city">
                                </div>

                     
                            <div class="col-md-6">
                                    <select class="custom-select" name="state">
                                        <option selected>Choose Region and States</option>
                                        <option value="yangon">Yangon</option>
                                        <option value="mandalay">Mandalay</option>
                                        <option value="sagaing">Sagaing</option>
                                          <option value="bago">Bago</option>
                                        <option value="ayeyarwady">Ayeyarwady</option>
                                        <option value="taninthayi">Taninthayi</option>
                                        <option value="magway">Magway</option>

                                        
                                        <option value="kachin">Kachin</option>
                                        <option value="kayah">Kayah</option>
                                        <option value="kayin">Kayin</option>
                                          <option value="chin">Chin</option>
                                        <option value="mon">Mon</option>
                                        <option value="rakhine">Rakhine</option>
                                        <option value="shan">Shan</option>
                                      
                                    </select>
                                </div>
                        </div>
                        


                        
                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>


                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
