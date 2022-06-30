@extends('dashboard.layouts.master')
@section('title','افزودن مقدار برای ویژگی')
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h4 class="card-title">افزودن مقدار برای ویژگی {{ $attribute->name }}</h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('attributes.post.values') }}" method="POST">
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
                                        <label for="exampleInputEmail111">نام مقدار:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old(' value') }}" name=" value">
                                    </div>
                                    <input type="hidden" value="{{ $attribute->id }}" name="attribute_id">
                                    <button type="submit" class="btn btn-primary mr-2">ثبت مقدار جدید</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h4 class="card-title">لیست مقدار برای ویژگی {{ $attribute->name }}</h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>آیدی مقدار</th>
                                        <th>نام مقدار</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($values as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->value }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('attributes.delete.values',['attributeValue'=>$value->id]) }}" method="POST">
                                                    @CSRF
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('آیا از حذف محصول مورد نظر مطمیئن هستید؟')" class="btn btn-danger btn-sm">حذف</button>
                                                </form>
                                                <a href="{{ route('attributes.edit.values',['attributeValue'=>$value->id]) }}" class="btn btn-primary btn-sm">ویرایش</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
@endsection
