<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

<section>
        <table id="table">
            <tr>
            <th>Исполнитель</th>
            <th><a id="add" href="#">Добавить</a></th>
            </tr>
        </table>
    </section>

</body>
<script src = '{{env('APP_URL')}}/js/main.js'></script>
</html>
