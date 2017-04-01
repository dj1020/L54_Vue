<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <style>
        .complete {
            color: #999;
        }

        .incomplete {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div id="root">
    <h1>Hi Component!</h1>

    <task></task>

    {{--<task>Go to school</task>--}}
    {{--<task>Go to 7-11</task>--}}
    {{--<task>Go to the bank</task>--}}
    {{--<task>Go home</task>--}}

</div>

<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>
