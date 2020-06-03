@extends('layouts.home')

@section('title') users @endsection
@section('body')class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar chat-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout"@endsection
@section('style')
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
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/pages/app-chat.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css-rtl/custom-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style-rtl.html">
    <!-- END: Custom CSS-->

@endsection


@section('content')


{{--    add content form___________________________________________________________________________________________--}}
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">فرم ورود به سیستم</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>


                <form action="{{route('contact.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <label>شماره تلفن:</label>
                        <div class="form-group">
                            <input name="phone" type="text" placeholder="09xxxxxxxxx" class="form-control">
                        </div>

                        <label>نام مستعار:</label>
                        <div class="form-group">
                            <input name="name" type="text" placeholder="نام مسعار" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light" >ایجاد</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
{{--    add content form___________________________________________________________________________________________--}}


    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <div class="sidebar-left">

@if (session('error'))
                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                        <i class="feather icon-info mr-1 align-middle"></i>
                        <span>{{session('error')}}</span>
                    </div>
@endif

                <div class="sidebar">

                    <!-- User Chat profile area -->
                    <div class="chat-profile-sidebar">
                        <header class="chat-profile-header">
    <span class="close-icon">
      <i class="feather icon-x"></i>
    </span>
                            <div class="header-profile-sidebar">
                                <div class="avatar">
                                    <img src="{{asset('app-assets')}}/images/portrait/small/avatar-s-11.jpg" alt="user_avatar" height="70" width="70">
                                    <span class="avatar-status-online avatar-status-lg"></span>
                                </div>
                                <h4 class="chat-user-name">جواد محمدی</h4>
                            </div>

                        </header>
                        <div class="profile-sidebar-area">
                            <div class="scroll-area">
                                <h6>درباره</h6>
                                <div class="about-user">
                                    <fieldset class="mb-0">
                                        <form action="">
                                            <textarea data-length="120" class="form-control char-textarea" id="textarea-counter" rows="5" placeholder="درباره کاربر">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</textarea>
                                            <button type="button" class="btn mb-1 btn-primary btn-sm btn-block waves-effect waves-light">ذخیره</button>
                                        </form>
                                    </fieldset>
                                    <small class="counter-value float-right"><span class="char-count">108</span> / 120 </small>
                                </div>
                                <h6 class="mt-3">وضعیت</h6>
                                <ul class="list-unstyled user-status mb-0">
                                    <li class="pb-50">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-success">
                                                <input type="radio" name="userStatus" value="online" checked="checked">
                                                <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
                                                <span class="">فعال</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="pb-50">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-danger">
                                                <input type="radio" name="userStatus" value="busy">
                                                <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
                                                <span class="">مزاحم نشوید</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="pb-50">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="userStatus" value="away">
                                                <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
                                                <span class="">دور</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="pb-50">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-secondary">
                                                <input type="radio" name="userStatus" value="offline">
                                                <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
                                                <span class="">آفلاین</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ User Chat profile area -->





                    <!-- Chat Sidebar area -->
                    <div class="sidebar-content card">
    <span class="sidebar-close-icon">
      <i class="feather icon-x"></i>
    </span>
                        <div class="chat-fixed-search">
                            <div class="d-flex align-items-center">
                                <div class="sidebar-profile-toggle position-relative d-inline-flex">
                                    <div class="avatar">
                                        <img src="{{asset('app-assets')}}/images/portrait/small/avatar-s-11.jpg" alt="user_avatar" height="40" width="40">
                                        <span class="avatar-status-online"></span>
                                    </div>
                                    <div class="bullet-success bullet-sm position-absolute"></div>
                                </div>
                                <fieldset class="form-group position-relative has-icon-left mx-1 my-0 w-100">
                                    <input type="text" class="form-control round" id="chat-search" placeholder="جستجو کنید یا یک چت جدید را آغاز کنید">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div id="users-list" class="chat-user-list list-group position-relative">
                            <h3 class="primary p-1 mb-0">گفتگو</h3>
                            <ul class="chat-users-list-wrapper media-list">

                                <li>
                                    <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{asset('app-assets')}}/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
                                    </div>
                                    <div class="user-chat-info">
                                        <div class="contact-info">
                                            <h5 class="font-weight-bold mb-0">حمید اعزازی</h5>
                                            <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                        <div class="contact-meta">
                                            <span class="float-right mb-25">4:14 بعد از ظهر</span>
                                            <span class="badge badge-primary badge-pill float-right">3</span>
                                        </div>
                                    </div>
                                </li>


                            </ul>

                            <h3 class="primary p-1 mb-0">مخاطب</h3>
                            <h3 class="primary p-2 mb-0"><button type="button" class="btn mb-1 btn-outline-primary btn-icon  btn-block waves-effect waves-light" data-toggle="modal" data-target="#inlineForm">  افزودن مخاطب جدید</button></h3>
                            <ul class="chat-users-list-wrapper media-list">




 @foreach(Auth::user()->contacts as $contact)

                                    <a href="{{route('message.read' , $contact->user->id)}}">
                                    <li @if ($chat)class="{{$contact->user->id==$chat->id?'active':''}}"@endif >

                                    <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{empty($contact->user->photo->path) ? asset('app-assets').'/images/pic-1.png' : $contact->user->photo->path}}" height="42" width="42" alt="Generic placeholder image">
                  <span class="{{Cache::has('user_'.$contact->user->id) ?'avatar-status-online' :  'avatar-status-offline'}}"></span><i></i>
                  </span>
                                    </div>
                                    <div class="user-chat-info">
                                        <div class="contact-info">
                                            <h5 class="font-weight-bold mb-0">{{$contact->name}}</h5>
                                            <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ا...</p>
                                        </div>
                                        <div class="contact-meta">
                                            <span class="float-right mb-25">
                                                @if(Cache::has('user_'.$contact->user->id))
                                                     <div class="badge badge-pill badge-glow badge-success mr-1 mb-1">online</div>
                                                @else
                                                    <div class="badge badge-pill badge-glow badge-danger mr-1 mb-1">offline</div>
                                                @endif
                                            </span>
                                            <span class="float-right mb-25" style="direction: ltr;">
                                                @if(!Cache::has('user_'.$contact->user->id))
                                                    {{empty($contact->user->last_seen) ?
                                                     \Carbon\Carbon::parse($contact->user->updated_at)->diffForHumans()
                                                     :\Carbon\Carbon::parse($contact->user->last_seen)->diffForHumans()}}

                                                @endif

                                            </span>
                                        </div>
                                    </div>

                                </li>
                                    </a>
