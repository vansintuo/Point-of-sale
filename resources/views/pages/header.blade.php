<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="fw-bold navbar-brand brand-logo " href="{{ url('homePage') }}" style="color:aqua">Bong.POS</a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('homePage') }}"><img src="images/logo-mini.svg"
                    alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="image/1676966775.jpg" width="100px" alt="ogo"
                        style="border-radius: 50%; background: #e0e0e0;box-shadow:  12px -12px 100px #707070,
             -12px 12px 100px #ffffff";>
                    <span class="nav-profile-name">VansinTuo</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="typcn typcn-cog-outline text-primary"></i>
                        Settings
                    </a>
                    <a class="dropdown-item">
                        <i class="typcn typcn-eject text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                    id="messageDropdown" href="#" data-toggle="dropdown">
                    <i class="typcn typcn-cog-outline mx-0"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-normal">VansinTuo
                            </h6>
                            <p class="font-weight-light small-text text-muted mb-0">
                                vansintuo@gmail.com
                            </p>
                        </div>
                    </a>


                    <a class="dropdown-item">
                        <div class="preview-item-content flex-grow">
                            <i class="typcn typcn-cog-outline text-primary">Settings</i>

                    </a>
                    <a class="dropdown-item" href="{{ url('logout') }}">
                        <i class="typcn typcn-eject text-primary"></i>
                        Logout
                    </a>
                </div>
                </a>

    </div>
    </li>


    <li class="nav-item dropdown mr-0">
        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
            id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="typcn typcn-bell mx-0"></i>
            <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
            aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                        <i class="typcn typcn-info mx-0"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        Just now
                    </p>
                </div>
            </a>
            <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                        <i class="typcn typcn-cog-outline mx-0"></i>
                    </div>
                </div>

                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        Private message
                    </p>
                </div>
            </a>
            <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                        <i class="typcn typcn-user mx-0"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        2 days ago
                    </p>
                </div>
            </a>
        </div>
    </li>

    </ul>

    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="typcn typcn-th-menu"></span>
    </button>

    </div>
</nav>
