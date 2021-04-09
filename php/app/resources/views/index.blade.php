<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel + Vue.js</title>
</head>
<body>
<h1>Laravel + Vue.js</h1>

<div id="app">
    <example-component></example-component>
    <hello-component></hello-component>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