@endforeach



                            </ul>
                        </div>
                    </div>
                    <!--/ Chat Sidebar area -->





                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body"><div class="chat-overlay"></div>
                        <section class="chat-app-window">

                            <div class="start-chat-area @if ($chat) d-none @endif">
                                <span class="mb-1 start-chat-icon feather icon-message-square"></span>
                                <h4 class="py-50 px-1 sidebar-toggle start-chat-text">شروع گفتگو</h4>
                            </div>


                            <div class="active-chat @if (!$chat) d-none @endif">
                                <div class="chat_navbar">
                                    <header class="chat_header d-flex justify-content-between align-items-center p-1">
                                        <div class="vs-con-items d-flex align-items-center">
                                            <div class="sidebar-toggle d-block d-lg-none mr-1"><i class="feather icon-menu font-large-1"></i></div>
                                            <div class="avatar user-profile-toggle m-0 m-0 mr-1">
                                                <img src="{{asset('app-assets')}}/images/portrait/small/avatar-s-1.jpg" alt="" height="40" width="40" />
                                                <span class="avatar-status-busy"></span>
                                            </div>
                                            <h6 class="mb-0">محمد نوری</h6>
                                        </div>
                                        <span class="favorite"><i class="feather icon-star font-medium-5"></i></span>
                                    </header>
                                </div>
                                <div class="user-chats">
                                    <div class="chats">

                                            <div class="divider">
                                            <div class="divider-text">دیروز</div>
                                            </div>


                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                    <img src="{{asset('app-assets')}}/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="40" width="40"/>
                                                </a>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>بنظر رابط کاربری خوبی داره.</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>این برای پروژه بعدی من عالیه.</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>چجوری می توانم خریداری کنم؟</p>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                    <img src="{{asset('app-assets')}}/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40"/>
                                                </a>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>عالیه، با کلیک کردن آزادی را احساس کنید</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>https://www.nparoco.com/</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="chat-app-form">
                                    <form class="chat-app-input d-flex" onsubmit="enter_chat();" action="javascript:void(0);">
                                        <input type="text" class="form-control message mr-1 ml-50" id="iconLeft4-1" placeholder="پیام خود را تایپ کنید">
                                        <button type="button" class="btn btn-primary send" onclick="enter_chat();"><i class="fa fa-paper-plane-o d-lg-none"></i> <span class="d-none d-lg-block">ارسال</span></button>
                                    </form>
                                </div>

                            </div>
                        </section>




                        <!-- User Chat profile right area -->
                        <div class="user-profile-sidebar">
                            <header class="user-profile-header">
    <span class="close-icon">
      <i class="feather icon-x"></i>
    </span>
                                <div class="header-profile-sidebar">
                                    <div class="avatar">
                                        <img src="{{asset('app-assets')}}/images/portrait/small/avatar-s-1.jpg" alt="user_avatar" height="70" width="70">
                                        <span class="avatar-status-busy avatar-status-lg"></span>
                                    </div>
                                    <h4 class="chat-user-name">محمد نوری</h4>
                                </div>
                            </header>
                            <div class="user-profile-sidebar-area p-2">
                                <h6>درباره</h6>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            </div>
                        </div>
                        <!--/ User Chat profile right area -->





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')


    <!-- BEGIN: Vendor JS-->
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
    <script src="{{asset('app-assets')}}/js/scripts/pages/app-chat.min.js"></script>
    <!-- END: Page JS-->

@endsection





































