@extends('dashboard.layouts.master')
@section('title','ویرایش مقدار برای ویژگی')
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h4 class="card-title">ویرایش مقدار برای ویژگی </h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('attributes.update.values',['attributeValue'=>$attributeValue->id]) }}" method="POST">
                                    @CSRF
                                    @method('PATCH')
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
                                        <label for="exampleInputEmail111">نام مقدار:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old(' value',$attributeValue->value) }}" name="value">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">ویرایش مقدار</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
@endsection
