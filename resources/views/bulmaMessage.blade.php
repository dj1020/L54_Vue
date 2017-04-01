<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css"/>
    <style>
        body {
            padding-top: 40px;
        }
    </style>
</head>
<body>

<div id="root" class="container">

    <message title="Hello World" description="Here is my message"></message>
    <message title="Call Me" description="Call me when you see this message"></message>

</div>

<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="/js/bulmaMessage.js"></script>

</body>
</html>
