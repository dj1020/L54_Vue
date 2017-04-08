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

    <i class="el-icon-edit"></i>
    <i class="el-icon-share"></i>
    <i class="el-icon-delete"></i>

    <el-button type="primary" icon="search">Search</el-button>
    <el-button type="primary">Upload<i class="el-icon-upload el-icon-right"></i></el-button>

    <ex-datepicker></ex-datepicker>
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
