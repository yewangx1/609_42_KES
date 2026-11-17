<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Клиенты</title>
</head>
<body>
    <h2>Список клиентов:</h2>
    <table border="1">
        <tr>
            <td>id</td>
            <td>ФИО</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="/user/{{$user->id}}">{{$user->name}}</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>