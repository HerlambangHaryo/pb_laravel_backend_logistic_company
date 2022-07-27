
<header class="top-header-area d-flex align-items-center justify-content-between">

    <!-- Left Side Content -->
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="index.html"><img src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class='lni lni-grid-alt'></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class='lni lni-grid-alt'></i>
            </div>
        </div> 
    </div>

    <!-- Right Side Navbar -->
    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class='lni lni-grid-alt'></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center"> 

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><img src="{{ asset('/public/ecaps_v12') }}/assets/img/member-img/team-2.jpg"
                        alt=""></button>

                <!-- Dropdown Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-thumbnail">
                                <img src="{{ asset('/public/ecaps_v12') }}/assets/img/member-img/team-2.jpg" alt="">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>Nazrul Islam</h6>
                                <span>help@example.com</span>
                            </div>
                        </div>

                        <a href="#" class="dropdown-item"><i class='lni lni-user'></i> My profile</a> 
                        <a href="login.html" class="dropdown-item"><i class='lni lni-lock'></i> Sign-out</a>
                    </div>
                </div>
            </li>
 
        </ul>
    </div>
    </header>