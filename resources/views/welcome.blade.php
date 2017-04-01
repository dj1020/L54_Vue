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
        .color-red {
            color: red;
        }
    </style>
</head>
<body>
<div id="root">
    <h1 v-bind:class="titleClass">Message List</h1>

    <ul class="message-list">
        <li v-for="msg in messages" v-text="msg"></li>
    </ul>

    <input id="msg" type="text" name="message" title="message" v-model="newMsg"/>
    <button id="addMsg" @click="addMsg">Add a Message</button>
</div>

<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
    var app = new Vue({
        el: '#root',
        data: {
            titleClass: 'color-red',
            newMsg: '',
            messages: [
                "Hello world",
                "Today is a good day",
                "April showers bring May flowers"
            ]
        },

        methods: {
            addMsg: function () {
                this.messages.push(this.newMsg);
                this.newMsg = '';
            }
        }
    });
</script>
</body>
</html>
