@extends('layouts.home')

@section('title') users @endsection

@section('style')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/tables/datatable/datatables.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/custom-rtl.min.css">
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
                            <h2 class="content-header-title float-left mb-0">کاربران</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لیست</a>
                                    </li>
                                    <li class="breadcrumb-item active">کاربر</li>
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

{{-- _________________________________________________________________________________________________________________________________________________--}}

<section id="headers">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">کاربران</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
{{--                            <p class="card-text">هنگام استفاده از جداول برای نمایش داده ها، اغلب میخواهید اطلاعات ستونی را به صورت گروهی نمایش دهید. جداول گروهی (DataTable) به طور کامل از colspan و rowspan در سر تیتر جدول پشتیبانی می کند و سرتیتر های مورد نیاز را با المان TH برای آن ستون درج کند. برای همین نیاز دارید تا <code>.complex-headers</code> کلاس برای استایل</p>--}}
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered complex-headers">
                                    <thead>
                                    <tr>
                                        <th rowspan="1" colspan="2">نام و شناسه</th>
                                        <th colspan="2">راه تماس</th>
                                        <th colspan="5">نوع</th>
                                    </tr>
                                    <tr>
                                        <th>id</th>
                                        <th>نام</th>
                                        <th>ایمیل</th>
                                        <th>تلفن</th>
                                        <th>فعال</th>
                                        <th>نوع کاربر</th>
                                        <th>آنلاین/آفلاین</th>
                                        <th>آخرین بازدید</th>
                                        <th>تاریخ ایجاد</th>
                                        <th>ویرایش/حذف</th>

                                    </tr>
                                    </thead>
                                    <tbody>

@foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->active==1 ? 'yes' : 'no'}}</td>
        <td>{{$user->role}}</td>
        @if (Cache::has('user_'.$user->id))
            <td><div class="badge badge-pill badge-glow badge-success mr-1 mb-1">online</div></td>
        @else
        <td><div class="badge badge-pill badge-glow badge-danger mr-1 mb-1">offline</div></td>
        @endif
        <td style="direction: ltr" id="time{{$user->id}}" >                                         {{empty($user->last_seen) ?
                                                     \Carbon\Carbon::parse($user->updated_at)->diffForHumans()
                                                     :\Carbon\Carbon::parse($user->last_seen)->diffForHumans()}}
        </td>
        <td>{{$user->created_at}}</td>
        <td><div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary waves-effect waves-light">چپ</button>
                <form action="{{route('user.destroy' , $user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger waves-effect waves-light">حذف</button>
                </form>
                <button type="button" class="btn btn-info waves-effect waves-light">راست</button>
            </div></td>
    </tr>
@endforeach










                                                                        </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- _________________________________________________________________________________________________________________________________________________--}}


            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets')}}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets')}}/js/core/app-menu.min.js"></script>
    <script src="{{asset('app-assets')}}/js/core/app.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/components.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/customizer.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets')}}/js/scripts/datatables/datatable.min.js"></script>
    <!-- END: Page JS-->

    <script>
        {{--setInterval(function () {--}}
        {{--            @foreach($users as $user)--}}
        {{--    document.getElementById('time' + {{$user->id}}).innerHTML='{{$user->last_seen}}';--}}
        {{--    @endforeach--}}
        {{--},1000)--}}

    </script>

@endsection






