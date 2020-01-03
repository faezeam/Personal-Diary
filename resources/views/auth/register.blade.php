@extends('layouts.app')

@section('content')

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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                        <div class="col-3"></div>
                            <div class="col-md-6">
                                <input id="name"style="font-family: BYekan;text-align:right;" type="text"placeholder="نام " class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-3"></div>
                            <div class="col-md-6">
                                <input id="email"style="font-family: BYekan;text-align:right;" type="email" placeholder="ایمیل"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-3"></div>
                            <div class="col-md-6">
                            <input id="username"style="font-family: BYekan;text-align:right;" type="username"placeholder="نام کاربری" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-3"></div>
                            <div class="col-md-6">
                                <input id="password"style="font-family: BYekan;text-align:right;" type="password" placeholder="کلمه عبور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-3"></div>
                            <div class="col-md-6">
                                <input id="password-confirm"style="font-family: BYekan;text-align:right;" type="password" placeholder="تکرار کلمه عبور" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-1"></div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  style="background-color:#159B9F; font-family: BYekan;"class="btn btn-primary">
                                    {{ __('ثبت نام') }}
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
