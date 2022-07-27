<!doctype html>
<html lang="en">

<head>
    @include('template.'.$template.'.partial.head_datatable')

</head>

<body>
    <!-- Preloader -->
    <x-ecaps_v120.preloader />  

    <div class="ecaps-page-wrapper">

        <x-ecaps_v120.sidebar-nav title="{{$active_as}}"/>
        
        @yield('content')
        
    </div>
 

    @include('template.'.$template.'.partial.script_form')

</body>

</html>