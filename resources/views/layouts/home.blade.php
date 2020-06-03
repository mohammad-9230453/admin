<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="rtl">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! htmlScriptTagJsApi(['lang'=>'fa']) !!}
    <link rel="apple-touch-icon" href="{{asset('app-assets')}}/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://demo.nparoco.com/Vuexy/app-assets/images/ico/favicon.ico">
  <link href="{{asset('app-assets')}}/images/fonts.googleapis.css" rel="stylesheet">
<title>@yield('title', 'home')</title>
@yield('style')

  </head>
  <body @yield('body', 'class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns navbar-floating menu-expanded pace-done fixed-footer" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout"')>

@include('include.head')
@include('include.menubar')

@yield('content')

@include('include.setting_page')
@include('include.footer')


@yield('script')




  </body>
 </html>