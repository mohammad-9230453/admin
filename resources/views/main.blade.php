@extends('layouts.home')

@section('title') main @endsection

@section('style')
    <!-- BEGIN: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/extensions/shepherd-theme-default.css">
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
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/pages/dashboard-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/pages/card-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/plugins/tour/tour.min.css">
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
            </div>

    {{--            <div class="content-body"><!-- Dashboard Analytics Start -->--}}
    {{--                <section id="dashboard-analytics">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-lg-6 col-md-12 col-sm-12">--}}
    {{--                            <div class="card bg-analytics text-white">--}}
    {{--                                <div class="card-content">--}}
    {{--                                    <div class="card-body text-center">--}}
    {{--                                        <img src="../../../app-assets/images/elements/decore-left.png" class="img-left" alt="--}}
    {{--            card-img-left">--}}
    {{--                                        <img src="../../../app-assets/images/elements/decore-right.png" class="img-right" alt="--}}
    {{--            card-img-right">--}}
    {{--                                        <div class="avatar avatar-xl bg-primary shadow mt-0">--}}
    {{--                                            <div class="avatar-content">--}}
    {{--                                                <i class="feather icon-award white font-large-1"></i>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="text-center">--}}
    {{--                                            <h1 class="mb-2 text-white">تبریک محمد</h1>--}}
    {{--                                            <p class="m-auto w-75">شما انجام داده اید<strong>57.6%</strong>فروش بیشتر امروز نشان جدید خود را در نمایه خود بررسی کنید.</p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}


                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                                    <p class="mb-0">مشترکین جذب شده</p>
                                </div>
                                <div class="card-content" style="position: relative;">
                                    <div id="subscribe-gain-chart" style="min-height: 100px;">
                                    <div id="apexchartshpmedc1s" class="apexcharts-canvas apexchartshpmedc1s light" style="width: 374px; height: 100px;">
                                        <svg id="SvgjsSvg1006" width="374" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMaskhpmedc1s"><rect id="SvgjsRect1012" width="376.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskhpmedc1s"><rect id="SvgjsRect1013" width="376" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1019" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1020" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)" offset="0"></stop><stop id="SvgjsStop1021" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop><stop id="SvgjsStop1022" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1011" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1025" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1026" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1029" class="apexcharts-grid"><line id="SvgjsLine1031" x1="0" y1="100" x2="374" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1030" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1015" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1016" class="apexcharts-series" seriesName="Subscribers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1023" d="M0 100L0 77.77777777777777C21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786C373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 100M373.99999999999994 17.777777777777786C373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 " fill="url(#SvgjsLinearGradient1019)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhpmedc1s)" pathTo="M 0 100L 0 77.77777777777777C 21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C 84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C 146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C 208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C 271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C 333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786C 373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 100M 373.99999999999994 17.777777777777786z" pathFrom="M -1 140L -1 140L 62.33333333333333 140L 124.66666666666666 140L 186.99999999999997 140L 249.33333333333331 140L 311.66666666666663 140L 373.99999999999994 140"></path><path id="SvgjsPath1024" d="M0 77.77777777777777C21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786C373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 " fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhpmedc1s)" pathTo="M 0 77.77777777777777C 21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C 84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C 146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C 208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C 271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C 333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786" pathFrom="M -1 140L -1 140L 62.33333333333333 140L 124.66666666666666 140L 186.99999999999997 140L 249.33333333333331 140L 311.66666666666663 140L 373.99999999999994 140"></path><g id="SvgjsG1017" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1037" r="0" cx="0" cy="77.77777777777777" class="apexcharts-marker we58pm22a no-pointer-events" stroke="#ffffff" fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1018" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1032" x1="0" y1="0" x2="374" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1033" x1="0" y1="0" x2="374" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1034" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1035" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1036" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1010" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1027" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1028" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 11px; top: 66px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Subscribers: </span><span class="apexcharts-tooltip-text-value">28</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger">
                                            <div style="width: 375px; height: 101px;">

                                            </div></div>
                                        <div class="contract-trigger"></div></div></div>
                            </div>
                        </div>





                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>در مقابل 7 روز گذشته</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="btn btn-primary shadow">دیدن جزئیات<i class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem5"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 7 روز اخیر</button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">28 روز اخیر</a>
                                                        <a class="dropdown-item" href="#">ماه اخیر</a>
                                                        <a class="dropdown-item" href="#">سال اخیر</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart">
                                                    <div id="apexcharts2vt155x5" class="apexcharts-canvas apexcharts2vt155x5 light" style="width: 353px; height: 200px;">
                                                    <svg id="SvgjsSvg2777" width="353" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"></svg>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <p class="mb-0">هدف: 10,000,000 ريال</p>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"
                                                         style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">کاربران: 100K</p>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100"
                                                         style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">احتباس: 90٪</p>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100"
                                                         style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">مدت زمان: 1سال</p>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100"
                                                         style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">پشتیبانی ردیاب</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem4"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 7 روز اخیر</button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">28 روز اخیر</a>
                                            <a class="dropdown-item" href="#">ماه اخیر</a>
                                            <a class="dropdown-item" href="#">سال اخیر</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                                                <small>تیکت ها</small>
                                            </div>
                                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                                <div id="support-tracker-chart"></div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between">
                                            <div class="text-center">
                                                <p class="mb-50">تیکت های جدید</p>
                                                <span class="font-large-1">29</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">تیکت های  باز</p>
                                                <span class="font-large-1">63</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">زمان پاسخ</p>
                                                <span class="font-large-1">1 روز</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4>سفارشات محصول</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem2"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 7 روز اخیر</button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                                            <a class="dropdown-item" href="#">28 روز اخیر</a>
                                            <a class="dropdown-item" href="#">ماه اخیر</a>
                                            <a class="dropdown-item" href="#">سال اخیر</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="product-order-chart" class="mb-3"></div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-primary"></i>
                                                <span class="text-bold-600 ml-50">تمام شده</span>
                                            </div>
                                            <div class="product-result">
                                                <span>23043</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-warning"></i>
                                                <span class="text-bold-600 ml-50">در انتظار</span>
                                            </div>
                                            <div class="product-result">
                                                <span>14658</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-danger"></i>
                                                <span class="text-bold-600 ml-50">رد شد</span>
                                            </div>
                                            <div class="product-result">
                                                <span>4758</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title">آمار فروش</h4>
                                        <p class="text-muted mt-25 mb-0">6 ماه گذشته</p>
                                    </div>
                                    <p class="mb-0"><i class="feather icon-more-vertical font-medium-3 text-muted cursor-pointer"></i></p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-0">
                                        <div id="sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جدول زمانی فعالیت</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="activity-timeline timeline-left list-unstyled">
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">جلسه مشتری</p>
                                                    <span class="font-small-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span>
                                                </div>
                                                <small class="text-muted">25 دقیقه پیش</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-warning">
                                                    <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">خبرنامه ایمیل</p>
                                                    <span class="font-small-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span>
                                                </div>
                                                <small class="text-muted">15 روز اخیر</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-danger">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">برنامه ریزی وبینار</p>
                                                    <span class="font-small-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span>
                                                </div>
                                                <small class="text-muted">20 روز پیش</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-success">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">راه اندازی وب سایت</p>
                                                    <span class="font-small-3">لورم ایپسوم متن ساختگی.</span>
                                                </div>
                                                <small class="text-muted">25 اخیر</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">بازار یابی</p>
                                                    <span class="font-small-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </span>
                                                </div>
                                                <small class="text-muted">28 روز پیش</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">سفارشات ارسال شده</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                            <tr>
                                                <th>سفارش</th>
                                                <th class="Aroco-th">وضعیت</th>
                                                <th>عملگرها</th>
                                                <th>محل</th>
                                                <th>فاصله</th>
                                                <th>تاریخ شروع</th>
                                                <th>تاریخ رسیدن به مقصد</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>#879985</td>
                                                <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>در حال حرکت</td>
                                                <td class="p-1">
                                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Vinnie Mostowy" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Elicia Rieske" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Julee Rossignol" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Darcey Nooner" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>کرمان، کرمان</td>
                                                <td>
                                                    <span>130 km</span>
                                                    <div class="progress progress-bar-success mt-1 mb-0">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>1398/07/26 14:58</td>
                                                <td>1395/07/28</td>
                                            </tr>
                                            <tr>
                                                <td>#156897</td>
                                                <td><i class="fa fa-circle font-small-3 text-warning mr-50"></i>در انتظار</td>
                                                <td class="p-1">
                                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Trina Lynes" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Lilian Nenez" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Alberto Glotzbach" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>شبستر، تبریز</td>
                                                <td>
                                                    <span>234 km</span>
                                                    <div class="progress progress-bar-warning mt-1 mb-0">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>1398/07/26 14:58</td>
                                                <td>1395/07/28</td>
                                            </tr>
                                            <tr>
                                                <td>#568975</td>
                                                <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>در حال حرکت</td>
                                                <td class="p-1">
                                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Lai Lewandowski" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Elicia Rieske" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Darcey Nooner" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Julee Rossignol" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Jeffrey Gerondale" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>شیراز، فارس</td>
                                                <td>
                                                    <span>168 km</span>
                                                    <div class="progress progress-bar-success mt-1 mb-0">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>1398/07/26 14:58</td>
                                                <td>1395/07/28</td>
                                            </tr>
                                            <tr>
                                                <td>#245689</td>
                                                <td><i class="fa fa-circle font-small-3 text-danger mr-50"></i>لغو شد</td>
                                                <td class="p-1">
                                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Vinnie Mostowy" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                                            data-original-title="Elicia Rieske" class="avatar pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>اردکان، یزد</td>
                                                <td>
                                                    <span>125 km</span>
                                                    <div class="progress progress-bar-danger mt-1 mb-0">
                                                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>1398/07/26 14:58</td>
                                                <td>1395/07/28</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets')}}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets')}}/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/extensions/tether.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets')}}/js/core/app-menu.min.js"></script>
    <script src="{{asset('app-assets')}}/js/core/app.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/components.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/customizer.min.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    {{--    <script src="{{asset('app-assets')}}/js/scripts/pages/dashboard-analytics.min.js"></script>--}}
    <!-- END: Page JS-->
@endsection






