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
    <input type="text" name="message" title="message" v-model="message"/>

    <p>Here is your message: <span id="msg">@{{ message }}</span></p>
</div>

<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
    var data = {
        message: "Hello world"
    };

    new Vue({
        el: '#root',
        data: data
    });


    //    $(function () {
    //        var msgInput = $('input[name=message]');
    //        var msgOutput = $('#msg');
    //
    //        msgInput.val(data.message);
    //        msgOutput.text(data.message);
    //        msgInput.on('change', function (e) {
    //            data.message = msgInput.val();
    //            msgOutput.text(data.message);
    //        });
    //    });
</script>
</body>
</html>
