<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://www.rtl-theme.com/vuexy-admin-html-template/
Renew Support: https://www.rtl-theme.com/vuexy-admin-html-template/
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<!-- Mirrored from demo.nparoco.com/Vuexy/html/rtl/vertical-menu-template-semi-dark/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 09:50:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>صفحه ورود - Vuexy - قالب مدیریتی نوین پردازش آروکو</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets')}}/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://demo.nparoco.com/Vuexy/app-assets/images/ico/favicon.ico">
    <link href="{{asset('app-assets')}}/images/fonts.googleapis.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/custom-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-rtl.html">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
                <div class="col-xl-8 col-11 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                <img src="{{asset('app-assets')}}/images/pages/login.png" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">ورود</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">خوش آمدید ، لطفا به حساب کاربری خود وارد شوید</p>
                                    <div class="card-content">
                                        <div class="card-body pt-1">




                                            <form action="login" method="POST">
                                                @csrf

                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input name="email" type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="user-name" placeholder="ایمیل" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                    <label for="user-name">ایمیل</label>
                                                    @error('email')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </fieldset>


                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input name="password" type="password"  class="form-control @error('password') is-invalid @enderror" id="user-password" placeholder="کلمه عبور" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    <label for="user-password">کلمه عبور</label>
                                                    @error('password')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </fieldset>

                                                <div class="form-group d-flex justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" name="remember">
                                                                <span class="vs-checkbox">
                                                  <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                  </span>
                                                </span>
                                                                <span class="">مرا به خاطر بسپار</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="text-right"><a href="auth-forgot-password.html" class="card-link">رمز ورود را فراموش کرده اید؟</a></div>
                                                </div>

                                                <a href="{{route('register')}}" class="btn btn-outline-primary float-left btn-inline">ثبت نام</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline">ورود</button>
                                            </form>




                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        <div class="divider">
                                            <div class="divider-text">یا</div>
                                        </div>
                                        <div class="footer-btn d-inline">
                                            <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                            <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets')}}/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets')}}/js/core/app-menu.min.js"></script>
<script src="{{asset('app-assets')}}/js/core/app.min.js"></script>
<script src="{{asset('app-assets')}}/js/scripts/components.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>