<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.partials.head')
</head>
<body>
    @include('frontend.layout.partials.header')
    <main class="main">
        @yield('content')
    </main>
    @include('frontend.layout.partials.footer')
    @include('frontend.layout.partials.foot')
</body>
</html>