<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/logo-white.png') }}" class="main-logo dark-theme"
                alt="logo"></a>
        {{-- <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a> --}}
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/favicon-white.png') }}" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{ asset('assets/img/faces/001-boy.svg') }}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">
                        {{ Auth::user()->name ?? 'ضيف' }}
                    </h4>
                    {{-- <span class="mb-0 text-muted">Premium Member</span> --}}
                </div>
            </div>
        </div>
        <ul class="side-menu">

            <li class="slide">
                <a class="side-menu__item" wire:navigate href="{{ route('home') }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label">الرئيسية</span><span
                        class="badge badge-success side-badge">1</span></a>
            </li>
            <li class="side-item side-item-category">وظائف ادارية</li>



            {{-- <li class="slide">
                    <a class="side-menu__item" href="{{ route('status') }}" wire:navigate><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                            <path
                                d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                        </svg><span class="side-menu__label">ثوابت النظام</span></a>
                </li> --}}


            <li class="slide ">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
                            opacity=".3" />
                        <path
                            d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z" />
                    </svg><span class="side-menu__label">المستخدمين والصلاحيات</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu p-0">
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide"
                            href="{{ url('/' . ($page = '#')) }}"><span
                                class="sub-side-menu__label">المستخدمين</span><i
                                class="sub-angle fe fe-chevron-down"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{ route('user.index') }}">عرض المستخدمين</a></li>
                            <li><a class="sub-slide-item" href="{{ route('user.create') }}">اضافة مستخدم</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="slide-menu p-0">
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide"
                            href="{{ url('/' . ($page = '#')) }}"><span class="sub-side-menu__label">الصلاحيات</span><i
                                class="sub-angle fe fe-chevron-down"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{ route('ability.index') }}">انشاء صلاحية</a></li>
                            <li><a class="sub-slide-item" href="{{ route('role.create') }}">انشاء المجموعات</a></li>
                            <li><a class="sub-slide-item" href="{{ route('role.index') }}">عرض المجموعات</a></li>
                        </ul>
                    </li>
                </ul>


            </li>

            <li class="slide ">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
                            opacity=".3" />
                        <path
                            d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z" />
                    </svg>
                    @can('status.index')
                        <span class="side-menu__label"> الثوابت والاعدادات</span>
                        <i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu p-0">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-toggle="sub-slide"
                                href="{{ url('/' . ($page = '#')) }}"><span class="sub-side-menu__label">ثوابت
                                    النظام</span><i class="sub-angle fe fe-chevron-down"></i></a>
                            <ul class="sub-slide-menu">

                                <li><a class="sub-slide-item" href="{{ route('status') }}">ادارة الثوابت </a></li>

                            </ul>
                        </li>
                    </ul>
                @endcan
                <ul class="slide-menu p-0">
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide"
                            href="{{ url('/' . ($page = '#')) }}"><span
                                class="sub-side-menu__label">الاعدادات</span><i
                                class="sub-angle fe fe-chevron-down"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{ route('setting.create') }}">انشاء اعدادات</a></li>
                            <li><a class="sub-slide-item" href="{{ route('setting.index') }}">عرض الاعدادات</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="slide-menu p-0">
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide"
                            href="{{ url('/' . ($page = '#')) }}"><span class="sub-side-menu__label"> المعالم
                                والعناوين</span><i class="sub-angle fe fe-chevron-down"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{ route('addresses.index') }}">انشاء المعالم </a>
                            </li>

                        </ul>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</aside>
<!-- main-sidebar -->
