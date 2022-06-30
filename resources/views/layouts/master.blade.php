<!DOCTYPE html>
<html lang="fa">

@include('layouts.header')

<body class="index-page sidebar-collapse">

 @include('layouts.navbar')

    <div class="wrapper default">

        @include('layouts.main-header')



          @yield('content')



       @include('layouts.footer')
    </div>
</body>

</html>
