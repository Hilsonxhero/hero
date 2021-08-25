
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <i class="mobile-nav-toggle"></i>
        <div class="menu-parent"></div>
        <a href="index.html" class="logo d-none d-lg-block"><img src="<?php echo e(asset('app/assets/img/ss.png')); ?>" alt=""
                                                                 class="logo"></a>
        <nav id="navbar" class="navbar">
            <div class="nav-header d-flex justify-content-center d-block d-lg-none">
                <a href="index.html" class="logo"><img src="<?php echo e(asset('app/assets/img/ss.png')); ?>" alt="" class="logo"></a>
            </div>
            <ul>

                <li class=""><a class="" href="index.html">صفحه اصلی</a></li>
                <li class="dropdown"><a href="#"><span>پروژه ها</span></a>
                    <ul>
                        <li><a href="#">پروژه های اداری</a></li>
                        <li><a href="#">پروژه های مسکونی</a></li>
                        <li class="dropdown"><a href="#"><span>پروژه های تجاری</span></a>
                            <ul>
                                <li><a href="#">پروژه های تجاری خاتمه یافته</a></li>
                                <li><a href="#">پروژه های تجاری در حال ساخت</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="">ارتباط با ما</a></li>
                <li><a class="nav-link scrollto" href="">اخبار و مقالات</a></li>

            </ul>

        </nav><!-- .navbar -->

        <a href="" class="sign-in-account__btn d-none d-lg-flex">ورود به حساب</a>
        <a class="d-block d-lg-none user-profile__btn" href=""></a>


    </div>
</header><?php /**PATH C:\wamp64\www\mvc_router\resources\views/app/layouts/header.blade.php ENDPATH**/ ?>