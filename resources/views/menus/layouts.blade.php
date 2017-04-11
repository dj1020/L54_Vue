<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Multi-Level Menu Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>

<body class="{{ $pageName }}">
    @yield('content')

    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token()
    ]) !!};
    </script>
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    @yield('footer-js')
</body>

</html>
