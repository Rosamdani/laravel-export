<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <div id="wrapper">
        @include('layouts.sidebar')
        @yield('content')
    </div>

    @include('layouts.footer')
    @include('layouts.vendor')
</body>

</html>
