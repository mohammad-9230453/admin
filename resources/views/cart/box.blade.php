@extends('layouts.home')

@section('title') cart box @endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
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
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/plugins/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/pages/data-list-view.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/custom-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style-rtl.html">
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
                            <h2 class="content-header-title float-left mb-0">نمایش کوتاه</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">خانه</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">لیست داده ها</a>
                                    </li>
                                    <li class="breadcrumb-item active"> نمایش کوتاه</li>
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
            <div class="content-body"><!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> اقدامات</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>حذف</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>آرشیو</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>چاپ</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>یک اقدام دیگر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view Aroco-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>تصویر</th>
                                <th>نام</th>
                                <th>قیمت</th>
                                <th>تعداد</th>
                                <th>اقدام</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(Session::has('cart'))

{{--                                loop to read session data /////////////////////////////////////////////////////////////////////////////--}}
                                @foreach (Session::get('cart')->items as $item)
                            <tr>
                                <td></td>
                                <td class="product-img">
                                    @if ($item['item']->photo)
                                        <img src="{{$item['item']->photo->path}}" alt="Img placeholder">

                                    @else
                                        <img src="{{asset('app-assets')}}/images/elements/apple-watch.png" alt="Img placeholder">

                                    @endif
                                </td>
                                <td class="product-name">{{$item['item']->name}}</td>

                                <td class="product-price">{{$item['price']}} ريال</td>


                                <td class="product-price">
                                    <a href="{{route('cart.add',$item['item']->id)}}"><i class="feather icon-plus-circle"></i></a>
                                    {{$item['qty']}}
                                    <a href="{{route('cart.delete', $item['item']->id) }}" ><i class="feather icon-minus-circle"></i></a>

                                    <form action="{{route('cart.number' , $item['item']->id)}}" method="POST">
                                        @csrf
                                        <div class="input-group input-group-lg bootstrap-touchspin">
                                            <input type="number" class="touchspin form-control" name="number" value="{{$item['qty']}}" min="0">
                                        </div>
                                        <button class="fa" type="submit" style="display: none"><i class="fa fa-check-circle-o"></i></button>
                                    </form>

                                </td>



                                <td class="product-action">
{{--                                    class="action-edit"--}}
                                    <a href="#" ><i class="feather icon-edit"></i></a>
{{--                                    class="action-delete"--}}
                                    <a href="{{route('cart.forget', $item['item']->id) }}" ><i class="feather icon-trash"></i></a>
                                </td>
                            </tr>
                                @endforeach
{{--                                loop to read session data /////////////////////////////////////////////////////////////////////////////--}}


                                @else
                            <h1>سبد خرید شما خالی میباشد</h1>
                                @endif



                            </tbody>
                        </table>
                    </div>
                    <!-- dataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">داده های نمای کوچک</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">نام</label>
                                            <input type="text" class="form-control" id="data-name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-category">  دسته بندی</label>
                                            <select class="form-control" id="data-category">
                                                <option>صدا</option>
                                                <option>کامپیوترها</option>
                                                <option>تناسب اندام</option>
                                                <option>لوازم خانگی</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">وضعیت سفارش</label>
                                            <select class="form-control" id="data-status">
                                                <option>در انتظار</option>
                                                <option>لغو شد</option>
                                                <option>تحویل داده شده</option>
                                                <option>در انتظار</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">قیمت</label>
                                            <input type="text" class="form-control" id="data-price">
                                        </div>
                                        <div class="col-sm-12 data-field-col data-list-upload">
                                            <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                                <div class="dz-message">بارگذاری تصویر</div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary">داده را اضافه کنید</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">لغو</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('app-assets')}}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets')}}/vendors/js/extensions/dropzone.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets')}}/js/core/app-menu.min.js"></script>
    <script src="{{asset('app-assets')}}/js/core/app.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/components.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/customizer.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets')}}/js/scripts/ui/data-list-view.min.js"></script>
    <!-- END: Page JS-->


@endsection






