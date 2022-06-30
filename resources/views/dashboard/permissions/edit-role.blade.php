@extends('dashboard.layouts.master')
@section('title','ویرایش نقش')
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-4 col-12 box-margin height-card">
                    <div class="card card-body">
                        <h4 class="card-title">ویرایش نقش</h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('roles.update',$role->id) }}" method="POST">
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
                                        <label for="exampleInputEmail111">نام نقش:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail111" value="{{ $role->name }}" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">توضیح نقش:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail111" value="{{ $role->description }}" name="description">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">انتخاب مجوز:</label>
                                        <select name="permissions[]" multiple="multiple" class="js-example-basic-multiple" id="">
                                            @foreach($permissions as $permission)
                                                <option value="{{ $permission->id }}" {{ in_array($permission->id,$role->permissions()->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
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
