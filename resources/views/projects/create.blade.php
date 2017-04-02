<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Projects</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css"/>
    <style>
        body {
            padding-top: 40px;
        }
    </style>
</head>
<body>

<div id="root" class="container">
    @include ('projects.list')

    <form action="/projects" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Project Name</label>
            <p class="control has-icon has-icon-right">
                <input class="input" type="text" name="name" placeholder="Project Name">
            </p>
            <p class="help is-danger"></p>
        </div>
        <div class="field">
            <label class="label">Project Description</label>
            <p class="control has-icon has-icon-right">
                <input class="input" type="text" name="description" placeholder="Project Description">
            </p>
            <p class="help is-danger"></p>
        </div>
        <div class="field is-grouped">
            <p class="control">
                <button class="button is-primary">Submit</button>
            </p>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="/js/projects.js"></script>

</body>
</html>
