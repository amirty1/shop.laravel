@extends('dashboard.layouts.master')
@section('title','مدیریت محصولات')
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
                                <h4 class="card-title mb-2">لیست محصولات</h4>
                                <a href="{{ route('products.create') }}" class="btn btn-success">افزودن محصول</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>آیدی محصول</th>
                                        <th>نام محصول</th>
                                        <th>قیمت محصول</th>
                                        <th>موجودی</th>
                                        <th>تعداد بازدید</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->amount }}</td>
                                            <td>{{ $product->view }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('products.destroy',['product'=>$product->id]) }}" method="POST">
                                                    @CSRF
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('آیا از حذف محصول مورد نظر مطمیئن هستید؟')" class="btn btn-danger btn-sm">حذف</button>
                                                </form>
                                                <a href="{{ route('products.edit',['product'=>$product->id]) }}" class="btn btn-primary btn-sm">ویرایش</a>
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
