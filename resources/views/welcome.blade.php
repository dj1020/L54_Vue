<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    </style>
</head>
<body>
<div id="root">
    <ul class="message-list">
        <li v-for="msg in messages">@{{ msg }}</li>
    </ul>

    <input id="msg" type="text" name="message" title="message"/>
    <button id="addMsg">Add a Message</button>
</div>

<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
    var data = {
        messages: [
            "Hello world",
            "Today is a good day",
            "April showers bring May flowers"
        ]
    };

    var app = new Vue({
        el: '#root',
        data: data
    });

    $('#addMsg').on('click', function () {
        var msgInput = $('#msg');

        app.messages.push(msgInput.val());

        msgInput.val('');
    });
</script>
</body>
</html>
