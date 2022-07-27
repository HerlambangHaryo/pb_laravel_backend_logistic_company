<!-- Sidemenu Area -->
<div class="ecaps-sidemenu-area">
    <!-- Logo -->
    <div class="ecaps-logo">
        <a href="index.html">
            <img class="desktop-logo" src="img/core-img/logo.png" alt="Desktop Logo">
            <img class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo">
        </a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="@if($title == 'Dashboard') active @endif">
                        <a href="{{ route('Dashboard.index') }}">
                            <i class="fa fa-desktop"></i> 
                            <span>
                                Dashboard
                            </span>
                        </a>
                    </li> 
                    <li class="@if($title == 'Orders') active @endif">
                        <a href="{{ route('Orders.index') }}">
                            <i class="fa fa-desktop"></i> 
                            <span>
                                Orders
                            </span>
                        </a>
                    </li> 
                    


                </ul>
            </nav>
        </div>
    </div>
</div>