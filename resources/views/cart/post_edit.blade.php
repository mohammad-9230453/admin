@extends('layouts.home')

@section('title') cart posts @endsection

@section('style')
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/custom-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style-rtl.html">
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
                            <h2 class="content-header-title float-left mb-0">کارت پایه</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">خانه</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">کارت</a>
                                    </li>
                                    <li class="breadcrumb-item active"> کارت پایه</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">گفتگو</a><a class="dropdown-item" href="#">ایمیل</a><a class="dropdown-item" href="#">تقویم</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><div class="alert alert-primary">
                    <i class="feather icon-info mr-1"></i> کلیک<a href="https://getbootstrap.com/docs/4.3/components/card/" target="_blank">اینجا</a>  برای موارد بیشتر</div>

{{--               form--}}


                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ایجاد یک کالای جدید</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{{route('post.update',$post->id)}}" novalidate="" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input value="{{$post->name}}" type="text" name="name" class="form-control" placeholder="نام کالا" required="" data-validation-required-message="This First Name field is required" aria-invalid="false">
                                                            <div class="help-block"></div></div>
                                                        @error('name')<div class="alert alert-danger">{{$message}}</div>@enderror

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input value="{{$post->price}}" type="number" name="price" class="form-control" placeholder="قیمت کالا" required="" data-validation-required-message="This Email field is required" aria-invalid="false">
                                                            <div class="help-block"></div></div>
                                                        @error('price')<div class="alert alert-danger">{{$message}}</div>@enderror

                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input  type="file" name="photo" class="form-control" placeholder="path" required="" data-validation-required-message="This Email field is required" aria-invalid="false">
                                                            <div class="help-block"></div></div>

                                                    </div>
                                                </div>
@if ($post->photo)
                                                    <img src="{{$post->photo->path}}" alt="">

@endif
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">ویرایش </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>





                       </div>
                </section>
                <!-- Background variants section end -->



            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('app-assets')}}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets')}}/js/core/app-menu.min.js"></script>
    <script src="{{asset('app-assets')}}/js/core/app.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/components.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/customizer.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
@endsection






