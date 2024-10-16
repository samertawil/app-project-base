<header>
    <nav class="navbar bg-dark  navbar-expand-md navbar-dark justify-content-between align-items-center py-3 ">
        <div class="container">

            <button class="navbar-toggler my-3" type="button" data-bs-toggle="collapse" data-bs-target=".navmenu">
                <span class="navbar-toggler-icon " style="color: yellow !important;"></span>
            </button>
 

            <div class="collapse navbar-collapse navmenu ">
                <ul class="navbar-nav " style="text-align: start;">
                    <li id="t1" class="nav-item px-2"><a href="{{route('main.page')}}" class="nav-link">الرئيسية</a>
                    </li>
                    <li class="hidden nav-item px-2"><a href="#" class="nav-link">بياناتي</a>
                    </li>
                    {{-- <div class=" hidden dropdown nav-item ">
                        <button class="btn  dropdown-toggle  nav-link" type="button" id="address_menu"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المساعدات الإغاثية
                        </button>
                        <div class="dropdown-menu text-right" aria-labelledby="address_menu">
                            <a class="dropdown-item " href="#">الرئيسية </a>

                            <a class="dropdown-item" href="{{ route('aid.myInfo') }}">
                                استعلام عن الاستفادة</a>

                        </div>
                    </div> --}}
                    @php
                        $route = Route::current()->uri();
                       
                    @endphp

                    @if ($route !== 'aid')
                        <div class=" hidden dropdown nav-item ">
                            <button class="btn  dropdown-toggle  nav-link" type="button" id="address_menu"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                الابلاغ عن اضرار
                            </button>
                            <div class="dropdown-menu text-right" aria-labelledby="address_menu">
                                <a class="dropdown-item " href="#"> title name </a>
                                    
                                   
                              
                            </div>
                        </div>
             
                    <li class="nav-item px-2"><a href="{{ route('about-us') }}" class="nav-link">حول الاغاثة</a></li>

                    @endif
                </ul>
            </div>


            <div>

                <p class="h5 text-light bg-danger text-center">Relief</p>

                <div class="d-flex justify-content-between align-items-center">
                    <button
                        class="btn btn-small text-muted"><small>{{ Auth::user()->full_name ?? 'Guest' }}</small></button>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf

                        <button type="submit" class="btn btn-small text-muted ">
                            <small>تسجيل
                                خروج</small> </button>
                    </form>

                </div>

            </div>
        </div>

    </nav>


</header>
