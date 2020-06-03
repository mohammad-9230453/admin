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
            <div class="content-body">

                <!-- // Basic Floating Label Form section end -->





                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">حساب <span style="color: #1F9D57">(درست شده)</span></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                            <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">اطلاعات <span style="color: red">(درست نشده)</span></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                                            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">اجتماعی <span style="color: red">(درست نشده)</span></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">












                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <a class="mr-2 my-25" href="#">
                                                <img src="{{$user->photo->path}}" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                                            </a>
                                            <div class="media-body mt-50">
                                                <h4 class="media-heading">{{$user->name}}</h4>
{{--                                                <div class="col-12 d-flex mt-1 px-0">--}}
{{--                                                    <a href="#" class="btn btn-primary d-none d-sm-block mr-75 waves-effect waves-light">تغییر دادن</a>--}}
{{--                                                    <a href="#" class="btn btn-primary d-block d-sm-none mr-75 waves-effect waves-light"><i class="feather icon-edit-1"></i></a>--}}
{{--                                                    <a href="#" class="btn btn-outline-danger d-none d-sm-block waves-effect waves-light">پاک کردن</a>--}}
{{--                                                    <a href="#" class="btn btn-outline-danger d-block d-sm-none waves-effect waves-light"><i class="feather icon-trash-2"></i></a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form class="form" method="POST" action="{{route('user.update' , $user->id)}}" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">


                                                <div class="col-12 col-sm-6">

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>نام </label>
                                                            <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="نام " value="adoptionism744" required="" data-validation-required-message="This username field is required">
                                                            @error('name')
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                                <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                            <div class="help-block"></div></div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>تلفن</label>
                                                            <input name="phone" value="{{$user->phone}}" type="text" class="form-control" placeholder="تلفن" value="Angelo Sashington" required="" data-validation-required-message="This name field is required">
                                                            @error('phone')
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                                <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                            <div class="help-block"></div></div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>پست الکترونیک</label>
                                                            <input name="email" value="{{$user->email}}" type="email" class="form-control" placeholder="ایمیل" required="" data-validation-required-message="ایمیل نمیتواند خالی بماند">
                                                            @error('email')
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                                <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                            <div class="help-block"></div></div>
                                                    </div>


                                                </div>

                                                <div class="col-12 col-sm-6">

                                                    <div class="form-group">
                                                        <label>وضعیت</label>
                                                        <select class="form-control" name="active"  >
                                                            <option value="1">فعال</option>
{{--                                                            <option>مسدود</option>--}}
                                                            <option value="0" @if ($user->active == 0) selected @endif>غیرفعال</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>نقش</label>
                                                        <select class="form-control" name="role">
                                                            <option value="1">مدیر</option>
                                                            <option value="0" @if ($user->role == 0) selected @endif>کاربر</option>
{{--                                                            <option>پرسنل</option>--}}
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>تصویر</label>
                                                        <input name="photo" type="file" class="form-control" value="WinDon Technologies Pvt Ltd" placeholder="تصویر ">
                                                    </div>


                                                </div>


{{--                                                <div class="col-12">--}}
{{--                                                    <div class="table-responsive border rounded px-1 ">--}}
{{--                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>اجازه</h6>--}}
{{--                                                        <table class="table table-borderless">--}}
{{--                                                            <thead>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>ماژول</th>--}}
{{--                                                                <th>خواندن</th>--}}
{{--                                                                <th>نوشتن</th>--}}
{{--                                                                <th>ایجاد کردن</th>--}}
{{--                                                                <th>حذف</th>--}}
{{--                                                            </tr>--}}
{{--                                                            </thead>--}}
{{--                                                            <tbody>--}}
{{--                                                            <tr>--}}
{{--                                                                <td>کاربران</td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox1" class="custom-control-input" checked="">--}}
{{--                                                                        <label class="custom-control-label" for="users-checkbox1"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox2" class="custom-control-input"><label class="custom-control-label" for="users-checkbox2"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox3" class="custom-control-input"><label class="custom-control-label" for="users-checkbox3"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox4" class="custom-control-input" checked="">--}}
{{--                                                                        <label class="custom-control-label" for="users-checkbox4"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <td>مقالات</td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox5" class="custom-control-input"><label class="custom-control-label" for="users-checkbox5"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox6" class="custom-control-input" checked="">--}}
{{--                                                                        <label class="custom-control-label" for="users-checkbox6"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox7" class="custom-control-input"><label class="custom-control-label" for="users-checkbox7"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox8" class="custom-control-input" checked="">--}}
{{--                                                                        <label class="custom-control-label" for="users-checkbox8"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <td>پرسنل</td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9" class="custom-control-input" checked="">--}}
{{--                                                                        <label class="custom-control-label" for="users-checkbox9"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10" class="custom-control-input" checked="">--}}
{{--                                                                        <label class="custom-control-label" for="users-checkbox10"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11" class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12" class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light"> ذخیره تغییرات</button>
                                                    <a href="{{route('user.index')}}" type="reset" class="btn btn-outline-warning waves-effect waves-light">بازگشت</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>






















                                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                        <!-- users edit Info form start -->
                                        <form novalidate="">
                                            <div class="row mt-1">
                                                <div class="col-12 col-sm-6">
                                                    <h5 class="mb-1"><i class="feather icon-user mr-25"></i>اطلاعات شخصی</h5>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>تاریخ تولد</label>
                                                                    <input type="text" class="form-control birthdate-picker picker__input" required="" placeholder="تاریخ تولد" data-validation-required-message="This birthdate field is required" readonly="" id="P342399755" aria-haspopup="true" aria-readonly="false" aria-owns="P342399755_root"><div class="picker" id="P342399755_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">May</div><div class="picker__year">2020</div><div class="picker__nav--prev" data-nav="-1" tabindex="0" role="button" aria-controls="P342399755_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" tabindex="0" role="button" aria-controls="P342399755_table" title="Next month"> </div></div><table class="picker__table" id="P342399755_table" role="grid" aria-controls="P342399755" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td><div class="picker__day picker__day--outfocus" data-pick="1587843000000" id="P342399755_1587843000000" tabindex="0" role="gridcell" aria-label="April, 26, 2020">26</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1587929400000" id="P342399755_1587929400000" tabindex="0" role="gridcell" aria-label="April, 27, 2020">27</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1588015800000" id="P342399755_1588015800000" tabindex="0" role="gridcell" aria-label="April, 28, 2020">28</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1588102200000" id="P342399755_1588102200000" tabindex="0" role="gridcell" aria-label="April, 29, 2020">29</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1588188600000" id="P342399755_1588188600000" tabindex="0" role="gridcell" aria-label="April, 30, 2020">30</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588275000000" id="P342399755_1588275000000" tabindex="0" role="gridcell" aria-label="May, 1, 2020">1</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588361400000" id="P342399755_1588361400000" tabindex="0" role="gridcell" aria-label="May, 2, 2020">2</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1588447800000" id="P342399755_1588447800000" tabindex="0" role="gridcell" aria-label="May, 3, 2020">3</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588534200000" id="P342399755_1588534200000" tabindex="0" role="gridcell" aria-label="May, 4, 2020">4</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588620600000" id="P342399755_1588620600000" tabindex="0" role="gridcell" aria-label="May, 5, 2020">5</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588707000000" id="P342399755_1588707000000" tabindex="0" role="gridcell" aria-label="May, 6, 2020">6</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588793400000" id="P342399755_1588793400000" tabindex="0" role="gridcell" aria-label="May, 7, 2020">7</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588879800000" id="P342399755_1588879800000" tabindex="0" role="gridcell" aria-label="May, 8, 2020">8</div></td><td><div class="picker__day picker__day--infocus" data-pick="1588966200000" id="P342399755_1588966200000" tabindex="0" role="gridcell" aria-label="May, 9, 2020">9</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1589052600000" id="P342399755_1589052600000" tabindex="0" role="gridcell" aria-label="May, 10, 2020">10</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589139000000" id="P342399755_1589139000000" tabindex="0" role="gridcell" aria-label="May, 11, 2020">11</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589225400000" id="P342399755_1589225400000" tabindex="0" role="gridcell" aria-label="May, 12, 2020">12</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589311800000" id="P342399755_1589311800000" tabindex="0" role="gridcell" aria-label="May, 13, 2020">13</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589398200000" id="P342399755_1589398200000" tabindex="0" role="gridcell" aria-label="May, 14, 2020">14</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589484600000" id="P342399755_1589484600000" tabindex="0" role="gridcell" aria-label="May, 15, 2020">15</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589571000000" id="P342399755_1589571000000" tabindex="0" role="gridcell" aria-label="May, 16, 2020">16</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1589657400000" id="P342399755_1589657400000" tabindex="0" role="gridcell" aria-label="May, 17, 2020">17</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589743800000" id="P342399755_1589743800000" tabindex="0" role="gridcell" aria-label="May, 18, 2020">18</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589830200000" id="P342399755_1589830200000" tabindex="0" role="gridcell" aria-label="May, 19, 2020">19</div></td><td><div class="picker__day picker__day--infocus" data-pick="1589916600000" id="P342399755_1589916600000" tabindex="0" role="gridcell" aria-label="May, 20, 2020">20</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590003000000" id="P342399755_1590003000000" tabindex="0" role="gridcell" aria-label="May, 21, 2020">21</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590089400000" id="P342399755_1590089400000" tabindex="0" role="gridcell" aria-label="May, 22, 2020">22</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590175800000" id="P342399755_1590175800000" tabindex="0" role="gridcell" aria-label="May, 23, 2020">23</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1590262200000" id="P342399755_1590262200000" tabindex="0" role="gridcell" aria-label="May, 24, 2020">24</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590348600000" id="P342399755_1590348600000" tabindex="0" role="gridcell" aria-label="May, 25, 2020">25</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590435000000" id="P342399755_1590435000000" tabindex="0" role="gridcell" aria-label="May, 26, 2020">26</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590521400000" id="P342399755_1590521400000" tabindex="0" role="gridcell" aria-label="May, 27, 2020">27</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590607800000" id="P342399755_1590607800000" tabindex="0" role="gridcell" aria-label="May, 28, 2020">28</div></td><td><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1590694200000" id="P342399755_1590694200000" tabindex="0" role="gridcell" aria-label="May, 29, 2020" aria-activedescendant="1590694200000">29</div></td><td><div class="picker__day picker__day--infocus" data-pick="1590780600000" id="P342399755_1590780600000" tabindex="0" role="gridcell" aria-label="May, 30, 2020">30</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1590867000000" id="P342399755_1590867000000" tabindex="0" role="gridcell" aria-label="May, 31, 2020">31</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1590953400000" id="P342399755_1590953400000" tabindex="0" role="gridcell" aria-label="June, 1, 2020">1</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1591039800000" id="P342399755_1591039800000" tabindex="0" role="gridcell" aria-label="June, 2, 2020">2</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1591126200000" id="P342399755_1591126200000" tabindex="0" role="gridcell" aria-label="June, 3, 2020">3</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1591212600000" id="P342399755_1591212600000" tabindex="0" role="gridcell" aria-label="June, 4, 2020">4</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1591299000000" id="P342399755_1591299000000" tabindex="0" role="gridcell" aria-label="June, 5, 2020">5</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1591385400000" id="P342399755_1591385400000" tabindex="0" role="gridcell" aria-label="June, 6, 2020">6</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1590694200000" disabled="" aria-controls="P342399755">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="P342399755">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="P342399755">Close</button></div></div></div></div></div></div>
                                                                    <div class="help-block"></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>تلفن همراه</label>
                                                            <input type="text" class="form-control" value="+6595895857" placeholder="تلفن همراه اینجا..." data-validation-required-message="This mobile number is required">
                                                            <div class="help-block"></div></div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>سایت اینترنتی</label>
                                                            <input type="text" class="form-control" required="" placeholder="آدرس وب سایت در اینجا..." value="https://rowboat.com/insititious/Angelo" data-validation-required-message="This Website field is required">
                                                            <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>زبان ها</label>
                                                        <select class="form-control select2-hidden-accessible" id="users-language-select2" multiple="" data-select2-id="users-language-select2" tabindex="-1" aria-hidden="true">
                                                            <option value="English" selected="" data-select2-id="2">انگلیس</option>
                                                            <option value="Spanish">اسپانیایی</option>
                                                            <option value="French">فرانسوی</option>
                                                            <option value="Russian">روسی</option>
                                                            <option value="German">آلمانی</option>
                                                            <option value="Arabic" selected="" data-select2-id="3">عربی</option>
                                                            <option value="Sanskrit">سانسکریت</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="انگلیس" data-select2-id="4"><span class="select2-selection__choice__remove" role="presentation">×</span>انگلیس</li><li class="select2-selection__choice" title="عربی" data-select2-id="5"><span class="select2-selection__choice__remove" role="presentation">×</span>عربی</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>جنسیت</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" checked="" value="false">
                                                                        <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span> مذکر</div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" value="false">
                                                                        <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span> موونث</div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" value="false">
                                                                        <span class="vs-radio">
                              <span class="vs-radio--border"></span>
                              <span class="vs-radio--circle"></span>
                            </span> دیگر</div>
                                                                </fieldset>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>گزینه های تماس</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" checked="" name="customCheck1" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1">ایمیل</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" checked="" name="customCheck2" id="customCheck2">
                                                                        <label class="custom-control-label" for="customCheck2">پیام</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" name="customCheck3" id="customCheck3">
                                                                        <label class="custom-control-label" for="customCheck3">تلفن</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>نشانی</h5>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>خط شماره 1</label>
                                                            <input type="text" class="form-control" value="A-65, Belvedere Streets" required="" placeholder="خط شماره 1" data-validation-required-message="This Address field is required">
                                                            <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>آدرس خط 2</label>
                                                            <input type="text" class="form-control" required="" placeholder="آدرس خط 2" data-validation-required-message="This Address field is required">
                                                            <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>کد پستی</label>
                                                            <input type="text" class="form-control" required="" placeholder="کدپستی" value="1868" data-validation-required-message="This Postcode field is required">
                                                            <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>شهر</label>
                                                            <input type="text" class="form-control" required="" value="New York" data-validation-required-message="This Time Zone field is required">
                                                            <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>دولت</label>
                                                            <input type="text" class="form-control" required="" value="New York" data-validation-required-message="This Time Zone field is required">
                                                            <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>کشور</label>
                                                            <input type="text" class="form-control" required="" value="United Kingdom" data-validation-required-message="This Time Zone field is required">
                                                            <div class="help-block"></div></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light"> ذخیره تغییرات</button>
                                                    <button type="reset" class="btn btn-outline-warning waves-effect waves-light">تنظیم مجدد</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit Info form ends -->
                                    </div>
                                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                                        <!-- users edit socail form start -->
                                        <form novalidate="">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">

                                                    <fieldset>
                                                        <label>توییتر</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="https://www.twitter.com/adoptionism744" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                                        </div>

                                                        <label>فیس بوک</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="https://www.facebook.com/adoptionism664" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                                        </div>
                                                        <label>اینستاگرام</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="https://www.instagram.com/adopt-ionism744" placeholder="https://www.instagram.com/nparoco.co" aria-describedby="basic-addon5">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label>گیت هاب</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-github" id="basic-addon9"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="https://www.github.com/madop818" placeholder="https://www.nparoco.com" aria-describedby="basic-addon9">
                                                    </div>
                                                    <label>کدپن</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="https://www.codepen.com/adoptism243" placeholder="https://www.nparoco.com" aria-describedby="basic-addon12">
                                                    </div>
                                                    <label>اسلک</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-slack" id="basic-addon11"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="@adoptionism744" placeholder="https://www.nparoco.com/" aria-describedby="basic-addon11">
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light"> ذخیره تغییرات</button>
                                                    <button type="reset" class="btn btn-outline-warning waves-effect waves-light">تنظیم مجدد</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit socail form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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






