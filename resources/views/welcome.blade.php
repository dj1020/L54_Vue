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
    <h2>Message List</h2>

    <ul class="message-list">
        <li v-for="msg in messages" v-text="msg.content"></li>
    </ul>

    <input id="msg" type="text" name="message" title="message" v-model="newMsg"/>
    <button id="addMsg" @click="addMsg" :disabled="isSending">Add a Message</button>
</div>

<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
    var app = new Vue({
        el: '#root',
        data: {
            newMsg: '',
            isSending: false,
            messages: [
                {content: "Buy a milk from supermarket", complete: false},
                {content: "Do my laundry", complete: true},
                {content: "Have a lunch with Ken", complete: false},
                {content: "Check if there are new videos", complete: true},
                {content: "Meet Sara tomorrow morning", complete: false}
            ]
        },

        methods: {
            addMsg: function () {
                this.messages.push(this.newMsg);
                this.newMsg = '';

                this.titleClass = 'color-green';
                this.isSending = true;

                setTimeout(function () {
                    this.isSending = false;
                }.bind(this), 2000);
            }
        }
    });
</script>
</body>
</html>
