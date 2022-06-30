@extends('dashboard.layouts.master')
@section('title','مدیریت کاربران')
@section('style')
    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="/admin/css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="/admin/css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="/admin/css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="/admin/css/default-assets/select.bootstrap4.css">
    <link rel="stylesheet" href="/admin/css/default-assets/notification.css">
@endsection
@section('content')
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست کاربران</h4>
                                <a href="{{ route('users.create') }}" class="btn btn-success">افزودن کاربر</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>ایمیل</th>
                                        <th>وضعیت ایمیل</th>
                                        <th>نقش کاربری</th>
                                        <th>شماره تماس</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if($user->email_verified_at)
                                                    <span class="badge badge-success">فعال</span>
                                                @else
                                                    <span class="badge badge-danger">غیرفعال</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->is_admin)
                                                    <span>مدیر</span>
                                                @else
                                                    <span>کاربر عادی</span>
                                                @endif
                                            </td>
                                            <td>{{ $user->phone_number }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('users.destroy',['user'=>$user->id]) }}" method="POST">
                                                    @CSRF
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('آیا از حذف کاربر مورد نظر مطمیئن هستید؟')" class="btn btn-danger btn-sm">حذف</button>
                                                </form>
                                                <a href="{{ route('users.edit',['user'=>$user->id]) }}" class="btn btn-primary btn-sm">ویرایش</a>
{{--                                                <a href="{{ route('users.role',['user'=>$user->id]) }}" class="btn btn-success">دسترسی</a>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- These plugins only need for the run this page -->
    <script src="/admin/js/default-assets/jquery.datatables.min.js"></script>
    <script src="/admin/js/default-assets/datatables.bootstrap4.js"></script>
    <script src="/admin/js/default-assets/datatable-responsive.min.js"></script>
    <script src="/admin/js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="/admin/js/default-assets/datatable-button.min.js"></script>
    <script src="/admin/js/default-assets/button.bootstrap4.min.js"></script>
    <script src="/admin/js/default-assets/button.html5.min.js"></script>
    <script src="/admin/js/default-assets/button.flash.min.js"></script>
    <script src="/admin/js/default-assets/button.print.min.js"></script>
    <script src="/admin/js/default-assets/datatables.keytable.min.js"></script>
    <script src="/admin/js/default-assets/datatables.select.min.js"></script>
    <script src="/admin/js/default-assets/demo.datatable-init.js"></script>
    <script src="/admin/js/default-assets/bootstrap-growl.js"></script>
    <script src="/admin/js/default-assets/notification-active.js"></script>
@endsection
