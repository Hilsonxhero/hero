<div class="sidebar__nav">
    <span class="bars d-none px-4"></span>
    <div class="navbar-brand d-flex justify-content-center">
        <a class=" d-inline-block my-2" href="<?php echo e(route('dashboard.index')); ?>">
            <img class="img-fluid" src="<?php echo e(asset('panel/assets/images/logo.png')); ?>" alt="">
        </a>
    </div>
    <ul>
        <li class="item-li i-dashboard <?php if(sidebarActive(route('dashboard.index'),false)): ?> is_active <?php endif; ?>"><a href="<?php echo e(route('dashboard.index')); ?>">پیشخوان</a></li>

        <li class="item-li i-categories <?php if(sidebarActive(route('dashboard.category.index'))): ?> is_active <?php endif; ?>"><a href="<?php echo e(route('dashboard.category.index')); ?>">دسته بندی ها</a></li>

        <li class="item-li i-courses has-sub-ui <?php if(sidebarActive(route('dashboard.ads.index'))): ?> is_active <?php endif; ?>"><a class="has-arrow-ui" href="#">اگهی ها</a>
            <ul class="collapse show">
                <li><a href="<?php echo e(route('dashboard.ads.create')); ?>">ایجاد اگهی</a></li>
                <li><a href="<?php echo e(route('dashboard.ads.index')); ?>">لیست اگهی ها</a></li>
            </ul>
        </li>

        <li class="item-li i-courses has-sub-ui <?php if(sidebarActive(route('dashboard.post.index'))): ?> is_active <?php endif; ?>"><a class="has-arrow-ui" href="#">مقاله ها</a>
            <ul class="collapse show">
                <li><a href="<?php echo e(route('dashboard.post.create')); ?>">ایجاد مقاله</a></li>
                <li><a href="<?php echo e(route('dashboard.post.index')); ?>">لیست مقالات</a></li>
            </ul>
        </li>

        <li class="item-li i-slideshow <?php if(sidebarActive(route('dashboard.slide.index'))): ?> is_active <?php endif; ?>"><a href="<?php echo e(route('dashboard.slide.index')); ?>">اسلایدشو</a></li>


        <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#"> کاربران</a>
            <ul class="collapse show">
                <li><a href="users.html">لیست کاربران</a></li>
            </ul>
        </li>
        <li class="item-li i-user-permissions has-sub-ui"><a class="has-arrow-ui" href="#"> مدیریت کاربران</a>
            <ul class="collapse show">
                <li class="i-roles"><a href="">نقش های کاربری</a></li>
                <li class="i-permissions"><a href="">مجوز ها</a></li>
            </ul>
        </li>
        <li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>
        <li class="item-li i-articles"><a href="articles.html">مقالات</a></li>
        <li class="item-li i-ads"><a href="ads.html">تبلیغات</a></li>
        <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
        <li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>
        <li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>
        <li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>
        <li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>
        <li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>
        </li>

        <li class="item-li i-web-apps has-sub-ui"><a class="has-arrow-ui" href="#"> وب اپلیکشن ها</a>
            <ul class="collapse show">
                <li class="i-email"><a href="email-box.html"> ایمیل</a></li>
                <li class="i-messenger"><a href="">پیامرسان</a></li>
            </ul>
        </li>


        <li class="item-li i-setting"><a href="notification-management.html">تنظیمات</a>
        </li>
        <li class="item-li i-user__inforamtion"><a href="profile.html">اطلاعات کاربری</a></li>

    </ul>
</div><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/layouts/sidebar.blade.php ENDPATH**/ ?>