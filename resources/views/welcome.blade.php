<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/style.css">
</head>
<body>
<section>
    <form action="{{env("APP_URL")}}/users" method="POST">
        <table id="table">
            @csrf
            <tr>
                <th>Учасник</th>
                <th><a id="add">Добавить</a></th>
            </tr>
        </table>
        <input type="submit" value="confirm">
    </form>
</section>
</body>
<script src="{{env("APP_ULR")}}/js/main.js"></script>
</html>
