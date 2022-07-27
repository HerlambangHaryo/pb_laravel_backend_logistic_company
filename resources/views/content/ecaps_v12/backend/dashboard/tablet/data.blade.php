@extends('template.'.$template.'.dashboard')

@section('title', $panel_name)

@section('content')  

    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <x-ecaps_v120.top-header-area />

        <!-- Main Content Area -->
        <div class="main-content">
            <div class="main-container container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="dashboard-header-title mb-30">
                            <h4 class="mb-0">Welcome back</h4>
                            <p class="mb-0">Congratulations, You have sold 3 new items.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dashboard-infor-mation d-flex flex-wrap align-items-center mb-30">
                            <div class="dashboard-clock">
                                <div id="dashboardDate"></div>
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li id="hours"></li>
                                    <li>:</li>
                                    <li id="min"></li>
                                    <li>:</li>
                                    <li id="sec"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Pageviews</h6>
                                <p class="mb-0"><small>Last 7 days</small></p>
                            </div>
                            <div class="widget-content">
                                <div id="pageViews"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Revenue</h6>
                                <p class="mb-0"><small>Last 7 days</small></p>
                            </div>
                            <div class="widget-content">
                                <div id="revenueBar"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card widget-slider-area p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Sales</h6>
                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="btn btn-circle btn-sm btn-primary"><i
                                        class="lni lni-cart"></i></a>
                            </div>
                            <div class="widget-slides owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$630.63</h6>
                                    <p class="mb-0">Last 7 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$4987.36</h6>
                                    <p class="mb-0">Last 90 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card widget-slider-area p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Export</h6>
                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="btn btn-circle btn-sm btn-success"><i
                                        class="lni lni-exit-up"></i></a>
                            </div>
                            <div class="widget-slides owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$630.63</h6>
                                    <p class="mb-0">Last 7 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$4987.36</h6>
                                    <p class="mb-0">Last 90 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card border-0 widget-slider-area style-2 bg-primary p-4">
                            <div class="widget-slides owl-carousel">
                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Sales</h6>
                                        <span class="badge badge-pill badge-primary">79% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$79,639 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>

                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Sales</h6>
                                        <span class="badge badge-pill badge-primary">68% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$13,0278 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card border-0 widget-slider-area style-2 bg-success p-4">
                            <div class="widget-slides owl-carousel">
                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Cost</h6>
                                        <span class="badge badge-pill badge-primary">79% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$79,639 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>

                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Cost</h6>
                                        <span class="badge badge-pill badge-primary">68% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$13,0278 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card border-0 widget-slider-area style-2 bg-purple p-4">
                            <div class="widget-slides owl-carousel">
                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Export</h6>
                                        <span class="badge badge-pill badge-primary">79% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$79,639 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>

                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Export</h6>
                                        <span class="badge badge-pill badge-primary">68% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$13,0278 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card border-0 widget-slider-area style-2 bg-info p-4">
                            <div class="widget-slides owl-carousel">
                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Income</h6>
                                        <span class="badge badge-pill badge-primary">79% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$79,639 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>

                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                        <h6 class="mb-0 text-white">Income</h6>
                                        <span class="badge badge-pill badge-primary">68% Done</span>
                                    </div>
                                    <h6 class="text-white mb-0">$13,0278 <small>(+6.71)</small></h6>
                                    <p class="text-white mb-0">by last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card widget-slider-area p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Sales</h6>
                                <a href="#" class="btn btn-rounded btn-sm btn-primary"><i
                                        class="lni lni-cart"></i></a>
                            </div>
                            <div class="widget-slides owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$630.63</h6>
                                    <p class="mb-0">Last 7 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$4987.36</h6>
                                    <p class="mb-0">Last 90 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card widget-slider-area p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Export</h6>
                                <a href="#" class="btn btn-rounded btn-sm btn-success"><i
                                        class="lni lni-exit-up"></i></a>
                            </div>
                            <div class="widget-slides owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$630.63</h6>
                                    <p class="mb-0">Last 7 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$4987.36</h6>
                                    <p class="mb-0">Last 90 days</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card widget-slider-area p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Sales</h6>
                                <a href="#" class="btn btn-rounded btn-sm btn-primary"><i
                                        class="lni lni-cart"></i></a>
                            </div>
                            <div class="widget-slides owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$630.63</h6>
                                    <p class="mb-0">Last 7 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$4987.36</h6>
                                    <p class="mb-0">Last 90 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Widget -->
                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card widget-slider-area p-4">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <h6 class="card-title">Export</h6>
                                <a href="#" class="btn btn-rounded btn-sm btn-success"><i
                                        class="lni lni-exit-up"></i></a>
                            </div>
                            <div class="widget-slides owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$630.63</h6>
                                    <p class="mb-0">Last 7 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$1896.36</h6>
                                    <p class="mb-0">Last 30 days</p>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-content">
                                    <h6 class="mb-0">$4987.36</h6>
                                    <p class="mb-0">Last 90 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <!-- Widget Content -->
                        <div class="card widget-new-content p-4 bg-white full-height">
                            <div class="widget-stats d-flex justify-content-between mb-3">
                                <div class="widget-content-text">
                                    <h6 class="mb-0">Profits</h6>
                                    <p class="mb-0">Customer Value</p>
                                </div>
                                <h6 class="mb-0 text-success">$472.63</h6>
                            </div>

                            <span class="progress-description">25% Up</span>
                            <div class="progress h-5">
                                <div class="progress-bar w-25 bg-success" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <!-- Widget Content -->
                        <div class="card widget-new-content p-4 bg-white full-height">
                            <!-- Widget Stats -->
                            <div class="widget-stats d-flex justify-content-between mb-3">
                                <div class="widget-content-text">
                                    <h6 class="mb-0">Cost</h6>
                                    <p class="mb-0">Last month</p>
                                </div>
                                <h6 class="mb-0 text-warning">$526.23</h6>
                            </div>

                            <span class="progress-description">75% Down</span>
                            <div class="progress h-5">
                                <div class="progress-bar w-75 bg-warning" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <!-- Widget Content -->
                        <div class="card widget-new-content p-4 bg-white full-height">
                            <!-- Widget Stats -->
                            <div class="widget-stats d-flex justify-content-between mb-3">
                                <div class="widget-content-text">
                                    <h6 class="mb-0">Orders</h6>
                                    <p class="mb-0">Fresh Order Amount</p>
                                </div>
                                <h6 class="mb-0 text-primary">$652.27</h6>
                            </div>

                            <span class="progress-description">75% Up</span>
                            <div class="progress h-5">
                                <div class="progress-bar w-75 bg-primary" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <!-- Widget Content -->
                        <div class="card widget-new-content p-4 bg-white full-height">
                            <!-- Widget Stats -->
                            <div class="widget-stats d-flex justify-content-between mb-3">
                                <div class="widget-content-text">
                                    <h6 class="mb-0">Overview</h6>
                                    <p class="mb-0">This week overview</p>
                                </div>
                                <h6 class="mb-0 text-info">652</h6>
                            </div>

                            <span class="progress-description">+50%</span>
                            <div class="progress h-5">
                                <div class="progress-bar w-50 bg-info" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-6 mb-30">
                        <div class="card">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Sales Overview</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown8819"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown8819">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <div id="salesOverview"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">User By Countries</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown881"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown881">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="world-map-markers" class="world-vector-map"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0">Earnings</h5>
                                <!-- Nav Tabs -->
                                <ul class="nav total-earnings nav-tabs mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="today-earnings-tab" data-toggle="tab"
                                            href="{{ asset('/public/ecaps_v12') }}/assets/#today-earnings" role="tab" aria-controls="today-earnings"
                                            aria-selected="true">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mr-0" id="month-earnings-tab" data-toggle="tab"
                                            href="{{ asset('/public/ecaps_v12') }}/assets/#month-earnings" role="tab" aria-controls="month-earnings"
                                            aria-selected="false">Month</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="userList">
                                    <div class="tab-pane fade active show" id="today-earnings" role="tabpanel"
                                        aria-labelledby="today-earnings-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Nazrul Islam</h6>
                                                        <p class="mb-0">Visual Designer</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-primary badge-pill">$985</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-2.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Nazrul Islam</h6>
                                                        <p class="mb-0">Product Designer</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-success badge-pill">$364</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-3.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Niloy Disk</h6>
                                                        <p class="mb-0">Web Developer</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-info badge-pill">$321</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-primary badge-pill">$1.9k</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-5.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Nick Stone</h6>
                                                        <p class="mb-0">Visual Designer</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-success badge-pill">$879</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-6.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-info badge-pill">$455</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="month-earnings" role="tabpanel"
                                        aria-labelledby="month-earnings-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-6.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-outline-info badge-pill">$455</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-outline-info badge-pill">$1.9k</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-1.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Nazrul Islam</h6>
                                                        <p class="mb-0">Visual Designer</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-outline-info badge-pill">$985</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-outline-info badge-pill">$1.9k</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-5.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Nick Stone</h6>
                                                        <p class="mb-0">Visual Designer</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-outline-info badge-pill">$879</span>
                                            </li>
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-7.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <span class="badge badge-outline-info badge-pill">$1.6k</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Order Statistics</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown81"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown81">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div id="OrderStatistics"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Yearly Sales Overview</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown98"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown98">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="yearly-sales-chart mt-4 mb-4">
                                            <div id="yearlySalesChart"></div>
                                        </div>
                                        <div class="text-center">
                                            <h6>This Year's Revenue</h6>
                                            <h5 class="mb-0">$155,869.78</h5>
                                            <p class="mb-0">Sales performance for 2020</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-12">
                                        <div class="monthly-sales-chart mt-5 mb-4">
                                            <div id="monthlysales"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h6>This Month Income</h6>
                                        <h5 class="mb-0">$83,320.50</h5>
                                        <p class="mb-0"><span class="success-text">0.7%</span> higher then previous
                                            month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0">New Users</h5>
                                <!-- Nav Tabs -->
                                <ul class="nav total-earnings nav-tabs mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="today-users-tab" data-toggle="tab"
                                            href="{{ asset('/public/ecaps_v12') }}/assets/#today-users" role="tab" aria-controls="today-users"
                                            aria-selected="true">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mr-0" id="month-users-tab" data-toggle="tab"
                                            href="{{ asset('/public/ecaps_v12') }}/assets/#month-users" role="tab" aria-controls="month-users"
                                            aria-selected="false">Month</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="userList2">
                                    <div class="tab-pane fade active show" id="today-users" role="tabpanel"
                                        aria-labelledby="today-users-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-2.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6>Nazrul Islam</h6>
                                                        <p class="mb-0">Product Designer</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-primary">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-3.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Niloy Disk</h6>
                                                        <p class="mb-0">Web Developer</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-success">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-info">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-5.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Nick Stone</h6>
                                                        <p class="mb-0">Visual Designer</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-warning">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-6.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-danger">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-7.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-secondary">Follow</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="month-users" role="tabpanel"
                                        aria-labelledby="month-users-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-6.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-info">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-2.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Nazrul Islam</h6>
                                                        <p class="mb-0">Product Designer</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-primary">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-3.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Niloy Disk</h6>
                                                        <p class="mb-0">Web Developer</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-success">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-1.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Nazrul Islam</h6>
                                                        <p class="mb-0">Visual Designer</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-danger">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Wiltor Delton</h6>
                                                        <p class="mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-warning">Follow</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-5.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">Nick Stone</h6>
                                                        <p class="mb-0">Visual Designer</p>
                                                    </div>
                                                </div>
                                                <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="badge badge-success">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <div class="widget-social-content p-4 bg-primary full-height">
                            <h6 class="text-white">Facebook Users</h6>
                            <h5 class="text-white mb-0 line-height-1 counter">17989</h5>
                            <!-- Widget Social Icon -->
                            <div class="widget-social-icon">
                                <i class="lni lni-facebook" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <div class="widget-social-content p-4 bg-primary full-height">
                            <h6 class="text-white">Twitter Users</h6>
                            <h5 class="text-white mb-0 line-height-1 counter">12978</h5>
                            <!-- Widget Social Icon -->
                            <div class="widget-social-icon">
                                <i class="lni lni-twitter" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <div class="widget-social-content p-4 bg-danger full-height">
                            <h6 class="text-white">Pinterest Users</h6>
                            <h5 class="text-white mb-0 line-height-1 counter">36915</h5>
                            <!-- Widget Social Icon -->
                            <div class="widget-social-icon">
                                <i class="lni lni-pinterest" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3 mb-30">
                        <div class="widget-social-content p-4 bg-primary full-height">
                            <h6 class="text-white">Instagram Users</h6>
                            <h5 class="text-white mb-0 line-height-1 counter">63784</h5>
                            <!-- Widget Social Icon -->
                            <div class="widget-social-icon">
                                <i class="lni lni-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                                <h6 class="card-title mb-0">Support</h6>
                                <ul class="nav nav-tabs mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="sell-03-tab" data-toggle="tab"
                                            href="{{ asset('/public/ecaps_v12') }}/assets/#sell-03" role="tab" aria-controls="sell-03"
                                            aria-selected="true">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mr-0" id="rent-04-tab" data-toggle="tab" href="{{ asset('/public/ecaps_v12') }}/assets/#rent-04"
                                            role="tab" aria-controls="rent-04" aria-selected="false">Week</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="ticketList">
                                    <div class="tab-pane fade active show" id="sell-03" role="tabpanel"
                                        aria-labelledby="sell-03-tab">
                                        <ul class="ticket-data-list">
                                            <li>
                                                <div class="avatar-area d-flex">
                                                    <span class="avatar avatar-pending mr-3">L</span>
                                                    <div class="avatar-text">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>Lim Sarah</h6>
                                                            <small class="ticket-time">9:40 PM</small>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Nisi eos recusandae obcaecati repudiandae harum quae
                                                            reprehenderit dicta reiciendis vero nulla dolores velit
                                                            odit dignissimos.</p>
                                                        <span class="badge badge-pill badge-primary">Open</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="avatar-area d-flex">
                                                    <span class="avatar mr-3">R</span>
                                                    <div class="avatar-text">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>Ritu Jitu</h6>
                                                            <small class="ticket-time">03.57 PM</small>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Dolore aliquam cum similique placeat distinctio earum
                                                            omnis ducimus minus nisi hic praesentium, vitae ea optio
                                                            eos perspiciatis maiores aut.</p>
                                                        <span class="badge badge-pill badge-secondary">Closed</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="avatar-area d-flex">
                                                    <span class="avatar avatar-online mr-3">A</span>
                                                    <div class="avatar-text">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>Nazrul Islam</h6>
                                                            <small class="ticket-time">11.31 AM</small>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Commodi sequi optio fuga dolorem, aut similique tempore
                                                            voluptas. Quasi quod, ut neque, possimus, ipsum
                                                            consectetur dolor quibusdam itaque enim atque aliquam!
                                                        </p>
                                                        <span class="badge badge-pill badge-warning">Pending</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="rent-04" role="tabpanel"
                                        aria-labelledby="rent-04-tab">
                                        <ul class="ticket-data-list">
                                            <li>
                                                <div class="avatar-area d-flex">
                                                    <span class="avatar mr-3">R</span>
                                                    <div class="avatar-text">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>Ritu Jitu</h6>
                                                            <small class="ticket-time">03.57 PM</small>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Dolore aliquam cum similique placeat distinctio earum
                                                            omnis ducimus minus nisi hic praesentium, vitae ea optio
                                                            eos perspiciatis maiores aut.</p>
                                                        <span class="badge badge-pill badge-secondary">Closed</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="avatar-area d-flex">
                                                    <span class="avatar avatar-pending mr-3">L</span>
                                                    <div class="avatar-text">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>Lim Sarah</h6>
                                                            <small class="ticket-time">9:40 PM</small>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Nisi eos recusandae obcaecati repudiandae harum quae
                                                            reprehenderit dicta reiciendis vero nulla dolores velit
                                                            odit dignissimos.</p>
                                                        <span class="badge badge-pill badge-primary">Open</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="avatar-area d-flex">
                                                    <span class="avatar avatar-online mr-3">A</span>
                                                    <div class="avatar-text">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>Nazrul Islam</h6>
                                                            <small class="ticket-time">11.31 AM</small>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Commodi sequi optio fuga dolorem, aut similique tempore
                                                            voluptas. Quasi quod, ut neque, possimus, ipsum
                                                            consectetur dolor quibusdam itaque enim atque aliquam!
                                                        </p>
                                                        <span class="badge badge-pill badge-warning">Pending</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Recent Comments</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown56"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown56">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="comment-widgets-area">
                                    <div class="widgets-single-comment d-flex">
                                        <div><img class="comment-auth-thumb mr-3" src="img/member-img/team-2.jpg"
                                                alt=""></div>
                                        <div class="comment-text">
                                            <div class="d-flex justify-content-between">
                                                <h5>Jhon Anderson</h5>
                                                <span class="comment-date">Jun 14, 2020</span>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and type setting
                                                industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                                printing and type setting industry.</p>
                                            <div
                                                class="comment-footer d-flex align-items-center justify-content-between mt-15">
                                                <div class="action-icons">
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="lni lni-pencil"></i></a>
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Approve"><i class="lni lni-checkmark"></i></a>
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><i class="lni lni-heart"></i></a>
                                                </div>
                                                <span class="badge badge-primary">Pending</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widgets-single-comment d-flex">
                                        <div><img class="comment-auth-thumb mr-3" src="img/member-img/team-3.jpg"
                                                alt=""></div>
                                        <div class="comment-text">
                                            <div class="d-flex justify-content-between">
                                                <h5>Insan Islam</h5>
                                                <span class="comment-date">Mar 14, 2020</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates,
                                                debitis. Quaerat, laboriosam. Earum quia, quibusdam autem qui
                                                dolorem architecto eaque nobis nulla quaerat necessitatibus.
                                                quibusdam autem qui dolorem!</p>
                                            <div
                                                class="comment-footer d-flex align-items-center justify-content-between mt-15">
                                                <div class="action-icons">
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="lni lni-pencil"></i></a>
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Approve"><i class="lni lni-checkmark"></i></a>
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><i class="lni lni-heart"></i></a>
                                                </div>
                                                <span class="badge badge-success">Approved</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widgets-single-comment d-flex">
                                        <div><img class="comment-auth-thumb mr-3" src="img/member-img/team-4.jpg"
                                                alt=""></div>
                                        <div class="comment-text">
                                            <div class="d-flex justify-content-between">
                                                <h5>Lara Smith</h5>
                                                <span class="comment-date">Jun 14, 2020</span>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and type setting
                                                industry. Lorem Ipsum has beenorem. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Dignissimos tempora inventore.</p>
                                            <div
                                                class="comment-footer d-flex align-items-center justify-content-between mt-15">
                                                <div class="action-icons">
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="lni lni-pencil"></i></a>
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Approve"><i class="lni lni-checkmark"></i></a>
                                                    <a href="{{ asset('/public/ecaps_v12') }}/assets/#" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><i class="lni lni-heart"></i></a>
                                                </div>
                                                <span class="badge badge-danger">Rejected</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Daily Sales</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown819"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown819">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div id="dailySales"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Product Catagory</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown819"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown819">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="donut-chart-wrap">
                                    <div id="catagorydonutChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card p-4 bg-white">
                            <div class="widget-slider-3 owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-facebook"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">14,281</h5>
                                            <p class="mb-0 text-success"><i class="lni lni-chevron-up"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>35689</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-50 bg-success" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-twitter"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">14,281</h5>
                                            <p class="mb-0 text-success"><i class="lni lni-chevron-up"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>35689</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-50 bg-success" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card p-4 bg-white">
                            <div class="widget-slider-3 owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-dollar"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">25,965</h5>
                                            <p class="mb-0 text-danger"><i class="lni lni-chevron-down"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>100,000</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-25 bg-primary" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-money-location"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">2,300</h5>
                                            <p class="mb-0 text-success"><i class="lni lni-chevron-up"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>10,200</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-50 bg-primary" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card p-4 bg-white">
                            <div class="widget-slider-3 owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-bulb"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">11,785</h5>
                                            <p class="mb-0 text-success"><i class="lni lni-chevron-up"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>11,785</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-100 bg-warning" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-signal"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">9,321</h5>
                                            <p class="mb-0 text-success"><i class="lni lni-chevron-up"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>35689</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-75 bg-waning" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-30">
                        <div class="card p-4 bg-white">
                            <div class="widget-slider-3 owl-carousel">
                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-pallet"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">14,281</h5>
                                            <p class="mb-0 text-success"><i class="lni lni-chevron-up"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>35689</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-50 bg-info" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Widget Slider Content -->
                                <div class="widget-slider-3-area">
                                    <div
                                        class="slider-icon-text-area d-flex justify-content-between align-items-center">
                                        <div class="icon">
                                            <i class="lni lni-layers"></i>
                                        </div>
                                        <div class="text text-right">
                                            <h5 class="mb-0">14,281</h5>
                                            <p class="mb-0 text-success"><i class="lni lni-chevron-up"></i> +5.79%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slider-content-text">
                                        <h6>Goal: <span>35689</span></h6>
                                        <div class="progress h-5">
                                            <div class="progress-bar w-100 bg-info" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Browser Stats</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown57"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown57">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div
                                    class="single-browser-area d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <img class="mr-3" src="img/core-img/crome.png" alt="">
                                        <h6 class="mb-0">Google Chrome</h6>
                                    </div>
                                    <span class="badge badge-pill badge-outline-primary">35%</span>
                                </div>

                                <div
                                    class="single-browser-area d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <img class="mr-3" src="img/core-img/firefox.png" alt="">
                                        <h6 class="mb-0">Mozila Firefox</h6>
                                    </div>
                                    <span class="badge badge-pill badge-outline-warning">30%</span>
                                </div>

                                <div
                                    class="single-browser-area d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <img class="mr-3" src="img/core-img/safari.png" alt="">
                                        <h6 class="mb-0">Safari</h6>
                                    </div>
                                    <span class="badge badge-pill badge-outline-info">15%</span>
                                </div>

                                <div
                                    class="single-browser-area d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <img class="mr-3" src="img/core-img/ie.png" alt="">
                                        <h6 class="mb-0">Internet Explorer</h6>
                                    </div>
                                    <span class="badge badge-pill badge-outline-primary">8%</span>
                                </div>

                                <div
                                    class="single-browser-area d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <img class="mr-3" src="img/core-img/edge.png" alt="">
                                        <h6 class="mb-0">Edge</h6>
                                    </div>
                                    <span class="badge badge-pill badge-outline-success">5%</span>
                                </div>

                                <div
                                    class="single-browser-area d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <img class="mr-3" src="img/core-img/opera.png" alt="">
                                        <h6 class="mb-0">Opera Mini</h6>
                                    </div>
                                    <span class="badge badge-pill badge-outline-success">4%</span>
                                </div>

                                <div class="single-browser-area d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mr-3">
                                        <img class="mr-3" src="img/core-img/uc.png" alt="">
                                        <h6 class="mb-0">UC Browser</h6>
                                    </div>
                                    <span class="badge badge-pill badge-outline-info">3%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card full-height">
                            <div
                                class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Recent Feeds</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dashboardDropdown51"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="lni lni-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dashboardDropdown51">
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-pencil"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-cog"></i>
                                                Settings</a>
                                            <a class="dropdown-item" href="{{ asset('/public/ecaps_v12') }}/assets/#"><i class="lni lni-trash"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="notifications-box">
                                            <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="nav-link pt-0"><i
                                                    class="lni lni-heart bg-success"></i>
                                                <span>We've got something for you!</span>
                                            </a>
                                            <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="nav-link"><i
                                                    class="lni lni-alarm bg-danger"></i><span>Domain names expiring
                                                    on Tuesday</span>
                                            </a>
                                            <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="nav-link"><i class="lni lni-checkmark"></i><span>Your
                                                    commissions has been sent</span>
                                            </a>
                                            <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="nav-link"><i
                                                    class="lni lni-heart bg-success"></i><span>You sold an
                                                    item!</span>
                                            </a>
                                            <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="nav-link"><i
                                                    class="lni lni-alarm bg-warning"></i><span>Security alert for
                                                    your linked Google account</span>
                                            </a>
                                            <a href="{{ asset('/public/ecaps_v12') }}/assets/#" class="nav-link pb-0"><i
                                                    class="lni lni-heart bg-success"></i>
                                                <span>We've got something for you!</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Area -->
            <footer class="footer-area d-flex align-items-center flex-wrap">
                <!-- Copywrite Text -->
                <div class="copywrite-text">
                    <p>Ecaps &copy; 2020 created by <a href="{{ asset('/public/ecaps_v12') }}/assets/https://wrapbootstrap.com/user/DesigningWorld"
                            target="_blank">Designing World</a></p>
                </div>
                <!-- Footer Nav -->
                <ul class="footer-nav d-flex align-items-center">
                    <li><a href="{{ asset('/public/ecaps_v12') }}/assets/#">About</a></li>
                    <li><a href="{{ asset('/public/ecaps_v12') }}/assets/#">Privacy</a></li>
                    <li><a href="{{ asset('/public/ecaps_v12') }}/assets/#">Purchase</a></li>
                </ul>
            </footer>
        </div>
    </div>
   

@endsection