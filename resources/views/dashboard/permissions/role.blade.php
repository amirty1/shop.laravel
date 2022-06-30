@extends('dashboard.layouts.master')
@section('title','همه نقش ها')
@section('style')
    <link rel="stylesheet" href="{{asset('admin/css/default-assets/select.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/js/select2-4.1.0-rc.0/dist/css/select2.min.css')}}">
    <script src="{{asset('admin/js/select2-4.1.0-rc.0/dist/js/select2.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endsection
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-4 col-12 box-margin height-card">
                    <div class="card card-body">
                        <h4 class="card-title">ایجاد نقش جدید</h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('roles.store') }}" method="POST">
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
                                        <label for="exampleInputEmail111">نام نقش:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old('name') }}" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">توضیح نقش:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail111" value="{{ old('description') }}" name="description">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">انتخاب مجوز:</label>
                                        <select name="permissions[]" multiple="multiple" class="js-example-basic-multiple" id="">
                                            @foreach($permissions as $permission)
                                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">ثبت</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">لیست نقش ها</h4>
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>نام نقش</th>
                                    <th>توضیح</th>
                                    <th>مجوزها</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>
                                            @foreach($role->permissions as $permission)
                                                {{ $permission->description }} -
                                            @endforeach
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-info btn-sm">ویرایش</a>
                                            <form action="{{ route('roles.destroy',['role'=>$role->id]) }}" method="POST">
                                                @CSRF
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('آیا از حذف رکورد مورد نظر مطمیئن هستید؟')" class="btn btn-danger btn-sm">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <!-- end row -->
            </div>
        </div>
@endsection
@section('script')
@endsection
