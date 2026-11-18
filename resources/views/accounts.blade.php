<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Счета</title>
</head>
<body>
    <a href="{{url('account/create')}}">Добавить новый счет</a><br><br>
    <h2>Список всех счетов:</h2>
    <table border="1">
        <tr>
            <td>id счета</td>
            <td>Владелец</td>
            <td>Валюта</td>
            <td>Действия</td>
        </tr>
        @foreach ($accounts as $account)
            <tr>
                <td><a href="/account/{{$account->id}}">{{$account->id}}</a></td>
                <td>{{$account->user ? $account->user->name : 'Нет владельца'}}</td>
                <td>{{$account->currency}}</td>
                <td>
                    <a href="{{url('account/destroy/'.$account->id)}}">Удалить</a> |
                    <a href="{{url('account/edit/'.$account->id)}}">Редактировать</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>