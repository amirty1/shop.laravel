@extends('dashboard.layouts.master')
@section('title','ایجاد محصول جدید')
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">


                <div class="col-12 height-card box-margin">
                    <div class="card">
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">اطلاعات پایه</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">افزودن ویژگی </a>
                                </div>
                            </nav>
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="col-xl-6 box-margin height-card">
                                            <div class="card card-body">
                                                <h4 class="card-title">فرم ایجاد محصول</h4>

                                                <div class="row">
                                                    <div class="col-sm-12 col-xs-12">

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">نام محصول:</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old('title') }}" name="title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">متن محصول:</label>
                                                            <textarea type="text" class="form-control" id="exampleInputEmail111"  name="text"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">دسته بندی محصول:</label>
                                                            <select class="form-control" name="categories[]"  id="categories" multiple>
{{--                                                                @foreach($categories as $category)--}}
{{--                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                                                                @endforeach--}}
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">قیمت محصول:</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old('price') }}" name="price">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">موجودی:</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old('amount') }}" name="amount">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">متا تایتل:</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old('metaTitle') }}" name="metaTitle">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">متا دسکریپشن:</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old('metaDescription') }}" name="metaDescription">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail111">تصویر محصول:</label>
                                                            <input type="file" class="form-control" id="exampleInputEmail111" name="image">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mr-2">ثبت محصول جدید</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
{{--                                        @foreach($attributes as $attributes)--}}
{{--                                            <label for="{{ $attributes->id }}">{{ $attributes->name }}: </label>--}}
{{--                                            <select class="form-control" name="attributeValues[]" id="{{ $attributes->id }}">--}}
{{--                                                @foreach($attributeValues as $attributeValue)--}}
{{--                                                    @if($attributes->id == $attributeValue->attribute_id)--}}
{{--                                                        <option value="{{ $attributes->id }}-{{ $attributeValue->id }}">{{ $attributeValue->value }}</option>--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                            <br/>--}}
{{--                                        @endforeach--}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- end row -->
            </div>
        </div>
@endsection
