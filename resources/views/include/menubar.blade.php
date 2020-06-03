<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuexy</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">کاربر</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('user.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">لیست</span></a>
                    </li>
                    <li><a href="{{route('messages.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">chat</span></a></li>
                    <li><a href="{{route('login')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">login</span></a></li>
                    <li><a href="{{route('register')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">register</span></a></li>
                </ul>
            </li>

            <li class="nav-item has-sub open"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Charts">carts</span></a>
                <ul class="menu-content" style="">
                    <li class="is-shown"><a href="{{route('post.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Apex">posts</span></a>
                    </li>
                    <li class="is-shown"><a href="{{route('cart.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chartjs">carts</span>@if(Session::has('cart'))<span class="badge badge badge-primary badge-success float-left mr-3">{{Session::get('cart')->totalQty}}</span>@endif</a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->