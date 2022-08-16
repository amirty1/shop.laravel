<!-- header -->
<header class="main-header default">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                <div class="logo-area default">
                    <a href="#">
                        <img src="#" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                <div class="search-area default">
                    <form action="" class="search">
                        <input type="text" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                        <button type="submit"><img src="front/assets/img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                @auth
                    <div class="dropdown">
                        <form action="{{ route('logout') }}" method="POST">
                            @CSRF
                            <button type="submit" style="width: 60%" class="btn btn-danger dropdown-item">خروج از سایت</button>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-info dropdown-item" style="width: 47%" href="{{ route('profile') }}">پروفایل کاربری</a>
                    </div>

                    <div class="dropdown">
                        <a class="btn btn-info dropdown-item" style="width: 47%" href="{{ route('dashboard') }}"> پنل مدیریت</a>
                    </div>

                @else
                    <div class="dropdown">
                        <a class="btn btn-info dropdown-item" style="width: 47%" href="{{ route('login') }}">ورود به سایت</a>
                    </div>
                    <div class="dropdown">
                        <a class="btn dropdown-item" style="background-color:rgb(11, 154, 215);" href="{{ route('saleman') }}">فروشنده می شوم</a>
                    </div>
                @endif


                    <div class="dropdown">
                        <a class="btn btn-success dropdown-item" style="width: 47%" href="{{ route('cart.index') }}">سبد خرید</a>
                    </div>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="container">
            <ul class="list float-right">
                <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                    <a class="nav-link" href="{{ route('home') }}">خانه</a>
                </li>

                <li class="list-item list-item-has-children mega-menu mega-menu-col-5">

                    <a class="nav-link" href="#">کالای دیجیتال</a>
                    <ul class="sub-menu nav">
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                 href="#">لوازم
                                جانبی گوشی</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">کیف و کاور گوشی</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پاور بانک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">هندزفری،هدفون</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
                                </li>
                                <li class="list-item list-item-has-children">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">گوشی موبایل</a>
                                    <ul class="sub-menu nav">
                                        <li class="list-item">
                                            <a class="nav-link" href="#">آیفون اپل</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="nav-link" href="#">هوآوی</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">ساعت هوشمند</a>
                                </li>
                                <li class="list-item">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">اسپیکر بلوتوث و با سیم</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                 href="#">موبایل</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Apple</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">ASUS</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">HTC</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">LG</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Nokia</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Samsung</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Sony</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت
                                و کتابخوان</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Acer</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Amazon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Apple</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">ASUS</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">HTC</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Samsung</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                 href="#">دوربین</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Canon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Casio</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Nikon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Sony</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                 href="#">کامپیوتر و تجهیزات
                                جانبی</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">هارد دیسک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">نمایشگر</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">مادر بورد</a></li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پردازنده</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">کارت گرافیک</a>
                                </li>
                            </ul>
                        </li>
                        <img src="front/assets/img/1636.png" alt="">
                    </ul>
                </li>
                <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                    <a class="nav-link" href="#">آرایشی،بهداشت و سلامت</a>
                    <ul class="sub-menu nav">
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                 href="#">لوازم
                                جانبی گوشی</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">کیف و کاور گوشی</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پاور بانک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">هندزفری،هدفون</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
                                </li>
                                <li class="list-item list-item-has-children">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">گوشی
                                        موبایل</a>
                                    <ul class="sub-menu nav">
                                        <li class="list-item">
                                            <a class="nav-link" href="#">آیفون اپل</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="nav-link" href="#">هوآوی</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">ساعت
                                        هوشمند</a>
                                </li>
                                <li class="list-item">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">اسپیکر
                                        بلوتوث و با سیم</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                 href="#">موبایل</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Apple</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">ASUS</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">HTC</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">LG</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Nokia</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Samsung</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Sony</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت
                                و کتابخوان</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Acer</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Amazon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Apple</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">ASUS</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">HTC</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Samsung</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                 href="#">دوربین</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Canon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Casio</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Nikon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Sony</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                 href="#">کامپیوتر و تجهیزات
                                جانبی</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">هارد دیسک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">نمایشگر</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">مادر بورد</a></li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پردازنده</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">کارت گرافیک</a>
                                </li>
                            </ul>
                        </li>
                        <img src="front/assets/img/1636.png" alt="">
                    </ul>
                </li>
                <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                    <a class="nav-link" href="">خودرو،ابزار و اداری</a>
                    <ul class="sub-menu nav">
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                 href="#">لوازم
                                جانبی گوشی</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">کیف و کاور گوشی</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پاور بانک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">هندزفری،هدفون</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
                                </li>
                                <li class="list-item list-item-has-children">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">گوشی
                                        موبایل</a>
                                    <ul class="sub-menu nav">
                                        <li class="list-item">
                                            <a class="nav-link" href="#">آیفون اپل</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="nav-link" href="#">هوآوی</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">ساعت
                                        هوشمند</a>
                                </li>
                                <li class="list-item">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                        class="main-list-item nav-link" href="#">اسپیکر
                                        بلوتوث و با سیم</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                 href="#">موبایل</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Apple</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">ASUS</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">HTC</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">LG</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Nokia</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Samsung</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Sony</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت
                                و کتابخوان</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Acer</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Amazon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Apple</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">ASUS</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">HTC</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Samsung</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                 href="#">دوربین</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">Canon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Casio</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Nikon</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">Sony</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                 href="#">کامپیوتر و تجهیزات
                                جانبی</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">هارد دیسک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">نمایشگر</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">مادر بورد</a></li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">پردازنده</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">کارت گرافیک</a>
                                </li>
                            </ul>
                        </li>
                        <img src="front/assets/img/1636.png" alt="">
                    </ul>
                </li>
                <li class="list-item">
                    <a class="nav-link" href="#">مد و پوشاک</a>
                </li>
                <li class="list-item">
                    <a class="nav-link" href="#">خانه و آشپزخانه</a>
                </li>
                <li class="list-item">
                    <a class="nav-link" href="#">کتاب،لوازم تحریر</a>
                </li>
                <li class="list-item">
                    <a class="nav-link" href="#">ورزش و سفر</a>
                </li>
                <li class="list-item">
                    <a class="nav-link" href="#">وسایل نقلیه و صنعتی</a>
                </li>
                <li class="list-item amazing-item">
                    <a class="nav-link" href="#" target="_blank">شگفت‌انگیزها</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- header -->
