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

<!-- Mirrored from demo.nparoco.com/Vuexy/html/rtl/vertical-menu-template-semi-dark/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 09:50:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ثبت نام صفحه - Vuexy - قالب مدیریتی نوین پردازش آروکو</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets')}}/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://demo.nparoco.com/Vuexy/app-assets/images/ico/favicon.ico">
    <link href="{{asset('app-assets')}}/images/fonts.googleapis.css" rel="stylesheet">
{{--{!! htmlScriptTagJsApi(['lang'=>'fa']) !!}--}}

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
                <div class="col-xl-8 col-10 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                <img src="{{asset('app-assets')}}/images/pages/register.jpg" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 p-2">
                                    <div class="card-header pt-50 pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">ایجاد حساب کاربری</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">برای ایجاد یک حساب کاربری فرم زیر را پر کنید.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">



                                            <form action="register" method="POST">

                                                @csrf

                                                <div class="form-label-group">
                                                    <input name="name" type="text" value="{{old('name')}}" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="نام" required>
                                                    <label for="inputName">نام</label>
                                                    @error('name')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </div>


                                                <div class="form-label-group">
                                                    <input name="phone" type="text" value="{{old('phone')}}" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="09xxxxxxxxx" required>
                                                    <label for="phone">تلفن</label>
                                                    @error('phone')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </div>


                                                <div class="form-label-group">
                                                    <input name="email" type="email" value="{{old('email')}}" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" required>
                                                    <label for="inputEmail">ایمیل</label>
                                                    @error('email')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-label-group">
                                                    <input name="password" type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="کلمه عبور" required>
                                                    <label for="inputPassword">کلمه عبور</label>
                                                    @error('password')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-label-group">
                                                    <input name="password_confirmation" type="password" id="inputConfPassword" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="رمز عبور را تأیید کنید" required>
                                                    <label for="inputConfPassword">رمز عبور را تأیید کنید</label>
                                                    @error('password_confirmation')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col-12">--}}
{{--                                                        <fieldset class="checkbox">--}}
{{--                                                            <div class="vs-checkbox-con vs-checkbox-primary">--}}
{{--                                                                <input type="checkbox" checked>--}}
{{--                                                                <span class="vs-checkbox">--}}
{{--                                                  <span class="vs-checkbox--check">--}}
{{--                                                    <i class="vs-icon feather icon-check"></i>--}}
{{--                                                  </span>--}}
{{--                                                </span>--}}
{{--                                                                <span class="">  شرایط و ضوابط را می پذیرم.</span>--}}
{{--                                                            </div>--}}
{{--                                                        </fieldset>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-body">--}}
{{--                                                    <label>picture:</label>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <input name="photo" type="file"  class="form-control">--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}

{{--                                                {!! htmlFormSnippet() !!}--}}


                                                <a href="{{route('login')}}" class="btn btn-outline-primary float-left btn-inline mb-50">ورود</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline mb-50">ثبت نام</button>
                                            </form>




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

<!-- Mirrored from demo.nparoco.com/Vuexy/html/rtl/vertical-menu-template-semi-dark/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 09:50:23 GMT -->
</html>