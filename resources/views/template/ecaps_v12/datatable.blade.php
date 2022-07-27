<!doctype html>
<html lang="en">

<head>
    @include('template.'.$template.'.partial.head_datatable')

</head>

<body>
    <!-- Preloader -->
    <div id="preloader" class="d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
   
    <div class="ecaps-page-wrapper">

        <x-ecaps_v120.sidebar-nav title="{{$active_as}}"/>
        
        @yield('content')
        
    </div>
 
    @include('template.'.$template.'.partial.script_datatable')
 
</body>

</html>