<!-- header begin -->
<header class="transparent">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="de-flex sm-pt10">
                <div class="de-flex-col">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ url('/') }}">
                                <img alt="" class="logo" src="/images/logo-light.png" />
                                <img alt="" class="logo-2" src="/images/logo.png" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col">
                        <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                    </div>
                </div>
                <div class="de-flex-col header-col-mid">
                    <!-- mainmenu begin -->
                    <ul id="mainmenu">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/course/all') }}">Courses</a>
                        </li>
                        <li>
                            <a href="{{ url('/course/all') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ url('/course/all') }}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="menu_side_area">
                        <a href="{{ url('/home') }}" class="btn-main btn-wallet"><i class="fa fa-user"></i><span>Dashboard</span></a>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- header close -->