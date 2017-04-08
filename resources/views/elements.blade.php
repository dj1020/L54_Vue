<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>

<div id="elements">

    <h2>@{{ title }}</h2>

    <example></example>
    <ex-layout></ex-layout>

</div>

<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token()
    ]) !!};
</script>
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/elements.js"></script>

</body>
</html>
