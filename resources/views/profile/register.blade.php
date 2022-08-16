@extends('layouts.app')
@section('title','ثبت نام')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="xs-d-none mb-50-xs break-320-576-none">
                        <img src="/admin/img/60.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="font-18 mb-30">ثبت نام</h4>

                    <form action="{{ url('saleman') }}" method="POST">
                        @CSRF
                        @if($errors->any())
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name">نام و نام خانوادگی</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">پست الکترونیکی</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="password">رمز عبور</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">تکرار رمز عبور</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>



                        <div class="form-group">
                            <label for="code">کدملی</label>
                            <input id="code" type="tel" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="code">

                            @error('code')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="birthcode">شماره شناسنامه</label>
                            <input id="birthcode" type="tel" class="form-control @error('birthcode') is-invalid @enderror" name="birthcode" required autocomplete="birthcode">

                            @error('birthcode')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="phone_number">شماره همراه</label>
                            <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" required autocomplete="phone_number">

                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="market_name">نام فروشگاه</label>
                            <input id="market_name" type="market_name" class="form-control @error('market_name') is-invalid @enderror" name="market_name" required autocomplete="market_name">

                            @error('market_name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>



                        <div class="form-group mb-0 mt-15">
                            <button class="btn btn-primary btn-block" type="submit">ثبت نام</button>
                        </div>


                    </form>
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
