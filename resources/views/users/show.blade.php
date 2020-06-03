@extends('layouts.home')

@section('title') users edit @endsection

@section('style')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-rtl.html">
    <!-- END: Custom CSS-->


@endsection


@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">طرح فرم</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">خانه</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">فرم ها</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">طرح فرم</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">گفتگو</a><a class="dropdown-item" href="#">ایمیل</a><a class="dropdown-item" href="#">تقویم</a></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-body"><!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">حساب <span style="color: #1F9D57">(درست شده)</span></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img src="{{$user->photo->path}}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tbody><tr>
                                                    <td class="font-weight-bold">نام</td>
                                                    <td>{{$user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">تلفن</td>
                                                    <td>{{$user->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">ایمیل</td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tbody><tr>
                                                    <td class="font-weight-bold">وضعیت</td>
                                                    <td>{{$user->active==1 ? 'فعال' : 'غیر فعال'}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">نقش</td>
                                                    <td>{{$user->role==1 ? 'مدیر' : 'کاربر'}}</td>
                                                </tr>
{{--                                                <tr>--}}
{{--                                                    <td class="font-weight-bold">شرکت</td>--}}
{{--                                                    <td>WinDon Technologies Pvt Ltd</td>--}}
{{--                                                </tr>--}}
                                                </tbody></table>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{route('user.edit' , $user->id)}}" class="btn btn-primary mr-1 waves-effect waves-light"><i class="feather icon-edit-1"></i>&nbsp; ویرایش </a>
                                            <form action="{{route('user.destroy' , $user->id)}}" method="POST" class="btn waves-effect waves-light">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger waves-effect waves-light"><i class="feather icon-trash-2"></i> حذف</button>
                                            </form>
                                            <a href="{{route('user.index')}}" type="reset" class="btn btn-outline-warning waves-effect waves-light">بازگشت</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
                        <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">اطلاعات <span style="color: red">(درست نشده)</span></div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tbody><tr>
                                            <td class="font-weight-bold">تاریخ تولد</td>
                                            <td> 28 فروردین 1398</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">تلفن همراه</td>
                                            <td>+65958951757</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">سایت اینترنتی</td>
                                            <td> https://www.nparoco.com</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">زبان ها</td>
                                            <td> انگلیسی، فارسی</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">جنسیت</td>
                                            <td>زن</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">تماس</td>
                                            <td> ایمیل، پیام، تلفن</td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">پیوندهای اجتماعی <span style="color: red">(درست نشده)</span></div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tbody><tr>
                                            <td class="font-weight-bold">توییتر</td>
                                            <td> https://twitter.com/adoptionism744</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">فیس بوک</td>
                                            <td> https://www.facebook.com/nparoco.co</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">اینستاگرام</td>
                                            <td> https://www.instagram.com/nparoco.co</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">گیت هاب</td>
                                            <td> https://github.com/madop818</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">کدپن</td>
                                            <td> https://codepen.io/adoptism243</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">اسلک</td>
                                            <td>@adoptionism744
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                        <!-- permissions start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom mx-2 px-0">
                                    <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i> اجازه <span style="color: red">(درست نشده)</span></h6>
                                </div>
                                <div class="card-body px-75">
                                    <div class="table-responsive users-view-permission">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th>ماژول</th>
                                                <th>خواندن</th>
                                                <th>نوشتن</th>
                                                <th>ایجاد کردن</th>
                                                <th>حذف</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>کاربران</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox1" class="custom-control-input" disabled="" checked="">
                                                        <label class="custom-control-label" for="users-checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox2" class="custom-control-input" disabled=""><label class="custom-control-label" for="users-checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox3" class="custom-control-input" disabled=""><label class="custom-control-label" for="users-checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox4" class="custom-control-input" disabled="" checked="">
                                                        <label class="custom-control-label" for="users-checkbox4"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>مقالات</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox5" class="custom-control-input" disabled=""><label class="custom-control-label" for="users-checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox6" class="custom-control-input" disabled="" checked="">
                                                        <label class="custom-control-label" for="users-checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox7" class="custom-control-input" disabled=""><label class="custom-control-label" for="users-checkbox7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox8" class="custom-control-input" disabled="" checked="">
                                                        <label class="custom-control-label" for="users-checkbox8"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>پرسنل</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox9" class="custom-control-input" disabled="" checked="">
                                                        <label class="custom-control-label" for="users-checkbox9"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox10" class="custom-control-input" disabled="" checked="">
                                                        <label class="custom-control-label" for="users-checkbox10"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox11" class="custom-control-input" disabled=""><label class="custom-control-label" for="users-checkbox11"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox12" class="custom-control-input" disabled=""><label class="custom-control-label" for="users-checkbox12"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- permissions end -->
                    </div>
                </section>
                <!-- page users view end -->

            </div>



        </div>
    </div>



@endsection

@section('script')
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/components.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/footer.min.js"></script>

@endsection






