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
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ویرایش اطلاعات {{$user->name}} </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">










                                        <form class="form" method="POST" action="{{route('user.update' , $user->id)}}" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="نام" name="name" value="{{$user->name}}">
                                                            @error('name')
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                                <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                            <label for="first-name-column">نام</label>

                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="last-name-column" class="form-control" placeholder="تلفن" name="phone" value="{{$user->phone}}">
                                                            @error('phone')
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                                <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                            <label for="last-name-column">تلفن</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <div class="form-group" data-select2-id="126">
                                                                <label for="city-column">نوع کاربر</label>
                                                                <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="role">
                                                                    <option value="1" data-select2-id="3">ادمین</option>
                                                                    <option value="0" data-select2-id="135" @if ($user->role == 0) selected @endif>کاربر</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <div class="form-group" data-select2-id="126">
                                                                <label for="city-column">فعال/غیر فعال</label>
                                                                <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="active">
                                                                    <option value="1" data-select2-id="3">فعال</option>
                                                                    <option value="0" data-select2-id="135" @if ($user->active == 0) selected @endif>غیر فعال</option>
                                                                </select>

                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="email" id="country-floating" class="form-control" name="email" placeholder="ایمیل" value="{{$user->email}}">
                                                            @error('email')
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                                <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                            <label for="country-floating">ایمیل</label>
                                                        </div>
                                                    </div>


{{--                                                    <div class="col-md-6 col-12">--}}
{{--                                                        <div class="form-label-group">--}}
{{--                                                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="شرکت">--}}
{{--                                                            <label for="company-column">رمز ورود</label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}


                                                    <div class="modal-body">
                                                        <label>picture:</label>
                                                        <div class="form-group">
                                                            <input name="photo" type="file"  class="form-control">
                                                        </div>

                                                    </div>


                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">ویرایش</button>
                                                        <a href="{{route('user.index')}}" type="reset" class="btn btn-outline-warning mr-1 mb-1">بازگشت</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->

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






