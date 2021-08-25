<div class="header-ui d-flex item-center w-100">
    <div class="header__right d-flex flex-grow-1 align-items-center">
        <span class="bars"></span>
    </div>
    <div class="header__left d-flex flex-end align-items-center">

        <!--begin::Setting-->
        <div class="setting-ui position-relative me-3" id="js-setting-ui">
            <a class="setting__icon"></a>
        </div>
        <!--end::Setting-->

        <!--begin::Notification-->
        <div class="notification position-relative me-3">
            <a class="notification__icon dropdown-toggle" data-bs-auto-close="outside"
               id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,15"></a>
            <!--                <span class="notification-dot">3</span>-->
            <ul class="dropdown-menu dropdown-menu-start feeds_widget" aria-labelledby="dropdownMenuOffset">
                <li class="header blue">3 اعلان جدید</li>
                <li>
                    <a href="javascript:void(0);">
                        <div class="feeds-left bg-danger"><i class="ri-check-line"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-danger">کاربر جدید <small class="float-left text-muted">9:10
                                    AM</small></h4>
                            <small>من احساس خوبی دارم !</small>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div class="feeds-left bg-warning"><i class="ri-settings-4-line"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-warning">هشدار سرور <small class="float-left text-muted">9:17
                                    AM</small></h4>
                            <small>ارتباط شما شخصی نمی باشد</small>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div class="feeds-left bg-success"><i class="ri-thumb-up-line"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-success">2 فیدبک جدید <small class="float-left text-muted">9:22
                                    AM</small></h4>
                            <small>ممنون از سایت خوب و باحال شما !</small>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!--end::Notification-->

        <!--begin::Profile-->
        <div class="profile-content-ui position-relative mr-3">
            <div class="profile-content__thumb  dropdown-toggle" data-bs-auto-close="outside"
                 id="profile-content-ui"
                 data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,15">
                <img class="img-fluid" src="<?php echo e(asset('panel/assets/images/150-2.jpg')); ?>" alt="">
            </div>
            <div class="dropdown-menu dropdown-menu-start feeds_widget" aria-labelledby="profile-content-ui">
                <div class="header blue d-flex align-items-center">

                    <div class="symbol symbol-40px mx-2 py-5">
                        <img alt="Logo" src="<?php echo e(asset('panel/assets/images/150-2.jpg')); ?>">
                    </div>

                    <div>
                        <span class="text-white  fs-5">امیر</span>
                        <a href="#" class="link-white fs-6 d-block opacity-75 opacity-100-hover">hilsonxhero@gmail.com</a>
                    </div>

                </div>

                <div class="row row-cols-2 g-0">
                    <!--begin::Col-->
                    <a href=""
                       class="border-bottom border-end text-center py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0">

                        <i class="ri-profile-line ri-2x"></i>

                        <span class="fw-bolder fs-6 d-block pt-3">پروفایل من</span>
                    </a>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <a href=""
                       class="col border-bottom text-center py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0">
                        <!--begin::Svg Icon | path: icons/duotone/Interface/Settings-02.svg-->
                        <i class="ri-settings-4-line ri-2x"></i>
                        <!--end::Svg Icon-->
                        <span class="fw-bolder fs-6 d-block pt-3">تنظیمات</span>
                    </a>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col text-center border-end py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0"
                         data-kt-menu-trigger="hover" data-kt-menu-placement="left-start"
                         data-kt-menu-flip="center, top">
                        <!--begin::Svg Icon-->
                        <i class="ri-apps-2-line ri-2x"></i>
                        <!--end::Svg Icon-->
                        <span class="fw-bolder fs-6 d-block pt-3">دوره ها</span>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <a href=""
                       class="col text-center py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0">

                        <i class="ri-logout-box-r-line ri-2x"></i>

                        <span class="fw-bolder fs-6 d-block pt-3">خروج</span>
                    </a>
                    <!--end::Col-->
                    <!--begin::balance account-->
                    <span class="account-balance me-2 col w-100 d-flex justify-content-center align-items-center">  2,500,000 تومان</span>
                    <!--begin::balance account-->
                </div>
            </div>
        </div>
        <!--end::Profile-->

    </div>
</div><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/layouts/header.blade.php ENDPATH**/ ?>