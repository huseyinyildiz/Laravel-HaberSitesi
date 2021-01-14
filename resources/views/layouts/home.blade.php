
<html>
<head>
    <title>Layout  - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
    xxxxxxxxx <br>
    yyyyyyyyyyyyyyyyyyyy <br>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
