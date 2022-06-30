@extends('layouts.master')
@section('title','احراز هویت دو مرحله ای')
@section('content')
    <main class="profile-user-page default">
    <div class="container">
        <div class="row">
            <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                            <h1 class="title-tab-content">کد فعالسازی</h1>
                        </div>
                        <div class="content-section default">
                            <form class="form-account" method="post" action="{{ route('auth.token') }}">
                                @CSRF
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-account-title">کد تاییدیه:</div>
                                        <div class="form-account-row">
                                            <input class="input-field @error('token') is-invalid @enderror" name="token" type="text">
                                            @error('token')
                                                <span class="invalid-feedback"></span>
                                                <strong style="color: red">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary btn-lg">ثبت اطلاعات</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
