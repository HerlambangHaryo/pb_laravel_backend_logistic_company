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
                            <h4 class="mb-0">Hi, Welcome back</h4>
                        </div>
                    </div> 
                </div> 
            </div>

            <!-- Footer Area --> 
        </div>
    </div>
   

@endsection