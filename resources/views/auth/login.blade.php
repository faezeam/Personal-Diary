@extends('layouts.app')

@section('content')
<style>
label {
  display: inline-block;
  width: 140px;
  text-align: right;
}​
</style>
<div class="container">
<div class="row">
    <div class="col-12 p-5 d-flex justify-content-center  " >
    <img src="/back.jpg" style="width:300px;" >
    </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row ">
                            
                            <div class="col-3"></div>
                            <div class="col-md-4">
                                <input id="username" style="text-align:right; width:300px;" type="text" placeholder="نام کاربری" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                        <div class="col-3"></div>

                            <div class="col-md-4">
                                <input id="password" style="text-align:right; width:300px;" placeholder="کلمه عبور" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class=" offset-md-4 d-flex">
                            <div class="mr-5  "><a class="btn btn-primary " style="background-color:#159B9F; font-family: BYekan;" href="/register">ثبت نام</a> </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="text-align:right;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('من را به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-1"></div>
                            <div class="col-4 offset-md-4 ">
                                <button type="submit" style="background-color:#159B9F; font-family: BYekan;" class="btn btn-primary">
                                    {{ __('ورود') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
